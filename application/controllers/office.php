<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Office extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('office_model');
		$this->load->model('factory_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->helper('text');
		
	}


	public function office_balance_sheet()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "hello  office_balance_sheet";
			$this->load->view('Admin/office/office_balance_sheet');
			
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	
	public function office_due_report()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "hello  office_due_report";
			date_default_timezone_set("Asia/Dhaka"); 
	        $data['year'] = date('Y');
			$this->load->view('Admin/office/office_due_report',$data);
		}
		else
		{
			redirect('home/index','refresh');
		}

	}
	
	public function office_due_report_details()
	{
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('month','Month','required');
			if($this->form_validation->run()==FALSE)
			{
				$this->office_view_report();
			}
			else
			{
				$data['month'] = $this->input->get_post('month');
				$data['year'] = $this->input->get_post('year');
		
				$result =$this->office_model->debit_credit_due_report($data);
				$this->parser->parse('Admin/office/debit_credit_due_report',$result);
			
			}
		}
	}
	
	

	public function office_order_details()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "hello  office_order_sheet";
			$this->load->view('Admin/office/office_order_details');
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function office_add_new_order_form()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "hello  office_order_sheet";
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			date_default_timezone_set("Asia/Dhaka"); 
	        $date =  date('Y-m-d');
	        $data['year'] = date('Y');
	        $month = date('m');
	        $day = date('d');
	        $data['list'] = $this->factory_model->category_list();
			$this->load->view('Admin/office/office_order_form',$data);
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	

	public function last_order($id)
	{
      if($this->session->userdata('logged_in'))
		{
			//echo "id: ".$id;
			$result = $this->office_model->last_order_details_office($id);
			$this->parser->parse('Admin/office/specific_order_details_office',$result);
			
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function office_view_order()
	{
		if($this->session->userdata('logged_in'))
		{
			 $config['base_url'] = "/pk/office/office_view_order";
			 $config['per_page'] = 12;
			 $config['num_links'] = 5;
		     $config["uri_segment"] = 3;
			 $config['total_rows'] = $this->office_model->office_view_order_pagination();
			 //echo $config['total_rows'];
			 $config['full_tag_open'] = '<ul class="pagination">';
	         $config['full_tag_close'] = '</ul>';
	         $config['first_link'] = false;
	         $config['last_link'] = false;
	         $config['first_tag_open'] = '<li>';
	         $config['first_tag_close'] = '</li>';
	         $config['prev_link'] = '&laquo';
	         $config['prev_tag_open'] = '<li class="prev">';
	         $config['prev_tag_close'] = '</li>';
	         $config['next_link'] = '&raquo';
	         $config['next_tag_open'] = '<li>';
	         $config['next_tag_close'] = '</li>';
	         $config['last_tag_open'] = '<li>';
	         $config['last_tag_close'] = '</li>';
	         $config['cur_tag_open'] = '<li class="active"><a href="#">';
	         $config['cur_tag_close'] = '</a></li>';
	         $config['num_tag_open'] = '<li>';
	         $config['num_tag_close'] = '</li>';
	         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       
            $this->pagination->initialize($config);

			$result['list'] = $this->office_model->office_view_order($config['per_page'],$page);
			$result['links'] = $this->pagination->create_links();
			$this->parser->parse('Admin/office/office_view_order',$result);
		}
		else
		{
			redirect('home/index','refresh');
		}
	}


	//...............................new........................................


	public function particular_list()
	{
		if($this->session->userdata('logged_in'))
		{

			$config['base_url'] = "/pk/office/particular_list";
			 $config['per_page'] = 30;
			 $config['num_links'] = 5;
		     $config["uri_segment"] = 3;
			 $config['total_rows'] = $this->office_model->particular_list_pagination();
			 //echo $config['total_rows'];
			 $config['full_tag_open'] = '<ul class="pagination">';
	         $config['full_tag_close'] = '</ul>';
	         $config['first_link'] = false;
	         $config['last_link'] = false;
	         $config['first_tag_open'] = '<li>';
	         $config['first_tag_close'] = '</li>';
	         $config['prev_link'] = '&laquo';
	         $config['prev_tag_open'] = '<li class="prev">';
	         $config['prev_tag_close'] = '</li>';
	         $config['next_link'] = '&raquo';
	         $config['next_tag_open'] = '<li>';
	         $config['next_tag_close'] = '</li>';
	         $config['last_tag_open'] = '<li>';
	         $config['last_tag_close'] = '</li>';
	         $config['cur_tag_open'] = '<li class="active"><a href="#">';
	         $config['cur_tag_close'] = '</a></li>';
	         $config['num_tag_open'] = '<li>';
	         $config['num_tag_close'] = '</li>';
	         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       
            $this->pagination->initialize($config);

            $debit_sum = $this->office_model->debit_sum();
			$credit_sum = $this->office_model->credit_sum();
			

			$result1['list'] =  $this->office_model->office_model->balance_list($config['per_page'],$page);
			$result1['links'] = $this->pagination->create_links();
			$result = $debit_sum+$credit_sum +$result1;
			$this->parser->parse('Admin/office/particular_list',$result);
			//$data['list'] = $this->office_model->balance_list();
			//$this->parser->parse('Admin/office/particular_list',$data);
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function particulars_form()
	{
		if($this->session->userdata('logged_in'))
		{
			
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			date_default_timezone_set("Asia/Dhaka"); 
	        $date =  date('Y-m-d');
	        $data['year'] = date('Y');
	        $month = date('m');
	        $day = date('d');
	        $this->load->view('Admin/office/new_particulars_form',$data);
			
		}
		else
		{
			redirect('home/index','refresh');
		}

	}

	public function new_particulars_data()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "not done yet";
			if($this->input->get_post('submit'))
			{
				$this->form_validation->set_rules('particulars','Particulars Name','trim|required');
				if($this->form_validation->run()==FALSE)
				{
					$this->particulars_form();
				}
				else
				{
					$data['particulars'] = $this->input->get_post('particulars');
					$debit = $this->input->get_post('debit_amount');
					$data['credit_amount'] = $this->input->get_post('credit_amount');

					$data['debit_amount']= $debit;
					date_default_timezone_set("Asia/Dhaka"); 
	                $data['date'] =  date('Y-m-d');
	                $data['time'] = date("h:i:sa");
	                
	                $data['month'] = date('m');
	                $data['year'] = date('Y');

	                $this->office_model-> particulars_data($data);

				}
			}
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function particular_edit($id)
	{
      if($this->session->userdata('logged_in'))
		{
			
			$result = $this->office_model->particular_edit($id);
			$this->parser->parse('Admin/office/particular_edit',$result);
			
		}
		else
		{
			redirect('home/index','refresh');
		}

	}

	public function particulars_update_data()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "not done yet";
			if($this->input->get_post('submit'))
			{
				$this->form_validation->set_rules('particulars','Particulars Name','trim|required');
				if($this->form_validation->run()==FALSE)
				{
					$this->particulars_form();
				}
				else
				{
					$data['particulars'] = $this->input->get_post('particulars');
					$debit = $this->input->get_post('debit_amount');
					$data['credit_amount'] = $this->input->get_post('credit_amount');

					$data['debit_amount']= $debit;
					$data['id']= $this->input->get_post('id');
					
	                $this->office_model-> particulars_update($data);

				}
			}
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function particular_delete($id)
	{
		if($this->session->userdata('logged_in'))
		{
			
			$this->office_model->particular_delete($id);
			
		}
		else
		{
			redirect('home/index','refresh');
		}
	}


	public function view_report()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "hello  office_view_report";
			date_default_timezone_set("Asia/Dhaka"); 
	        $data['year'] = date('Y');
			$this->load->view('Admin/office/view_report',$data);

		}
		else
		{
			redirect('home/index','refresh');
		}

	}

	public function view_report_details()
	{
		
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('month','Month','required');
			if($this->form_validation->run()==FALSE)
			{
				$this->view_report();
			}
			else
			{
				$data['month'] = $this->input->get_post('month');
				$data['year'] = $this->input->get_post('year');

                $config['base_url'] = "/pk/office/view_report_details";
				 $config['per_page'] = 10000;
				 $config['num_links'] = 5;
			     $config["uri_segment"] = 3;
				 $config['total_rows'] = $this->office_model->report_monthly_pagination($data);
				 //echo $config['total_rows'];
				$config['full_tag_open'] = '<ul class="pagination">';
		         $config['full_tag_close'] = '</ul>';
		         $config['first_link'] = false;
		         $config['last_link'] = false;
		         $config['first_tag_open'] = '<li>';
		         $config['first_tag_close'] = '</li>';
		         $config['prev_link'] = '&laquo';
		         $config['prev_tag_open'] = '<li class="prev">';
		         $config['prev_tag_close'] = '</li>';
		         $config['next_link'] = '&raquo';
		         $config['next_tag_open'] = '<li>';
		         $config['next_tag_close'] = '</li>';
		         $config['last_tag_open'] = '<li>';
		         $config['last_tag_close'] = '</li>';
		         $config['cur_tag_open'] = '<li class="active"><a href="#">';
		         $config['cur_tag_close'] = '</a></li>';
		         $config['num_tag_open'] = '<li>';
		         $config['num_tag_close'] = '</li>';
		         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	       
	            $this->pagination->initialize($config);

                $debit_sum = $this->office_model->debit_sum_monthly($data);
				$credit_sum = $this->office_model->credit_sum_monthly($data);
				

				$result1['list'] =  $this->office_model->view_report_monthly($data,$config['per_page'],$page);
				$result1['links'] = $this->pagination->create_links();
				$result = $debit_sum+$credit_sum +$result1;
				$this->parser->parse('Admin/office/particular_list',$result);

			}
		}
	}



	//................................order method...............

	public function office_order()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "office_order";
			$config['base_url'] = "/pk/office/office_order";
			 $config['per_page'] = 20;
			 $config['num_links'] = 5;
		     $config["uri_segment"] = 3;
			 $config['total_rows'] = $this->office_model->office_client_pagination();
			 //echo $config['total_rows'];
			 $config['full_tag_open'] = '<ul class="pagination">';
	         $config['full_tag_close'] = '</ul>';
	         $config['first_link'] = false;
	         $config['last_link'] = false;
	         $config['first_tag_open'] = '<li>';
	         $config['first_tag_close'] = '</li>';
	         $config['prev_link'] = '&laquo';
	         $config['prev_tag_open'] = '<li class="prev">';
	         $config['prev_tag_close'] = '</li>';
	         $config['next_link'] = '&raquo';
	         $config['next_tag_open'] = '<li>';
	         $config['next_tag_close'] = '</li>';
	         $config['last_tag_open'] = '<li>';
	         $config['last_tag_close'] = '</li>';
	         $config['cur_tag_open'] = '<li class="active"><a href="#">';
	         $config['cur_tag_close'] = '</a></li>';
	         $config['num_tag_open'] = '<li>';
	         $config['num_tag_close'] = '</li>';
	         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       
            $this->pagination->initialize($config);

			$result['list'] = $this->office_model->office_client($config['per_page'],$page);
			$result['links'] = $this->pagination->create_links();
			$this->parser->parse('Admin/office/office_client',$result);

		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function product_order($id)
	{
		if($this->session->userdata('logged_in'))
		{
			
         //echo 'employee_id'.$id;
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			date_default_timezone_set("Asia/Dhaka"); 
	        $date =  date('Y-m-d');
	        $data['year'] = date('Y');
	        $month = date('m');
	        $day = date('d');
	        $data['employee_id'] = $id;
	        $data['list'] = $this->factory_model->category_list();
	        $result = $this->office_model->client_details($id);

	        $data1 = $result+$data;
			$this->load->view('Admin/office/office_order_form',$data1);
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function office_new_order_data()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "not done yet";
			if($this->input->get_post('submit'))
			{
				$this->form_validation->set_rules('invoice_no',' Invoice Number','trim|required');
				$this->form_validation->set_rules('product',' Product','trim|required');
				$this->form_validation->set_rules('quantity',' Quantity','trim|required|numeric');
				$this->form_validation->set_rules('unit_price',' Unit Price','trim|required|numeric');
				if($this->form_validation->run()==FALSE)
				{
					$employee_id = $this->input->get_post('employee_id');
					$this->product_order($employee_id);
				}
				else
				{
					
					$data['invoice_no'] = $this->input->get_post('invoice_no');
					$data['product'] = $this->input->get_post('product');
					$data['quantity'] = $this->input->get_post('quantity');
					$data['quantity_type'] = $this->input->get_post('quantity_type');
					$data['unit_price'] = $this->input->get_post('unit_price');
					$data['employee_id'] = $this->input->get_post('employee_id');
					date_default_timezone_set("Asia/Dhaka"); 
					$date =  date('Y-m-d');
	                $data['date'] =  date('Y-m-d');
	                //$data['time'] = date("h:i:sa");
	                $data['place'] = 'Office'; 
	                $data['entry_month'] = date('m');
	                $data['entry_year'] = date('Y');
	                //echo 'employee id:'.$data['employee_id'];
	                //$this->office_model-> office_new_order_data($data);
	                $result= $this->office_model->quantity_check($data);
					$data['store_quantity'] = $result['quantity'];
					$data['product_category'] = $result['product_category'];
					if($data['quantity']>$data['store_quantity'])
					{
                    echo "<script language='javascript' type='text/javascript'>";
				    echo "alert('Not Available');";
				    echo "</script>";
				    $employee_id = $this->input->get_post('employee_id');
					$this->product_order($employee_id);
					}
					else
					{
                     $this->office_model-> office_new_order_data($data);
					}
        
				}
			}
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function product_debit($id)
	{
		if($this->session->userdata('logged_in'))
		{
			$data['employee_id'] = $id;
			$result = $this->office_model->client_details($id);
			$data1 = $data+$result;
			$this->load->view('Admin/office/office_order_debit_form',$data1);
			//echo $id;
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function office_order_debit_data()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "not done yet";
			if($this->input->get_post('submit'))
			{
				$this->form_validation->set_rules('invoice_no',' Invoice Number','trim|required');
				$this->form_validation->set_rules('debit_amount',' Debit Amount','trim|required|numeric');
				if($this->form_validation->run()==FALSE)
				{
					$employee_id = $this->input->get_post('employee_id');
					$this->product_order($employee_id);
				}
				else
				{
					
					$data['invoice_no'] = $this->input->get_post('invoice_no');
					$data['product'] = $this->input->get_post('product');
					$data['debit_amount'] = $this->input->get_post('debit_amount');
					$data['client_id'] = $this->input->get_post('employee_id');
					
					date_default_timezone_set("Asia/Dhaka"); 
					$date =  date('Y-m-d');
	                $data['date'] =  date('Y-m-d');
	                //$data['time'] = date("h:i:sa");
	                $data['place'] = 'Office'; 
	                $data['entry_month'] = date('m');
	                $data['entry_year'] = date('Y');
	                //echo 'employee id:'.$data['employee_id'];
	                $this->office_model-> office_order_debit_data($data);
	              
        
				}
			}
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function product_report($client_id)
	{
		if($this->session->userdata('logged_in'))
		{
			//echo $emp_id;
			$debit_sum = $this->office_model->debit_sum_office($client_id);
			$credit_sum = $this->office_model->credit_sum_office($client_id);
			$result1['list'] = $this->office_model->product_report($client_id);
			$client_name = $this->office_model->client_details($client_id);
			$result = $debit_sum+$credit_sum +$result1+$client_name;
			$this->load->view('Admin/office/order_report',$result);
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function order_report_delete($id,$client_id)
	{
       if($this->session->userdata('logged_in'))
		{

			
			$this->office_model->order_report_delete($id,$client_id);
		}
		else
		{
			$this->index();
		}
	}

	public function order_report_edit($id,$cid)
	{
       if($this->session->userdata('logged_in'))
		{

			//echo $id;
			
			$result = $this->office_model->office_order($id);
			$result1 = $this->office_model->client_details($cid);
			$result2 = $result+$result1;
			$this->parser->parse('Admin/office/order_edit_form',$result2);
		}
		else
		{
			$this->index();
		}
	}

	public function order_edit_data()
	{
		if($this->session->userdata('logged_in'))
		{
			//echo "not done yet";
			if($this->input->get_post('submit'))
			{
				
				$this->form_validation->set_rules('product',' Product','trim|required');
				$this->form_validation->set_rules('quantity',' Quantity','trim|required|numeric');
				$this->form_validation->set_rules('unit_price',' Unit Price','trim|required|numeric');
				if($this->form_validation->run()==FALSE)
				{
					$id = $this->input->get_post('id');
					$this->order_report_edit($id);
				}
				else
				{
					
					//$data['invoice_no'] = $this->input->get_post('invoice_no');
					$data['product'] = $this->input->get_post('product');
					$data['quantity'] = $this->input->get_post('quantity');
					$data['quantity_type'] = $this->input->get_post('quantity_type');
					$data['unit_price'] = $this->input->get_post('unit_price');
					$data['debit_amount'] = $this->input->get_post('debit_amount');
					$data['id'] = $this->input->get_post('id');
					$data['client_id'] = $this->input->get_post('client_id');
					date_default_timezone_set("Asia/Dhaka"); 
					$date =  date('Y-m-d');
	                $data['date'] =  date('Y-m-d');
	                //$data['time'] = date("h:i:sa");
	                $data['place'] = 'Office'; 
	                $data['entry_month'] = date('m');
	                $data['entry_year'] = date('Y');
	                //echo 'employee id:'.$data['employee_id'];
	                $this->office_model-> order_data_update($data);
        
				}
			}
		}
		else
		{
			redirect('home/index','refresh');
		}
	}

	public function order_report_details($id,$cid)
	{
       if($this->session->userdata('logged_in'))
		{

			//echo $id;
			
			$result = $this->office_model->office_order($id);
			$result1 = $this->office_model->client_details($cid);
			$result2 = $result+$result1;
			$this->parser->parse('Admin/office/order_details_individual',$result2);
		}
		else
		{
			$this->index();
		}
	}




}
