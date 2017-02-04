<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Office_model extends CI_Model {

	public function  particulars_data($data)
	{
		$date = $data['date'];
		$time = $data['time'];
		$particulars = $data['particulars'];
		$debit_amount = $data['debit_amount'];
	
		$credit_amount = $data['credit_amount'];
		$month = $data['month'];
		$year = $data['year'];
		$place = 'Office';
		//$balance = $credit_amount+$debit_amount;

		$info = array('entry_date'=>$date,'entry_month'=>$month,'entry_year'=>$year,'time'=>$time,'particulars'=>$particulars,'debit_amount'=>$debit_amount,'credit_amount'=>$credit_amount,'place'=>$place);

		$this->db->insert('balance_sheet',$info);
		redirect('office/particular_list','refresh');

	}

	public function debit_sum()
	{
		$place = 'Office';
        
		$sql="SELECT  SUM(debit_amount) as debit_sum from balance_sheet where place = '$place' ";
        $result=$this->db->query($sql);
        return $result->row_array();
	}

	public function credit_sum()
	{
		$place = 'Office';
		$sql="SELECT  SUM(credit_amount) as credit_sum from balance_sheet  where place = '$place'";
        $result=$this->db->query($sql);
        return $result->row_array();
	}

	public function particular_list_pagination()
	{
		$place = 'Office';
		$this->db->select('*');	
		$this->db->where('place',$place);	
		$result = $this->db->get('balance_sheet');
		return $result->num_rows();
	}



	public function balance_list($limit,$start)
	{
		$place = 'Office';
		$this->db->select('*');
		$this->db->where('place',$place);
		$this->db->order_by('entry_date','desc');
		$this->db->limit($limit, $start);
		$result = $this->db->get('balance_sheet');
		return $result->result_array();
	}

	public function particular_edit($id)
	{
        $rule = array('id'=>$id);
        $this->db->select('*');
		$this->db->where($rule);
		$result = $this->db->get('balance_sheet'); 
		return $result->row_array();
	}

	public function  particulars_update($data)
	{
		$particulars = $data['particulars'];
		$debit_amount = $data['debit_amount'];
		$credit_amount = $data['credit_amount'];
		$id=  $data['id'];
		$update = array('particulars'=>$particulars,'debit_amount'=>$debit_amount,'credit_amount'=>$credit_amount);
		$this->db->where('id',$id);//new
		$this->db->update('balance_sheet',$update);//new
		redirect('office/particular_list','refresh');
	}

	public function particular_delete($id)
	{
        $rule = array('id'=>$id);
		$this->db->where($rule);
		$this->db->delete('balance_sheet'); 
		redirect('office/particular_list','refresh');
	}




	public function report_monthly_pagination($data)
	{
		
		$month = $data['month'];
		$year = $data['year'];
		$place = 'Office';

		$rule = array('entry_month'=>$month,'entry_year'=>$year,'place'=>$place);
		$this->db->select('*');		
		$this->db->where($rule);
		$result = $this->db->get('balance_sheet');
		return $result->num_rows();
	}

	public function view_report_monthly($data,$limit,$start)
	{
		
		$month = $data['month'];
		$year = $data['year'];
		$place = 'Office';

		$rule1 = array('entry_month'=>$month,'entry_year'=>$year,'place'=>$place);
		$this->db->select('*');
		$this->db->where($rule1);
		$this->db->order_by('entry_date','desc');
		$this->db->limit($limit, $start);
		$report = $this->db->get('balance_sheet');
        return $report->result_array();
	}

	public function debit_sum_monthly($data)
	{
        
		$month = $data['month'];
		$year = $data['year'];
		$place = 'Office';
		$sql="SELECT  SUM(debit_amount) as debit_sum from balance_sheet where  entry_month='$month' AND entry_year='$year' AND place='$place'  ";
        $result=$this->db->query($sql);
        return $result->row_array();
        //ORDER BY id DESC LIMIT $start, $limit
	}

	public function credit_sum_monthly($data)
	{
		$month = $data['month'];
		$year = $data['year'];
		$place = 'Office';
		$sql="SELECT  SUM(credit_amount) as credit_sum from balance_sheet where entry_month='$month' AND entry_year='$year' AND place='$place' ";
        $result=$this->db->query($sql);
        return $result->row_array();
	}

	//.................................order system...........................

	public function client_details($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$result = $this->db->get('client');
		return $result->row_array();
	}

	public function office_client_pagination()
	{
		$this->db->select('*');	
		$result = $this->db->get('client');
		return $result->num_rows();
	}

	public function office_client($limit,$start)
	{
		
		$this->db->select('*');
		$this->db->order_by('id','desc');
		$this->db->limit($limit, $start);
		$result = $this->db->get('client');
		return $result->result_array();
	}

	public function office_new_order_data($data)
	{
		$date = $data['date'];
		//$time = $data['time'];
		$month = $data['entry_month'];
		$year = $data['entry_year'];
		$product = $data['product'];
		$quantity = $data['quantity'];
		$quantity_type = $data['quantity_type'];
		$unit_price = $data['unit_price'];
		$credit_amount = $quantity*$unit_price;
		$place = $data['place'];
		$invoice_no = $data['invoice_no'];//new
		$client_id = $data['employee_id'];


		$store_quantity = $data['store_quantity'];//new
		$update_quantity =  $store_quantity-$quantity;//new
		$product_category = $data['product_category'];//new
		
		
		$info = array('entry_date'=>$date,'entry_month'=>$month,'entry_year'=>$year,'product'=>$product_category,'quantity'=>$quantity,'quantity_type'=>$quantity_type,'unit_price'=>$unit_price,'credit_amount'=>$credit_amount,'place'=>$place,'invoice_no'=>$invoice_no,'client_id'=>$client_id);//new

		$this->db->insert('order_list',$info);//new

		$update = array('quantity'=>$update_quantity);//new

		$this->db->where('id',$product);//new
		$this->db->update('inventory',$update);//new

		redirect('office/office_order','refresh');

		//redirect('home/index','refresh');    
		
	}

	public function office_order_debit_data($data)
	{
		$date = $data['date'];
		$month = $data['entry_month'];
		$year = $data['entry_year'];
		$place = $data['place'];

		$product = $data['product'];
		$debit_amount = $data['debit_amount'];
		$invoice_no = $data['invoice_no'];//new
		$client_id = $data['client_id'];
		
		
		$info = array('entry_date'=>$date,'entry_month'=>$month,'entry_year'=>$year,'product'=>$product,'debit_amount'=>$debit_amount,'place'=>$place,'invoice_no'=>$invoice_no,'client_id'=>$client_id);//new

		$this->db->insert('order_list',$info);//new
		redirect('home/index','refresh');  
	}

	public function product_report($client_id)
	{
		$place='Office';
		$this->db->select('*');
		$this->db->where('client_id',$client_id);
		$this->db->where('place',$place);
		$this->db->order_by('id','asc');
		$result = $this->db->get('order_list');
		return $result->result_array();
	}

	public function debit_sum_office($id)
	{
		$place='Office';
        
		$sql="SELECT  SUM(debit_amount) as debit_sum from order_list where client_id = '$id' AND place='$place'";
        $result=$this->db->query($sql);
        return $result->row_array();
	}

	public function credit_sum_office($id)
	{
		$place='Office';
		$sql="SELECT  SUM(credit_amount) as credit_sum from order_list where client_id = '$id' AND place='$place'";
        $result=$this->db->query($sql);
        return $result->row_array();
	}

	public function order_report_delete($id,$employee_id)
	{
		$rule = array('id'=>$id);
		$this->db->where($rule);
		$this->db->delete('order_list'); 
		redirect('office/product_report/'.$employee_id,'refresh');
	}

	public function office_order($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$result = $this->db->get('order_list');
		return $result->row_array();
	}

	public function order_data_update($data)
	{
		$product = $data['product'];
		$quantity = $data['quantity'];
		$quantity_type = $data['quantity_type'];
		$unit_price = $data['unit_price'];
		$debit_amount=$data['debit_amount'];
		$id = $data['id'];
		$client_id = $data['client_id'];
		$credit_amount = $quantity*$unit_price;
		$update = array('product'=>$product,'quantity'=>$quantity,'quantity_type'=>$quantity_type,'unit_price'=>$unit_price,'debit_amount'=>$debit_amount,'credit_amount'=>$credit_amount);
		$this->db->where('id',$id);
		$this->db->update('order_list',$update);
		 redirect('office/product_report/'.$client_id,'refresh');
	}




	public function category_list()
	{
		$this->db->select('*');
		$result = $this->db->get('inventory');
		return $result->result_array();
	}
	public function quantity_check($data)
	{
        $product = $data['product'];
		$this->db->select('*');
		$this->db->where('id',$product);
		$result = $this->db->get('inventory');
		return  $result->row_array();
		//return  $result->num_rows();
	}


}
