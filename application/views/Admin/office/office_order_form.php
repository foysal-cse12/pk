<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | New Order (Office)</title>

        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/check_quantity.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <style type="text/css">
            .message{
                color: #FF0000;
                font-family: Verdana;
                text-align: center;
                font-weight: bold;
                font-size: .7em;
            }
        </style>

        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
               <?php include('nav.php');?>   
            </div>
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h1 class="title">New Order For <?php echo $name;?> (Office)</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-xs-12 col-sm-4 col-lg-4">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>office/office_new_order_data">

                    <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Invoice No*.</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa-ellipsis-h" aria-hidden="true"></i></span>
                                    <input type="text" name="invoice_no" value="<?php echo set_value('invoice_no');?>" class="form-control"  id="name"  placeholder="Enter Invoice Number" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('invoice_no'); ?></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Product Name*</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-product-hunt fa" aria-hidden="true"></i></span>
                                    <select name="product" class="form-control"  id="date" required> 

                                     <?php foreach ($list as $lists){?>
                                         <option value="<?php echo $lists['id'];?>" <?php echo  set_select('product', '<?php echo $lists["id"];?>', TRUE);?> ><?php echo $lists['product_category']."(". $lists['quantity'].")";?>
                                            
                                         </option>
                                       
                                   <?php } ?>               
                                       
                                    </select>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Quantity*</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="quantity" value="<?php echo set_value('quantity');?>" class="form-control"  id="quantity"  placeholder="Enter your Quantity"  required/>
                                </div>
                               <!--  <span style="color:green"><div id = "check_quantity"></div></span > -->
                                <span style="color:red"><?php echo form_error('quantity'); ?></span>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Quantity Type</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="quantity_type" value="<?php echo set_value('quantity_type');?>" class="form-control"  id="quantity"  placeholder="Enter Quantity Type(kg/meter/pcs) " />
                                </div>
                                <span style="color:red"><?php echo form_error('quantity_type'); ?></span>
                            </div>

                           
                        </div>


                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Unit Price*</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="unit_price" value="<?php echo set_value('unit_price');?>" class="form-control"  id="price"  placeholder="Enter your Price" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('unit_price'); ?></span>
                            </div>
                        </div>

                         <input type="hidden" name="employee_id" value="<?php echo $employee_id;?>">

                        <div class="form-group ">
                            <!-- <button type="button" class="btn btn-primary btn-lg btn-block login-button">Save</button> -->
                            <input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg btn-block login-button">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <footer class="text-right footer">2016 <span> &copy </span> Copyright by <a target="_blank" href="http://winskit.com/">Winskit</a></footer>
            </div>
        </div>
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
        <script type="text/javascript">
                
        </script>
    </body>
</html>


<!-- <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Dashboard</title>
</head>
<body>
	

    <h2>Complete the form</h2>
    <form action="/management/home/new_appoinment_data" method="post">
    <form action="<?php echo base_url();?>office/office_add_new_order_data" method="post">
	  <table align="center" border="2px">
	  	<tr>
	  		<th colspan="2">Add New Order(office)</th>
	  	</tr>

	  	<tr>
	  		<td>Name</td>
	  		<td> <input type="text" name="name" value="<?php echo set_value('name');?>" required>
	  		</td>
	  	</tr>

	  	<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('name'); ?></span></td>
		</tr>

	  	<tr>
	  		<td>Address</td>
	  		<td> <input type="text" name="address" value="<?php echo set_value('address');?>" required>
	  		</td>
	  	</tr>

	  	<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('address'); ?></span></td>
		</tr>


		<tr>
	  		<td>Mobile</td>
	  		<td><input type="text" name="mobile" value="<?php echo set_value('mobile');?>" required>
	  		</td>
	  	</tr>  	

	  	<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('mobile'); ?></span></td>
		</tr>

		<tr>
	  		<td>Email</td>
	  		<td><input type="email" name="email" value="<?php echo set_value('email');?>" required>
	  		</td>
	  	</tr>  	

	  	<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('email'); ?></span></td>
		</tr>

		<tr>

	  		<td>Supply Date</td>
	  		<td>
	  			<select name="day" required>
	  				<option value="01"  <?php echo  set_select('day', '01', TRUE);?> >1</option>
                    <option value="02"  <?php echo  set_select('day', '02', TRUE);?> >2</option>
                    <option value="03" <?php echo  set_select('day', '03', TRUE);?> >3</option>
                    <option value="04" <?php echo  set_select('day', '04', TRUE);?> >4</option>
                    <option value="05" <?php echo  set_select('day', '05', TRUE);?> >5</option>
                    <option value="06" <?php echo  set_select('day', '06', TRUE);?> >6</option>
                    <option value="07" <?php echo  set_select('day', '07', TRUE);?> >7</option>
                    <option value="08" <?php echo  set_select('day', '08', TRUE);?> >8</option>
                    <option value="09" <?php echo  set_select('day', '09', TRUE);?> >9</option>
                    <option value="10" <?php echo  set_select('day', '10', TRUE);?> >10</option>
                    <option value="11" <?php echo  set_select('day', '11', TRUE);?> >11</option>
                    <option value="12" <?php echo  set_select('day', '12', TRUE);?> >12</option>
                    <option value="13" <?php echo  set_select('day', '13', TRUE);?> >13</option>
                    <option value="14" <?php echo  set_select('day', '14', TRUE);?> >14</option>
                    <option value="15" <?php echo  set_select('day', '15', TRUE);?> >15</option>
                    <option value="16" <?php echo  set_select('day', '16', TRUE);?> >16</option>
                    <option value="17" <?php echo  set_select('day', '17', TRUE);?> >17</option>
                    <option value="18" <?php echo  set_select('day', '18', TRUE);?> >18</option>
                    <option value="19" <?php echo  set_select('day', '19', TRUE);?> >19</option>
                    <option value="20" <?php echo  set_select('day', '20', TRUE);?> >20</option>
                    <option value="21"  <?php echo  set_select('day', '21', TRUE);?> >21</option>
                    <option value="22"  <?php echo  set_select('day', '22', TRUE);?> >22</option>
                    <option value="23" <?php echo  set_select('day', '23', TRUE);?> >23</option>
                    <option value="24" <?php echo  set_select('day', '24', TRUE);?> >24</option>
                    <option value="25" <?php echo  set_select('day', '25', TRUE);?> >25</option>
                    <option value="26" <?php echo  set_select('day', '26', TRUE);?> >26</option>
                    <option value="27" <?php echo  set_select('day', '27', TRUE);?> >27</option>
                    <option value="28" <?php echo  set_select('day', '28', TRUE);?> >28</option>
                    <option value="29" <?php echo  set_select('day', '29', TRUE);?> >29</option>
                    <option value="30" <?php echo  set_select('day', '30', TRUE);?> >30</option>
                    <option value="31"  <?php echo  set_select('day', '31', TRUE);?> >31</option>
                    <option value="" <?php echo  set_select('day', '', TRUE);?> >Day</option>
	  			</select>

	  			<select name="month" required>
	  				<option value="01" <?php echo  set_select('month', '01', TRUE);?> >January</option>
                    <option value="02" <?php echo  set_select('month', '02', TRUE);?>>February</option>
                    <option value="03" <?php echo  set_select('month', '03', TRUE);?>>March</option>
                    <option value="04" <?php echo  set_select('month', '04', TRUE);?>>April</option>
                    <option value="05" <?php echo  set_select('month', '05', TRUE);?>>May</option>
                    <option value="06" <?php echo  set_select('month', '06', TRUE);?>>June</option>
                    <option value="07" <?php echo  set_select('month', '07', TRUE);?>>july</option>
                    <option value="08" <?php echo  set_select('month', '08', TRUE);?>>August</option>
                    <option value="09" <?php echo  set_select('month', '09', TRUE);?>>September</option>
                    <option value="10" <?php echo  set_select('month', '10', TRUE);?>> October</option>
                    <option value="11" <?php echo  set_select('month', '11', TRUE);?>>November</option>
                    <option value="12" <?php echo  set_select('month', '12', TRUE);?>>December</option>
                    <option value="" <?php echo  set_select('month', '', TRUE);?>>Month</option>
	  			</select>

	  			<select name="year" required>
                    <option value="">Year</option>
                    <option value="<?php echo $year;?>"><?php echo $year;?></option>
                    <option value="<?php echo $year+1;?>"><?php echo $year+1;?> </option>
                  
                </select>
	  		</td>

	  	</tr>

		<tr>
		    <td>Product Category</td>
			<td>
				<select name="product" required>              
                    <option value="s1" <?php echo  set_select('product', 's1', TRUE);?> >Product 1</option>
                    <option value="s2" <?php echo  set_select('product', 's2', TRUE);?> >Product 2</option>
                    <option value="s3" <?php echo  set_select('product', 's3', TRUE);?> >Product 3</option>
                    <option value="" <?php echo  set_select('product', '', TRUE);?> >Select Service</option>
                </select>
			</td>
		</tr>

		<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('product'); ?></span></td>
		</tr>

		 
	  	<tr>
	  		<td>Quantity</td>
	  		<td><input type="text" name="quantity" value="<?php echo set_value('quantity');?>" required>
	  		</td>
	  	</tr>  	

	  	<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('quantity'); ?></span></td>
		</tr>

		<tr>
	  		<td>Unit Price</td>
	  		<td><input type="text" name="unit_price" value="<?php echo set_value('unit_price');?>" required>
	  		</td>
	  	</tr>  	

	  	<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('unit_price'); ?></span></td>
		</tr>

		

	  	<tr>
	  		<td></td>
	  		<td><input type="submit" name="submit" value="Save"></td>
	  	</tr>

	  </table>

	  </form>
	


</body>
</html> -->