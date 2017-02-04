<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System Login Page</title>

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
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
    </head>
    <body class="background">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-lg-offset-3 col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div id="logbox">
                          <form id="signup" method="post" action="<?php echo base_url();?>home/login_data">
                            <h1 class="log-titel">Account <span> Login </span> </h1>
                            <input name="username" type="text" placeholder="Enter your username" class="input pass"  value="<?php echo set_value('username');?>" required/>

                            <span class="message"><?php echo form_error('username'); ?></span>

                            <input name="password" type="password" placeholder="Enter your password" value="<?php echo set_value('password');?>"  class="input pass" required/>

                            <span class="message"><?php echo form_error('password'); ?></span>

                            <div class="text-center">
                               <input  type="checkbox" name="remember" value="remember"/> &nbsp;&nbsp;&nbsp;&nbsp;<a class="forget" href="#" id="">Remember Me</a>
                            </div>

                            <p class="message text-center"><?php if(isset($msg)){echo $msg;}?></p>

                            <input  type="submit" name="submit" value="Login" class="inputButton"/>

                           <!--  <div class="text-center">
                               <a class="forget" href="#" id="">forgot password <span>?</span> </a>
                           </div> -->
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








<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="/pk/home/login_data" method="post">
      <table align="center" border="2px">
        <tr>
            <th colspan="2">Login</th>
        </tr>

        <tr>
            <td>Username</td>
            <td> <input type="text" name="username" value="<?php echo set_value('username');?>" required>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><span style="color:red"><?php echo form_error('username'); ?></span></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?php echo set_value('password');?>" required>
            </td>
        </tr>

        <tr>
            <td><input id="check1" type="checkbox" name="remember" value="remember"></td>
            <td><label for="check1">&nbsp; Remember Me</label></td>
        </tr>

        <tr>
            <td></td>
            <td><span style="color:red"><?php echo form_error('password'); ?></span></td>
        </tr>

        <tr>
            <td colspan="2"><span style="color:red"><?php if(isset($msg)){echo $msg;}?></span></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Login"></td>
        </tr>

      </table>
            
    </form>
</body>
</html> -->