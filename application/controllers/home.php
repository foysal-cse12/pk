<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function index()
	{
		//echo phpinfo();
		if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
		{
			$data['username'] =  $_COOKIE['username'];
			$data['password'] =  $_COOKIE['password'];
			$result = $this->home_model->login($data);
			if($result!=FALSE)
			{
				$this->session->set_userdata(array('username'=>$_COOKIE['username']));
				 if($result['type']=='user')
					{
						redirect('home/user','refresh');
					}
				 else if($result['type']=='admin')
					{
						redirect('home/admin','refresh');
					}
				 else
					{
						$error['msg']="Invalid Type ";
						//$error['k']=0;
					    $this->load->view('login',$error);
					}
			}


		}
		else if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['password'] = $session_data['password'];
			$result = $this->home_model->login($data);
			if($result!=FALSE)
			{
				 if($result['type']=='user')
					{
						redirect('home/user','refresh');
					}
				 else if($result['type']=='admin')
					{
						redirect('home/admin','refresh');
					}
					else
					{
						$error['msg']="Invalid Type ";
						//$error['k']=0;

					    $this->load->view('login',$error);
					}
			}

		}
		else
		{
			$this->load->view('login');
		}

	}

	public function login_data()
	{
		if($this->input->get_post('submit'))
		{
			$this->form_validation->set_rules('username','Username','trim|required|min_length[5]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[5]');
			if($this->form_validation->run()==FALSE)
			{
				$this->index();
			}
			else
			{
				$data['username'] = $this->input->get_post('username');
				$data['password'] = md5($this->input->get_post('password'));
				$data['remember'] = $this->input->get_post('remember');

				$result = $this->home_model->login($data);

				if($result!=FALSE)
				{
					$session_user =  array('username' =>$this->input->get_post('username'),
				                       'password'=>md5($this->input->get_post('password'))
				                       );
					$this->session->set_userdata('logged_in',$session_user);
					if($data['remember']!=NULL)
					{
						setcookie('username',$data['username'], time() + (86400*30),"/");
						setcookie('password',$data['password'], time() + (86400*30),"/");
					}
					if($result['type']=='user')
					{
						redirect('home/user','refresh');
					}
					else if ($result['type']=='admin' )
					{
                        redirect('home/admin','refresh');
					}


					else
					{
						$error['msg']="Invalid Type ";
						//$error['k']=0;
					    $this->load->view('login',$error);
					}
				}
				else
				{
					$error['msg']="Wrong Username or Password";
					//$error['k']=0;
					$this->load->view('login',$error);
				}

			}
		}
	}


	public function admin()
	{
		//echo "hello admin";
		if($this->session->userdata('logged_in'))
		{
			
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Admin/index',$data);
		}
		else
		{
			$this->index();
		}
	}
	

	public function user()
	{
		//echo "hello user";
		if($this->session->userdata('logged_in'))
		{
			echo "hello user";
		}
		else
		{
			$this->index();
		}
	}

	

	public function important_file()
	{
		if($this->session->userdata('logged_in'))
		{
			echo "hello  important file";
		}
		else
		{
			$this->index();
		}
	}


	public function conveyance_list()
	{
		if($this->session->userdata('logged_in'))
		{
			date_default_timezone_set("Asia/Dhaka"); 
	        $date =  date('Y-m-d');
	        $data['year'] = date('Y');
			$this->load->view('Admin/conveyance_list',$data);
		}
		else
		{
			$this->index();
		}
	}


//...............................new..............................	

	public function create_employee()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('Admin/create_employee');
		}
		else
		{
			$this->index();
		}
	}

	public function create_employee_data()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->input->get_post('submit'))
	       {
	       	$this->form_validation->set_rules('employee_name',' Employee Name','trim|required|');
	       	
	       	if($this->form_validation->run()==FALSE)
	       	{
	       		$this->create_employee();
	       	}
	       	else
	       	{
	           $data['employee_name'] = $this->input->get_post('employee_name');
	           $data['mobile'] = $this->input->get_post('mobile');
	           $data['email'] = $this->input->get_post('email');
	           

	           $this->home_model->create_employee($data);
          
	      	}

	       }
		}
		else
		{
			$this->index();
		}
	}

	public function employee_list()
	{
		if($this->session->userdata('logged_in'))
		{
			$config['base_url'] = "/pk/home/employee_list";
			 $config['per_page'] = 12;
			 $config['num_links'] = 5;
		     $config["uri_segment"] = 3;
			 $config['total_rows'] = $this->home_model->employee_list_pagination();
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

			$result['list'] = $this->home_model->employee_list($config['per_page'],$page);
			$result['links'] = $this->pagination->create_links();
			$this->parser->parse('Admin/employee_list',$result);
		}
		else
		{
			$this->index();
		}
	}

	public function employee_edit($id)
	{
		if($this->session->userdata('logged_in'))
		{
			//echo $id;
			$result = $this->home_model->speciific_employee($id);
			$this->parser->parse('Admin/employee_edit',$result);
		}
		else
		{
			$this->index();
		}
	}

	public function employee_update_data()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->input->get_post('submit'))
	       {
	       	$this->form_validation->set_rules('employee_name',' Employee Name','trim|required|');
	       	
	       	if($this->form_validation->run()==FALSE)
	       	{
	       		$this->create_employee();
	       	}
	       	else
	       	{
	           $data['employee_name'] = $this->input->get_post('employee_name');
	           $data['mobile'] = $this->input->get_post('mobile');
	           $data['email'] = $this->input->get_post('email');
	            $data['id'] = $this->input->get_post('id');
	           

	           $this->home_model->employee_update_data($data);
          
	      	}

	       }
		}
		else
		{
			$this->index();
		}
	}

	public function employee_delete($id)
	{
       if($this->session->userdata('logged_in'))
		{
			$this->home_model->employee_delete($id);
		}
		else
		{
			$this->index();
		}
	}







	public function create_client()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('Admin/create_client');
		}
		else
		{
			$this->index();
		}
	}

	public function create_client_data()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->input->get_post('submit'))
	       {
	       	$this->form_validation->set_rules('c_name',' Client/Company Name','trim|required|');
	       	
	       	if($this->form_validation->run()==FALSE)
	       	{
	       		$this->create_client();
	       	}
	       	else
	       	{
	           $data['c_name'] = $this->input->get_post('c_name');
	           $data['mobile'] = $this->input->get_post('mobile');
	           $data['email'] = $this->input->get_post('email');
	           

	           $this->home_model->create_client($data);
          
	      	}

	       }
		}
		else
		{
			$this->index();
		}
	}

	public function client_list()
	{
		if($this->session->userdata('logged_in'))
		{
			$config['base_url'] = "/pk/home/client_list";
			 $config['per_page'] = 12;
			 $config['num_links'] = 5;
		     $config["uri_segment"] = 3;
			 $config['total_rows'] = $this->home_model->client_list_pagination();
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

			$result['list'] = $this->home_model->client_list($config['per_page'],$page);
			$result['links'] = $this->pagination->create_links();
			$this->parser->parse('Admin/client_list',$result);
		}
		else
		{
			$this->index();
		}
	}

	public function client_edit($id)
	{
		if($this->session->userdata('logged_in'))
		{
			//echo $id;
			$result = $this->home_model->speciific_client($id);
			$this->parser->parse('Admin/client_edit',$result);
		}
		else
		{
			$this->index();
		}
	}

	public function client_update_data()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->input->get_post('submit'))
	       {
	       	$this->form_validation->set_rules('c_name',' Client/Company Name','trim|required|');
	       	
	       	if($this->form_validation->run()==FALSE)
	       	{
	       		$this->create_employee();
	       	}
	       	else
	       	{
	           $data['c_name'] = $this->input->get_post('c_name');
	           $data['mobile'] = $this->input->get_post('mobile');
	           $data['email'] = $this->input->get_post('email');
	            $data['id'] = $this->input->get_post('id');
	           

	           $this->home_model->client_update_data($data);
          
	      	}

	       }
		}
		else
		{
			$this->index();
		}
	}

	public function client_delete($id)
	{
       if($this->session->userdata('logged_in'))
		{
			$this->home_model->client_delete($id);
		}
		else
		{
			$this->index();
		}
	}

	public function lc()
	{
		if($this->session->userdata('logged_in'))
		{
			date_default_timezone_set("Asia/Dhaka"); 
	        $date =  date('Y-m-d');
	        $data['year'] = date('Y');
			$this->load->view('Admin/lc_form',$data);
		}
		else
		{
			$this->index();
		}
	}

	public function lc_form_data()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->input->get_post('submit'))
			{
				$this->form_validation->set_rules('applicant_name','Applicant Name','trim|required');
				$this->form_validation->set_rules('opening_bank','Opening Bank Name','trim|required');
				$this->form_validation->set_rules('advising_bank','Advising Bank Name','trim|required');
				$this->form_validation->set_rules('lc_number','LC Number','trim|required');

				$this->form_validation->set_rules('lc_type','LC Type','trim|required');
				
				

				if($this->form_validation->run()==FALSE)
				{
					$this->lc();
				}
				else
				{
					$data['applicant_name'] = $this->input->get_post('applicant_name');
					$data['opening_bank'] = $this->input->get_post('opening_bank');
					$data['advising_bank'] = $this->input->get_post('advising_bank');
					$data['lc_type'] = $this->input->get_post('lc_type');
					$data['lc_number'] = $this->input->get_post('lc_number');
					$data['issue_day'] = $this->input->get_post('day');
					$data['issue_month'] = $this->input->get_post('month');
					$data['issue_year'] = $this->input->get_post('year');
					$data['issue_date'] = $data['issue_year'].'-'.$data['issue_month'].'-'.$data['issue_day'];
					$data['due_day'] = $this->input->get_post('due_day');
					$data['due_month'] = $this->input->get_post('due_month');
					$data['due_year'] = $this->input->get_post('due_year');
					$data['due_date'] = $data['due_year'].'-'.$data['due_month'].'-'.$data['due_day'];
					
					$data['amount'] = $this->input->get_post('amount');

					$k = (checkdate($data['issue_month'],$data['issue_day'],$data['issue_year']));
					$l = (checkdate($data['due_month'],$data['due_day'],$data['due_year']));

					if($k==FALSE)
						{
		                   echo "<script language='javascript' type='text/javascript'>";
						   echo "alert('Invalid Issue Date');";
						   echo "</script>";
						   $this->lc();
						}
						else
						{
							if($l==FALSE)
							{
                              echo "<script language='javascript' type='text/javascript'>";
						      echo "alert('Invalid Due Date');";
						      echo "</script>";
						      $this->lc();
							}
							else
							{
                               $this->home_model->insert_lc_data($data);
							}
							
                            
						}

					//$this->home_model->insert_lc_data($data);

				}
				
			}
		}
		else
		{
			$this->index();
		}
	}

	public function lc_list()
	{
		if($this->session->userdata('logged_in'))
		{
			 $config['base_url'] = "/pk/home/lc_list";
			 $config['per_page'] = 12;
			 $config['num_links'] = 5;
		     $config["uri_segment"] = 3;
			 $config['total_rows'] = $this->home_model->lc_list_pagination();
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

			$result['list'] = $this->home_model->lc_list($config['per_page'],$page);
			$result['links'] = $this->pagination->create_links();
			$this->parser->parse('Admin/lc_list',$result);
			//$result['list'] = $this->home_model->lc_list();
			//$this->parser->parse('Admin/lc_list',$result);
		}
		else
		{
			$this->index();
		}
	}

	public function specific_lc_details($id)
	{
		if($this->session->userdata('logged_in'))
		{
			$result = $this->home_model->specific_lc_details($id);
			$this->parser->parse('Admin/lc_details',$result);
		}
		else
		{
			$this->index();
		}
	}

	public function lc_list_delete($id)
	{
       if($this->session->userdata('logged_in'))
		{
			//echo $id."delete";
			$this->home_model->lc_list_delete($id);
		}
		else
		{
			$this->index();
		}
	}

	public function lc_list_edit($id)
	{
       if($this->session->userdata('logged_in'))
		{
			//echo $id."edit";
			$result = $this->home_model->lc_list_data($id);
			$this->parser->parse('Admin/lc_data_edit',$result);
		}
		else
		{
			$this->index();
		}
	}

	public function lc_data_update()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->input->get_post('submit'))
			{
				$this->form_validation->set_rules('opening_bank','Opening Bank Name','trim|required');
				$this->form_validation->set_rules('advising_bank','Advising Bank Name','trim|required');
				$this->form_validation->set_rules('lc_number','LC Number','trim|required');
				$this->form_validation->set_rules('applicant_name','Applicant Name','trim|required');
				$this->form_validation->set_rules('issue_date','Issue Date','trim|required');
				$this->form_validation->set_rules('due_date','Due Date','trim|required');

				if($this->form_validation->run()==FALSE)
				{
					echo "<script language='javascript' type='text/javascript'>";
				    echo "alert('Please Enter Correct Value');";
				    echo "</script>";
					$id = $this->input->get_post('id');
					$this->lc_list_edit($id);
				}
				else
				{
					$data['opening_bank'] = $this->input->get_post('opening_bank');
					$data['advising_bank'] = $this->input->get_post('advising_bank');
					$data['lc_type'] = $this->input->get_post('lc_type');
					$data['lc_number'] = $this->input->get_post('lc_number');
					$data['applicant_name'] = $this->input->get_post('applicant_name');
					$data['due_date'] = $this->input->get_post('due_date');
					$data['issue_date'] = $this->input->get_post('issue_date');
					
					$data['amount'] = $this->input->get_post('amount');
					$data['id'] = $this->input->get_post('id');

					$this->home_model->lc_data_update($data);


				}
				
			}
		}
		else
		{
			$this->index();
		}
	}

	public function new_conveyance()
	{
		if($this->session->userdata('logged_in'))
		{
			/*date_default_timezone_set("Asia/Dhaka"); 
	        $date =  date('Y-m-d');
	        $data['year'] = date('Y');*/
	        $config['base_url'] = "/pk/home/new_conveyance";
			 $config['per_page'] = 15;
			 $config['num_links'] = 5;
		     $config["uri_segment"] = 3;
			 $config['total_rows'] = $this->home_model->employee_list_pagination();
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

			$result['list'] = $this->home_model->employee_list($config['per_page'],$page);
			$result['links'] = $this->pagination->create_links();
			$this->parser->parse('Admin/employee_conveyance',$result);

			//$this->load->view('Admin/conveyance_form',$data);
		}
		else
		{
			$this->index();
		}
	}

	

	public function employee_conveyance_create($id)
	{
		if($this->session->userdata('logged_in'))
		{
			//echo $id."edit";
			$data1['id'] = $id;
			$result = $this->home_model->employee_details($id);
            $data = $data1+$result;
			$this->load->view('Admin/conveyance_form',$data);
			
		}
		else
		{
			$this->index();
		}
	}

	public function conveyance_data()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->input->get_post('submit'))
			{
				date_default_timezone_set("Asia/Dhaka"); 
	            $data['date'] =  date('Y-m-d');
	            $data['year'] = date('Y');
	            $data['month'] = date('m');
				$data['p_name'] = $this->input->get_post('p_name');
				$data['debit_amount'] = $this->input->get_post('debit_amount');
				$data['credit_amount'] = $this->input->get_post('credit_amount');
				$data['employee_id'] = $this->input->get_post('employee_id');

					//echo 'employee id'.$data['employee_id'];
                $this->home_model->add_conveyance_data($data);
				
			}
		}
		else
		{
			$this->index();
		}
	}

	public function employee_conveyance_report($id)
	{
		if($this->session->userdata('logged_in'))
		{
			$config['base_url'] = "/pk/home/employee_conveyance_report/$id";
			 $config['per_page'] = 100;
			 $config['num_links'] = 5;
		     $config["uri_segment"] = 4;
			 $config['total_rows'] = $this->home_model->employee_conveyance_report_pagination($id);
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
	         $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
       
            $this->pagination->initialize($config);

            $debit_sum = $this->home_model->debit_sum($id);
			$credit_sum = $this->home_model->credit_sum($id);

			$employee_name = $this->home_model->employee_details($id);

			$result1['list'] = $this->home_model->employee_conveyance_report($id,$config['per_page'],$page);
			$result1['links'] = $this->pagination->create_links();

			$result = $debit_sum+$credit_sum +$result1+$employee_name;
			//$this->parser->parse('Admin/conveyance_report',$result);
			$this->load->view('Admin/conveyance_report',$result);
			
		}
		else
		{
			$this->index();
		}
	}

	public function conveyance_report_monthly()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->input->get_post('submit'))
			{
				$this->form_validation->set_rules('month','Month','trim|required|numeric');
				if($this->form_validation->run()==FALSE)
				{
					$this->conveyance_list();
				}
				else
				{
					$data['month'] = $this->input->get_post('month');
					$data['year'] = $this->input->get_post('year');

					$debit_sum = $this->home_model->debit_sum_monthly($data);
			        $credit_sum = $this->home_model->credit_sum_monthly($data);

					$data['list'] = $this->home_model->conveyance_report_monthly($data);

					$result = $debit_sum+$credit_sum +$data;
					$this->parser->parse('Admin/conveyance_report',$result);
				}
			}
		}
		else
		{
			$this->index();
		}
	}

	public function conveyance_report_edit($id,$eid)
	{
       if($this->session->userdata('logged_in'))
		{

			//echo $id;
			
			$result1 = $this->home_model->conveyance_list_edit($id);
			$result2 = $this->home_model->employee_details($eid);
            $result = $result1+$result2;
			$this->parser->parse('Admin/conveyance_report_edit',$result);
		}
		else
		{
			$this->index();
		}
	}

	public function conveyance_data_update()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->input->get_post('submit'))
			{
				$data['purpose'] = $this->input->get_post('p_name');
				$data['debit_amount'] = $this->input->get_post('debit_amount');
				$data['credit_amount'] = $this->input->get_post('credit_amount');
				$data['id'] = $this->input->get_post('id');
				$data['employee_id'] = $this->input->get_post('employee_id');

				//echo $data['id'].$data['employee_id'];
				$this->home_model->conveyance_data_update($data);
			}
				
		}
		else
		{
			$this->index();
		}
	}

	public function conveyance_report_delete($id,$employee_id)
	{
       if($this->session->userdata('logged_in'))
		{

			
			$this->home_model->conveyance_list_delete($id,$employee_id);
		}
		else
		{
			$this->index();
		}
	}






	public function change_password()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('change_password');
		}
		else
		{
			$this->index();
		}
	}
	public function check_password($str)
	{
		$data['password'] = md5($str);
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];

		$result = $this->home_model->check_password($data);
		if($result==TRUE)
		{
			echo "password match";

		}
		else
		{
            echo "password not match";

		}
	}

	public function change_password_data()
	{
		 if($this->input->get_post('submit'))
	       {
	       	$this->form_validation->set_rules('old_password',' Old Password','trim|required|min_length[5]');
	       	$this->form_validation->set_rules('new_password',' New Password','trim|required|min_length[5]');
	       	$this->form_validation->set_rules('confirm_password',' Confirm Password','trim|required|min_length[5]|matches[new_password]');
	       	if($this->form_validation->run()==FALSE)
	       	{
	       		$this->change_password();
	       	}
	       	else
	       	{
	           $data['o_password'] = md5($this->input->get_post('old_password'));
	           $data['n_password'] = md5($this->input->get_post('new_password'));
	           $data['c_password'] = md5($this->input->get_post('confirm_password'));

	           $session_data = $this->session->userdata('logged_in');
			   $data['username'] = $session_data['username'];
			   $data['password'] = $session_data['password'];

	           $result = $this->home_model->change_password($data);
	           if($result == FALSE)
	           {
	              $data['msg'] = "old password not match";
	           	  $this->load->view("change_password",$data);
	           	
	           }
	       	}

	       }
	}


	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		setcookie('username','', 0 ,"/");
		setcookie('password','', 0 ,"/");
		redirect('home/index', 'refresh');
       
	}

}
