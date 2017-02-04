<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | LC List</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/table.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/check_password.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" >
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            legend{
                font-family: 'Tangerine', serif;;
                font-weight: bold;
                font-size: 3em;
            }
            .control-label{
                color: #000;
                /*font-family: 'Tangerine', serif;*/
                font-size: 1em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php include('nav.php');?> 
            </div>
            <div class="row">
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>home/change_password_data">
                    <fieldset>
                        <!-- Form Name -->
                        <legend class="text-center">Change Your Password</legend>
                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Oldpass">Old Password</label>
                            <div class="col-md-4">
                                <input id="" name="old_password" type="password" class="form-control input-md" placeholder="Enter your old password" class="input pass"  value="<?php echo set_value('old_password');?>" onBlur="check(this.value)" required>
                            </div>
                            <span style="color:green"><div id = "check_password"></div></span >

                            <span style="color:red"><?php echo form_error('old_password'); ?></span>
                        </div>
                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Newpass">New Password</label>
                            <div class="col-md-4">
                                <input id="" name="new_password" type="password" placeholder="Enter your new password" value="<?php echo set_value('new_password');?>" class="form-control input-md" required>
                            </div>
                            <span style="color:red"><?php echo form_error('new_password'); ?></span>
                        </div>
                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Repeatpass">Repeat Password</label>
                            <div class="col-md-4">
                                <input id="" name="confirm_password" type="password" placeholder="Repeat password" value="<?php echo set_value('confirm_password');?>" class="form-control input-md" required>
                            </div>
                            <span style="color:red"><?php echo form_error('confirm_password'); ?></span>
                            <span style="color:red"  ><?php if(isset($msg)){echo $msg;}?></span>
                        </div>

                         
                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="bCancel"></label>
                            <div class="col-md-8">
                            <input type="submit" name="submit" value="submit" class="btn btn-success">
                               <!--  <button id="" name="" class="btn btn-success">Change Password</button> -->
                                <!-- <button id="" name="" class="btn btn-warning">Go Back</button> -->
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="row">
                <footer class="text-right footer">2016 <span> &copy </span> Copyright by <a target="_blank" href="http://winskit.com/">Winskit</a></footer>
            </div>
        </div>
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
        <script src="<?php echo base_url();?>assets/js/table.js"></script>
    </body>
</html>
