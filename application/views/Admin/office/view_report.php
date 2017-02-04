<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | View Report</title>

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
                        <h1 class="title">View Report(Office)</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-xs-12 col-sm-4 col-lg-4">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>office/view_report_details">
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Debit/Credit</label>
                            <!-- <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-product-hunt fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="pname" id="pname"  placeholder="Enter your Product Name"/>
                                </div>
                            </div> -->
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Select Month & Year For Report</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                    <select name="month" class="form-control" id="date" required>
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
                                    </select><br/>
                                    <select name="year" class="form-control" id="date" >
                                        <!-- <option value="">Year</option> -->
                                        <option value="<?php echo $year;?>"><?php echo $year;?></option>
                                        <option value="<?php echo $year-1;?>"><?php echo $year-1;?> </option>
                                        <option value="<?php echo $year-2;?>"><?php echo $year-2;?> </option>
                                        <option value="<?php echo $year-3;?>"><?php echo $year-3;?> </option>
                                        <option value="<?php echo $year-4;?>"><?php echo $year-4;?> </option>
                                        <option value="<?php echo $year-5;?>"><?php echo $year-5;?> </option>
                                        <option value="<?php echo $year-6;?>"><?php echo $year-6;?> </option>
                                        <option value="<?php echo $year-7;?>"><?php echo $year-7;?> </option>
                                        <option value="<?php echo $year-8;?>"><?php echo $year-8;?> </option>
                                        <option value="<?php echo $year-9;?>"><?php echo $year-9;?> </option>
                                        <option value="<?php echo $year-10;?>"><?php echo $year-10;?> </option>
                                      
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <!-- <a class="btn btn-primary btn-lg btn-block login-button" href="view_result.php" >Submit</a> -->
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



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Particulars</title>
</head>
<body>
    <form action="<?php echo base_url();?>office/office_view_report_details" method="post">
      <table align="center" border="2px">
        <tr>
            <th colspan="2">View Report</th>
        </tr>

        
        <tr>
            <th><input type="radio" name="report" value="dc">Debit/Credit</th>
        </tr>
        
         <tr>
             <th>
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

                <select name="year" >
                    <option value="">Year</option>
                    <option value="<?php echo $year;?>"><?php echo $year;?></option>
                    <option value="<?php echo $year-1;?>"><?php echo $year-1;?> </option>
                    <option value="<?php echo $year-2;?>"><?php echo $year-2;?> </option>
                    <option value="<?php echo $year-3;?>"><?php echo $year-3;?> </option>
                  
                </select>
             </th>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>

      </table>
            
    </form>
</body>
</html> -->