
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | New Perticular</title>

        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
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
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h1 class="title">Add New Perticulars Form(Factory)</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-xs-12 col-sm-4 col-lg-4">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>factory/factory_add_new_particulars_data">
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Perticulars Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-product-hunt fa" aria-hidden="true"></i></span>
                                    <input type="text" name="particulars" value="<?php echo set_value('particulars');?>" class="form-control"  id="pname"  placeholder="Enter your Product Name" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('particulars'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Debited/Credited By(Name)</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-product-hunt fa" aria-hidden="true"></i></span>
                                    <input type="text" name="dc_name" value="<?php echo set_value('particulars');?>" class="form-control"  id="pname"  placeholder="Debited or Credited By" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('dc_name'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Total Ammount (BDT)</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="total_amount" value="<?php echo set_value('amount');?>" class="form-control"  id="price"  placeholder="Enter your Price" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('totalamount'); ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Payable Ammount (BDT)</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="amount" value="<?php echo set_value('amount');?>" class="form-control"  id="price"  placeholder="Enter your Price" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('amount'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Entry Type</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-credit-card fa" aria-hidden="true"></i></span>
                                    <select  class="form-control" name="status" id="date" required>
                                        <option value="debit" <?php echo  set_select('status', 'debit', TRUE);?>>Debit</option>
                                        <option value="credit" <?php echo  set_select('status', 'credit', TRUE);?>>Credit</option>
                                          <option value="" <?php echo  set_select('status', '', TRUE);?>>Select Entry Type</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <!-- <button type="button" class="btn btn-primary btn-lg btn-block login-button">Submit</button> -->
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg btn-block login-button">
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


