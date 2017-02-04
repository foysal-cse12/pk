<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function login($data)
	{
		$login_data = array('username'=>$data['username'],'password'=>$data['password']);
		$this->db->select('*');
		$this->db->where($login_data);
		$result = $this->db->get('users');
		if($result->num_rows==1)
		{
			return $result->row_array();
		}
		else
		{
			return false;
		}
	}

	public function user_info($data)
	{
		$rule = array('username'=>$data['username']);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('users');
		return $result->row_array();
	}

	public function add_conveyance_data($data)
	{
		$month = $data['month'];
		$year = $data['year'];
		$date = $data['date'];
		$purpose = $data['p_name'];
		$credit_amount = $data['credit_amount'];
		$debit_amount = $data['debit_amount'];
		$employee_id = $data['employee_id'];

		$data = array('entry_date'=>$date,'entry_year'=>$year,'entry_month'=>$month,'purpose'=>$purpose,'credit_amount'=>$credit_amount,'debit_amount'=>$debit_amount,'employee_id'=>$employee_id);
		$this->db->insert('conveyance',$data);
		//redirect('home/index','refresh');
		redirect('home/employee_conveyance_report/'.$employee_id,'refresh');
	}

	public function employee_conveyance_report_pagination($id)
	{
		$this->db->select('*');		
		$this->db->where('employee_id',$id);
		$result = $this->db->get('conveyance');
		return $result->num_rows();
	}

	public function employee_conveyance_report($id,$limit,$start)
	{
		$this->db->select('*');
		$this->db->where('employee_id',$id);
		$this->db->limit($limit, $start);
		//$this->db->order_by('id','asc');
		$result = $this->db->get('conveyance');
		return $result->result_array();

	}

	public function debit_sum($id)
	{
        
		$sql="SELECT  SUM(debit_amount) as debit_sum from conveyance where employee_id = '$id' ";
        $result=$this->db->query($sql);
        return $result->row_array();
	}

	public function credit_sum($id)
	{
		$sql="SELECT  SUM(credit_amount) as credit_sum from conveyance where employee_id = '$id'";
        $result=$this->db->query($sql);
        return $result->row_array();
	}

	public function employee_details($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$result = $this->db->get('employee');
		return $result->row_array();
	}

	public function conveyance_report_monthly($data)
	{
		$rule = array('entry_month'=>$data['month'],'entry_year'=>$data['year']);
		$this->db->select('*');
		$this->db->where($rule);
		$this->db->order_by('id','desc');
		$result = $this->db->get('conveyance');
		return $result->result_array();
	}

	public function debit_sum_monthly($data)
	{
		$month = $data['month'];
		$year = $data['year'];
		$sql="SELECT  SUM(debit_amount) as debit_sum from conveyance where entry_year = '$year' AND entry_month = '$month' ";
        $result=$this->db->query($sql);
        return $result->row_array();
	}

	public function credit_sum_monthly($data)
	{
		$month = $data['month'];
		$year = $data['year'];
		$sql="SELECT  SUM(credit_amount) as credit_sum from conveyance where entry_year = '$year' AND entry_month = '$month' ";
        $result=$this->db->query($sql);
        return $result->row_array();
	}

	public function insert_lc_data($data)
	{
		$opening_bank = $data['opening_bank'];
		$advising_bank = $data['advising_bank'];
		$lc_type = $data['lc_type'];
		$lc_number = $data['lc_number'];
		$issue_month = $data['issue_month'];
		$issue_year = $data['issue_year'];
		$issue_date = $data['issue_date'];
		$due_month = $data['due_month'];
		$due_year = $data['due_year'];
		$due_date = $data['due_date'];
		$applicant_name = $data['applicant_name'];
		$amount = $data['amount'];

		$data = array('opening_bank'=>$opening_bank,'advising_bank'=>$advising_bank,'lc_type'=>$lc_type,'lc_number'=>$lc_number,'issue_month'=>$issue_month,'issue_year'=>$issue_year,'issue_date'=>$issue_date,'due_month'=>$due_month,'due_year'=>$due_year,'due_date'=>$due_date,'applicant_name'=>$applicant_name,'amount'=>$amount);
		$this->db->insert('lc',$data);
		redirect('home/lc_list','refresh');
		
	}

	public function lc_list_pagination()
	{
		$this->db->select('*');		
		$result = $this->db->get('lc');
		return $result->num_rows();
	}

	public function lc_list($limit, $start)
	{
		$this->db->select('*');
		$this->db->limit($limit, $start);
		$this->db->order_by('id','desc');
		$result = $this->db->get('lc');
		return $result->result_array();
	}

	public function specific_lc_details($id)
	{

		//echo $id;
		$this->db->select('*');
		$this->db->where('id',$id);
		$result = $this->db->get('lc');
		return $result->row_array();
	}

	public function check_password($data)
	{
		$rule = array('username'=>$data['username'],'password'=>$data['password']);
		$this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('users');
		if($result->num_rows==1)
		{
          return true;
		}
		else
		{
			return false;

		}

	}

	public function change_password($data)
	{
		$current_password = $data['password'];
		$old_password = $data['o_password'];
		$new_password = $data['n_password'];
		$confirm_password = $data['c_password'];
		$username = $data['username'];
		$rule = array('username'=>$data['username'],'password'=>$data['password']);
		$pass_update = array('password'=>$new_password );
		if($current_password === $old_password)
		{
			//echo "continue";
			$this->db->select('*');
		    $this->db->where($rule);
		    $result = $this->db->get('users');
			if($result->num_rows==1)
			{
              //echo "continue";
			$this->db->where($rule);
		    $this->db->update('users',$pass_update);
		    redirect('home/logout','refresh');
			}
			else
			{
				//echo "old password not match";
				return false;

			}
		}
		else
		{
           //echo "old password not match";
			return false;
		}
		
	}

	public function conveyance_list_delete($id,$employee_id)
	{
		$rule = array('id'=>$id);
		$this->db->where($rule);
		$this->db->delete('conveyance'); 
		redirect('home/employee_conveyance_report/'.$employee_id,'refresh');
	}

	public function conveyance_list_edit($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$result = $this->db->get('conveyance');
		return $result->row_array();
	}

	public function conveyance_data_update($data)
	{
	
		$purpose = $data['purpose'];
		$debit_amount = $data['debit_amount'];
		$credit_amount = $data['credit_amount'];
		$id = $data['id'];
		$employee_id = $data['employee_id'];

		$data = array('purpose'=>$purpose,'debit_amount'=>$debit_amount,'credit_amount'=>$credit_amount);
		$this->db->where('id',$id);
        $this->db->update('conveyance',$data);
	    redirect('home/employee_conveyance_report/'.$employee_id,'refresh');
	}

	public function lc_list_delete($id)
	{
		$rule = array('id'=>$id);
		$this->db->where($rule);
		$this->db->delete('lc'); 
		redirect('home/lc_list','refresh');
	}

	public function lc_list_data($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$result = $this->db->get('lc');
		return $result->row_array();
	}

	public function lc_data_update($data)
	{
		$opening_bank = $data['opening_bank'];
		$advising_bank = $data['advising_bank'];
		$lc_type = $data['lc_type'];
		$lc_number = $data['lc_number'];
		$applicant_name = $data['applicant_name'];
		$due_date = $data['due_date'];
		$issue_date = $data['issue_date'];
		$amount = $data['amount'];
		$id = $data['id'];

		$data = array('opening_bank'=>$opening_bank,'advising_bank'=>$advising_bank,'lc_type'=>$lc_type,'lc_number'=>$lc_number,'applicant_name'=>$applicant_name,'due_date'=>$due_date,'issue_date'=>$issue_date,'amount'=>$amount);

		$this->db->where('id',$id);
        $this->db->update('lc',$data);
		
		redirect('home/lc_list','refresh');
	}

	public function create_employee($data)
	{
		$name = $data['employee_name'];
		$mobile = $data['mobile'];
		$email = $data['email'];

		$insert = array('name'=>$name,'mobile'=>$mobile,'email'=>$email);

		$this->db->insert('employee',$insert);
		redirect('home/employee_list','refresh');
	}

	public function employee_list_pagination()
	{
		$this->db->select('*');		
		$result = $this->db->get('employee');
		return $result->num_rows();
	}

	public function employee_list($limit, $start)
	{
		$this->db->select('*');
		$this->db->limit($limit, $start);
		$this->db->order_by('name','asc');
		$result = $this->db->get('employee');
		return $result->result_array();
	}

	public function speciific_employee($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$result = $this->db->get('employee');
		return $result->row_array();

	}

	public function employee_update_data($data)
	{
		$name = $data['employee_name'];
		$mobile = $data['mobile'];
		$email = $data['email'];
		$id = $data['id'];

		$update = array('name'=>$name,'mobile'=>$mobile,'email'=>$email);
        $this->db->where('id',$id);
		$this->db->update('employee',$update);
		redirect('home/employee_list','refresh');
	}

	public function employee_delete($id)
	{
		$rule = array('id'=>$id);
		$this->db->where($rule);
		$this->db->delete('employee'); 
		redirect('home/employee_list','refresh');
	}


	public function create_client($data)
	{
		$name = $data['c_name'];
		$mobile = $data['mobile'];
		$email = $data['email'];

		$insert = array('name'=>$name,'mobile'=>$mobile,'email'=>$email);

		$this->db->insert('client',$insert);
		redirect('home/client_list','refresh');
	}

	public function client_list_pagination()
	{
		$this->db->select('*');		
		$result = $this->db->get('client');
		return $result->num_rows();
	}

	public function client_list($limit, $start)
	{
		$this->db->select('*');
		$this->db->limit($limit, $start);
		$this->db->order_by('name','asc');
		$result = $this->db->get('client');
		return $result->result_array();
	}

	public function speciific_client($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$result = $this->db->get('client');
		return $result->row_array();

	}

	public function client_update_data($data)
	{
		$name = $data['c_name'];
		$mobile = $data['mobile'];
		$email = $data['email'];
		$id = $data['id'];

		$update = array('name'=>$name,'mobile'=>$mobile,'email'=>$email);
        $this->db->where('id',$id);
		$this->db->update('client',$update);
		redirect('home/client_list','refresh');
	}

	public function client_delete($id)
	{
		$rule = array('id'=>$id);
		$this->db->where($rule);
		$this->db->delete('client'); 
		redirect('home/client_list','refresh');
	}

}
