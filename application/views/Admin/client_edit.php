
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System |Update Client</title>

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
                        <h1 class="title">Update Client/Company Data</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-xs-12 col-sm-4 col-lg-4">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>home/client_update_data">
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Client/Company Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
                                    <input type="text" name="c_name" value="{name}" class="form-control"  id="pname"  placeholder="Enter your Employee Name" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('employee_name'); ?></span>
                            </div>
                        </div>

						
						<div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Mobile</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="mobile" value="{mobile}" class="form-control"  id="price"  placeholder="Enter Employee Mobile" />
                                </div>
                                <span style="color:red"><?php echo form_error('mobile'); ?>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></span>
                                    <input type="email" name="email" value="{email}" class="form-control"  id="price"  placeholder="Enter Email" />
                                </div>
                                <span style="color:red"><?php echo form_error('email'); ?>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{id}">
                       
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

