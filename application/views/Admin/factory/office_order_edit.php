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
                        <h1 class="title">New Order Form (Factory)</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-xs-12 col-sm-4 col-lg-4">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>factory/factory_edit_order_data">

                    <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Order Id</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" name="order_id" value="{order_id}" class="form-control"  id="name"   disabled/>
                                </div>
                                <span style="color:red"><?php echo form_error('order_id'); ?></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your/Company Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" name="name" value="{name}" class="form-control"  id="name"  required/>
                                </div>
                                <span style="color:red"><?php echo form_error('name'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your Address</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                    <!-- <textarea  class="form-control" name="address" value="<?php echo set_value('address');?>" placeholder="Enter your Address" required></textarea> -->
                                    <input type="text" name="address" value="{address}"   class="form-control" >
                                </div>
                                <span style="color:red"><?php echo form_error('address'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your Mobile</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                    <input type="text" name="mobile" value="{mobile}" class="form-control"  id="mobile"  />
                                </div>
                                <span style="color:red"><?php echo form_error('mobile'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="email" name="email" value="{email}" class="form-control"  id="email"  />
                                </div>
                                <span style="color:red"><?php echo form_error('email'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Product Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-product-hunt fa" aria-hidden="true"></i></span>
                                    <input type="text" name="" value="{product}" class="form-control"  id="name"  disabled />
                                </div>
                                <span style="color:red"><?php echo form_error('product'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Change Product</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-product-hunt fa" aria-hidden="true"></i></span>
                                    <select name="product" class="form-control"  id="date" >   
                                     {list}
                                
                                         <option value="{id}"  <?php echo  set_select('day', '{id}', TRUE);?> >{product_category} ({quantity})</option>
                                         

                                    {/list}

                                    </select>
                                    
                         </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Order Date</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="entry_date" value="{entry_date}" class="form-control"  id="price"  placeholder="Enter your Price" disabled />
                                </div>
                                <span style="color:red"><?php echo form_error('entry_date'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Supply Date</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="supply_date" value="{supply_date}" class="form-control"  id="price"  placeholder="Enter your Price" required />
                                </div>
                                <span style="color:red"><?php echo form_error('supply_date'); ?></span>
                            </div>
                        </div>

                        
                        
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Quantity</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="quantity" value="{quantity}" class="form-control"  id="quantity"  placeholder="Enter your Quantity" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('quantity'); ?></span>
                            </div>

                           
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Quantity Type</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="quantity_type" value="{quantity_type}" class="form-control"  id="quantity"  placeholder="Enter Quantity Type(kg/meter/pcs) " required/>
                                </div>
                                <span style="color:red"><?php echo form_error('quantity_type'); ?></span>
                            </div>

                           
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Unit Price</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="unit_price" value="{unit_price}" class="form-control"  id="price"  placeholder="Enter your Price" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('unit_price'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Total Price</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="total_price" value="{total_price}" class="form-control"  id="price"  placeholder="Enter your Price" disabled />
                                </div>
                                <span style="color:red"><?php echo form_error('total_price'); ?></span>
                            </div>
                        </div>

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

