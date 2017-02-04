<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System Change Password</title>

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/check_password.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

        <style type="text/css">
        </style>
    </head>
    <body class="background">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-lg-offset-3 col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div id="logbox">
                          <form id="signup" method="post" action="<?php echo base_url();?>home/change_password_data">
                            <h1 class="log-titel"><span>Change Password </span> </h1>
                            <input name="old_password" type="password" placeholder="Enter your old password" class="input pass"  value="<?php echo set_value('old_password');?>" onBlur="check(this.value)" required/>
                            <span style="color:green"><div id = "check_password"></div></span >

                            <span style="color:red"><?php echo form_error('old_password'); ?></span>

                            <input name="new_password" type="password" placeholder="Enter your new password" value="<?php echo set_value('new_password');?>"  class="input pass" required/>

                            <span style="color:red"><?php echo form_error('new_password'); ?></span>

                            <input name="confirm_password" type="password" placeholder="Enter Confirm password" value="<?php echo set_value('confirm_password');?>"  class="input pass" required/>


                            <span style="color:red"><?php echo form_error('confirm_password'); ?></span>

                            <span  ><?php if(isset($msg)){echo $msg;}?></span>

                            

                            <input  type="submit" name="submit" value="Login" class="inputButton"/>

                          
                          </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <footer class="text-center footer">2016 <span> &copy </span> Copyright by <a target="_blank" href="http://winskit.com/">Winskit</a></footer>
            </div>
        </div>


        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript">
                
        </script>
    </body>
</html>

