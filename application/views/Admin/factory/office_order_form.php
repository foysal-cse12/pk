<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | New Order (Factory)</title>

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
                        <h1 class="title">New Order For <?php echo $name;?> (Factory)</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-xs-12 col-sm-4 col-lg-4">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>factory/office_new_order_data">

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


