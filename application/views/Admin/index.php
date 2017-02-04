<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | User Dashboard</title>

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

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
            <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Role</div>
                        <div class="panel-body">
                            <!-- TREEVIEW CODE -->
                            
                            <ul class="treeview">

                                <li><a href="#">Employee</a>
                                    <ul>

                                        <li><a href="<?php echo base_url();?>home/create_employee">Add New employee</a></li>

                                        <li><a href="<?php echo base_url();?>home/employee_list">Emloyee List</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Client</a>
                                    <ul>
                                        <li><a href="<?php echo base_url();?>home/create_client">Add New Client</a></li>

                                        <li><a href="<?php echo base_url();?>home/client_list">Client List</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- TREEVIEW CODE -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">BALANCE SHEET</div>
                        <div class="panel-body">
                            <!-- TREEVIEW CODE -->
                            
                            <ul class="treeview">

                                 <li><a href="#">Office Balance Sheet</a>
                                    <ul>
                                
                                        <li>
                                            <a href="<?php echo base_url();?>office/particular_list">Particulars list</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>office/view_report">View report</a>
                                        </li>
                                           
                                    </ul>
                                </li>
                                
                                <li><a href="#">Factory Balance Sheet</a>
                                    <ul>
                                
                                        <li>
                                            <a href="<?php echo base_url();?>factory/particular_list">Particulars list</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>factory/view_report">View report</a>
                                        </li>
                                           
                                    </ul>
                                </li> 

                                
                                 <!-- <li>
                                    <a href="<?php echo base_url();?>office/particular_list">Particulars list</a>
                                 </li>
                                 <li>
                                    <a href="<?php echo base_url();?>office/view_report">View report</a>
                                 </li> -->
                            </ul>
                            <!-- TREEVIEW CODE -->
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">ORDER DETAILS</div>
                        <div class="panel-body">
                            <!-- TREEVIEW CODE -->
                            <ul class="treeview">
                                <li><a href="<?php echo base_url();?>office/office_order">Office Order</a></li>
                                <li><a href="<?php echo base_url();?>factory/factory_order">Factory Order</a> </li>
                             </ul>
                            <!-- <ul class="treeview">
                                <li><a href="#">Office order details</a>
                                    <ul>
                                        <li><a href="<?php echo base_url();?>office/office_add_new_order_form">Add New Order</a></li>
                            
                                        <li><a href="<?php echo base_url();?>office/office_view_order">View order List</a></li>
                            
                                        <li><a href="<?php echo base_url();?>office/factory_order_archive">Order Archive</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Factory order details</a>
                                    <ul>
                                        <li><a href="<?php echo base_url();?>factory/factory_add_new_order_form">Add New Order</a></li>
                            
                                        <li><a href="<?php echo base_url();?>factory/factory_view_order">View Order List</a></li>
                            
                                        <li><a href="<?php echo base_url();?>factory/factory_order_archive">Order Archive</a></li>
                            
                                    </ul>
                                </li>
                            </ul> -->
                            <!-- TREEVIEW CODE -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">INVENTORY</div>
                        <div class="panel-body">
                            <!-- TREEVIEW CODE -->
                            <ul class="treeview">
                                <li><a href="<?php echo base_url();?>factory/inventory">Add New Inventory</a></li>
                                <li><a href="<?php echo base_url();?>factory/inventory_list">Inventory List</a> </li>
                            </ul>
                            <!-- TREEVIEW CODE -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">LETTER OF CREDIT</div>
                        <div class="panel-body">
                            <!-- TREEVIEW CODE -->
                            
                            <ul class="treeview">

                               <li><a href="<?php echo base_url();?>home/lc">New LC</a></li>
                                <li><a href="<?php echo base_url();?>home/lc_list">LC List</a></li>
                            </ul>
                            <!-- TREEVIEW CODE -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Conveyance</div>
                        <div class="panel-body">
                            
                            <ul class="treeview">

                               <li><a href="<?php echo base_url();?>home/new_conveyance">Conveyance List</a></li>
                                <!-- <li><a href="<?php echo base_url();?>home/conveyance_list">Conveyance List</a></li> -->
                            </ul>
                        </div>
                    </div>
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
	<title>Admin Dashboard</title>
</head>
<body>
	Hello admin from view  
    <input type="button"  value="Logout" onclick="location.href='<?php echo base_url();?>home/logout';"></td>(body)

	<br><br><br>
	<input type="button"  value="Office Balance Sheet" onclick="location.href='<?php echo base_url();?>office/office_balance_sheet';"></td>(body)
	<input type="button"  value="Factory Balance Sheet" onclick="location.href='<?php echo base_url();?>factory/factory_balance_sheet';"></td>(body)
	<br><br><br>

	<input type="button"  value="Order Details Office" onclick="location.href='<?php echo base_url();?>office/office_order_details';"></td>(body)
	<input type="button"  value="Order Details Factory" onclick="location.href='<?php echo base_url();?>factory/factory_order_details';"></td>(body)
	<br><br><br>

	<input type="button"  value="L/C" onclick="location.href='<?php echo base_url();?>home/lc';"></td>(body)
	<input type="button"  value="Inventory" onclick="location.href='<?php echo base_url();?>factory/inventory';"></td>(body)
	<br><br><br>

	<input type="button"  value="Conveyance" onclick="location.href='<?php echo base_url();?>home/conveyance';"></td>(body)
	<input type="button"  value="Important File" onclick="location.href='<?php echo base_url();?>home/important_file';"></td>(body)
</body>
</html> -->