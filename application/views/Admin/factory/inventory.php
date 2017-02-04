
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | New Inventory</title>

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
                        <h1 class="title">Add New Inventory Form</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-xs-12 col-sm-4 col-lg-4">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>factory/factory_inventory_data">
                        
                        <!-- <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Product Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-product-hunt fa" aria-hidden="true"></i></span>
                                    <input  type="text" name="product_name" value="<?php echo set_value('product_name');?>" class="form-control"  id="pname"  placeholder="Enter your Product Name" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('product_name'); ?></span>
                            </div>
                        </div> -->
                        
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Product Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-product-hunt fa" aria-hidden="true"></i></span>
                                    <input  type="text" name="product_category" value="<?php echo set_value('product_category');?>" class="form-control"  id="pname"  placeholder="Enter your Product Name" required/>
                                    
                                    


                                    <!-- <select name="product_category" class="form-control"  id="date" required>              
                                        <option value="TWILL TAPE" <?php echo  set_select('product', 'TWILL TAPE', TRUE);?> >TWILL TAPE</option>
                                        <option value="ERRINGBONE TAPE
                                         " <?php echo  set_select('product', 'ERRINGBONE TAPE
                                        ', TRUE);?> >HERRINGBONE TAPE</option>
                                        <option value="CANVAS TAPE" <?php echo  set_select('product', 'CANVAS TAPE', TRUE);?> >CANVAS TAPE</option>
                                        <option value="COTTON BELT
                                            " <?php echo  set_select('product', 'COTTON BELT
                                             ', TRUE);?> >COTTON BELT</option>
                                        <option value="POLYESTER BELT" <?php echo  set_select('product', 'POLYESTER BELT', TRUE);?> >POLYESTER BELT</option>
                                        <option value="BASIC ELASTIC" <?php echo  set_select('product', 'BASIC ELASTIC', TRUE);?> >BASIC ELASTIC</option>
                                        <option value="WOVEN ELASTIC" <?php echo  set_select('product', 'WOVEN ELASTIC', TRUE);?> >WOVEN ELASTIC</option>
                                        <option value="AQUARD ELASTIC" <?php echo  set_select('product', 'AQUARD ELASTIC', TRUE);?> >AQUARD ELASTIC</option>
                                         <option value="DROWSTING" <?php echo  set_select('product', 'DROWSTING', TRUE);?> >DROWSTING</option>
                                        <option value="TUBE DROWSTING
                                          " <?php echo  set_select('product', 'TUBE DROWSTING
                                         ', TRUE);?> >TUBE DROWSTING</option>
                                        <option value="RIUND DROWSTING" <?php echo  set_select('product', 'RIUND DROWSTING', TRUE);?> >RIUND DROWSTING</option>
                                        <option value="SATIN TAPE" <?php echo  set_select('product', 'SATIN TAPE', TRUE);?> >SATIN TAPE</option>
                                        <option value="HANGERLOOF" <?php echo  set_select('product', 'HANGERLOOF', TRUE);?> >HANGERLOOF</option>
                                        <option value="NECKLESSLOOF" <?php echo  set_select('product', 'NECKLESSLOOF', TRUE);?> >NECKLESSLOOF</option>
                                        <option value="RUBBER THREAD" <?php echo  set_select('product', 'RUBBER THREAD', TRUE);?> >RUBBER THREAD</option>
                                         <option value="COTTON LACE" <?php echo  set_select('product', 'COTTON LACE', TRUE);?> >COTTON LACE</option>
                                         <option value="POLYESTER LACE" <?php echo  set_select('product', 'POLYESTER LACE', TRUE);?> >POLYESTER LACE</option>
                                         <option value="CARE LABEL" <?php echo  set_select('product', 'CARE LABEL', TRUE);?> >CARE LABEL</option>
                                         <option value="WOVEN LABEL" <?php echo  set_select('product', 'WOVEN LABEL', TRUE);?> >WOVEN LABEL</option>
                                         <option value="FLAMENT THREAD" <?php echo  set_select('product', 'FLAMENT THREAD', TRUE);?> >FLAMENT THREAD</option>
                                         <option value="SIZZING THREAD" <?php echo  set_select('product', 'SIZZING THREAD', TRUE);?> >SIZZING THREAD</option>
                                         <option value="POLYESTER THREAD" <?php echo  set_select('product', '121***POLYESTER THREAD', TRUE);?> >POLYESTER THREAD</option>
                                    
                                         <option value="COTTON YARN: 10/1, 20/1, 26/1, 20/2, 30/2, 40/2" <?php echo  set_select('product', 'COTTON YARN: 10/1, 20/1, 26/1, 20/2, 30/2, 40/2', TRUE);?> >COTTON YARN: 10/1, 20/1, 26/1, 20/2, 30/2, 40/2</option>
                                    
                                         <option value="TASSEL" <?php echo  set_select('product', 'TASSEL', TRUE);?> >TASSEL</option>
                                         <option value="ELASTIC CORD" <?php echo  set_select('product', 'ELASTIC CORD', TRUE);?> >ELASTIC CORD</option>
                                         <option value="POLY" <?php echo  set_select('product', 'POLY', TRUE);?> >POLY</option>
                                         <option value="BUTTON" <?php echo  set_select('product', 'BUTTON', TRUE);?> >BUTTON</option>
                                         <option value="TISSUE PAPPER" <?php echo  set_select('product', 'TISSUE PAPPER', TRUE);?> >TISSUE PAPPER</option>
                                        
                                    
                                    
                                        <option value="" <?php echo  set_select('product_category', '', TRUE);?> >Select Product</option>
                                    </select> -->

                                </div>
                                <br>
                                 <span style="color:red"><?php echo form_error('product_category'); ?></span>
                                 <p class="message text-center"><?php if(isset($msg)){echo $msg;}?></p>
                                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Supplier</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-male fa" aria-hidden="true"></i></span>
                                    <input type="text" name="suppliar" value="<?php echo set_value('suppliar');?>" class="form-control"  id="supplier"  placeholder="Enter your Supplier Name" />
                                </div>
                                <span style="color:red"><?php echo form_error('suppliar'); ?></span>
                            </div>
                        </div>                       
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Quantity</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="quantity" value="<?php echo set_value('quantity');?>" class="form-control"  id="quantity"  placeholder="Enter your Quantity" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('quantity'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Unit Price</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="unit_price" value="<?php echo set_value('unit_price');?>" class="form-control"  id="price"  placeholder="Enter your Price" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('unit_price'); ?></span>
                            </div>
                        </div>

                        <div class="form-group ">
                            <!-- <button type="button" class="btn btn-primary btn-lg btn-block login-button">Submit</button> -->
                            <input type="submit" name="submit" value="submit"  class="btn btn-primary btn-lg btn-block login-button">
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


