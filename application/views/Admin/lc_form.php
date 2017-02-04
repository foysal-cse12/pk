<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | New LC</title>

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
                        <h1 class="title">Letter Of Credit Form</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-xs-12 col-sm-4 col-lg-4">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>home/lc_form_data">

                    <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Customer Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" name="applicant_name" value="<?php echo set_value('applicant_name');?>" class="form-control"  id="bname"  placeholder="Enter Customer Name" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('applicant_name'); ?></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Opening Bank Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                    <input type="text" name="opening_bank" value="<?php echo set_value('opening_bank');?>" class="form-control"  id="bname"  placeholder="Enter Opening Bank Name" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('opening_bank'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Advising Bank Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                    <input type="text" name="advising_bank" value="<?php echo set_value('advising_bank');?>" class="form-control"  id="bname"  placeholder="Enter Opening Bank Name" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('advising_bank'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Type Of L.C</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-exchange fa" aria-hidden="true"></i></span>
                                    <select  class="form-control" name="lc_type" id="date" required>
                                        <option value="Import" <?php echo  set_select('lc_type', 'Import', TRUE);?> >Import</option>
                                        <option value="Export" <?php echo  set_select('lc_type', 'Export', TRUE);?> >Export</option>                       
                                        <option value="Commercial" <?php echo  set_select('lc_type', 'Commercial', TRUE);?> >Commercial</option>
                                        <option value="Standby" <?php echo  set_select('lc_type', 'Standby', TRUE);?> >Standby</option>
                                        <option value="Revocable" <?php echo  set_select('lc_type', 'Revocable', TRUE);?> >Revocable</option>
                                        <option value="Irrevocable" <?php echo  set_select('lc_type', 'Irrevocable', TRUE);?> >Irrevocable</option>
                                        <option value="" <?php echo  set_select('lc_type', '', TRUE);?> >Select L.C Type</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">L.C Number</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="lc_number" value="<?php echo set_value('lc_number');?>" class="form-control"  id="number"  placeholder="Enter your L.C Number" required/>
                                </div>
                                <span style="color:red"><?php echo form_error('lc_number'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Ammount Of Credit</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" name="amount" value="<?php echo set_value('amount');?>" class="form-control"  id="ammount"  placeholder="Enter Ammoutn In BDT" />
                                </div>
                                <span style="color:red"><?php echo form_error('amount'); ?></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label"> Date Of Issue</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>

                                    <select name="day" class="form-control select"  id="date" required>
						  				<option value="01"  <?php echo  set_select('day', '01', TRUE);?> >1</option>
					                    <option value="02"  <?php echo  set_select('day', '02', TRUE);?> >2</option>
					                    <option value="03" <?php echo  set_select('day', '03', TRUE);?> >3</option>
					                    <option value="04" <?php echo  set_select('day', '04', TRUE);?> >4</option>
					                    <option value="05" <?php echo  set_select('day', '05', TRUE);?> >5</option>
					                    <option value="06" <?php echo  set_select('day', '06', TRUE);?> >6</option>
					                    <option value="07" <?php echo  set_select('day', '07', TRUE);?> >7</option>
					                    <option value="08" <?php echo  set_select('day', '08', TRUE);?> >8</option>
					                    <option value="09" <?php echo  set_select('day', '09', TRUE);?> >9</option>
					                    <option value="10" <?php echo  set_select('day', '10', TRUE);?> >10</option>
					                    <option value="11" <?php echo  set_select('day', '11', TRUE);?> >11</option>
					                    <option value="12" <?php echo  set_select('day', '12', TRUE);?> >12</option>
					                    <option value="13" <?php echo  set_select('day', '13', TRUE);?> >13</option>
					                    <option value="14" <?php echo  set_select('day', '14', TRUE);?> >14</option>
					                    <option value="15" <?php echo  set_select('day', '15', TRUE);?> >15</option>
					                    <option value="16" <?php echo  set_select('day', '16', TRUE);?> >16</option>
					                    <option value="17" <?php echo  set_select('day', '17', TRUE);?> >17</option>
					                    <option value="18" <?php echo  set_select('day', '18', TRUE);?> >18</option>
					                    <option value="19" <?php echo  set_select('day', '19', TRUE);?> >19</option>
					                    <option value="20" <?php echo  set_select('day', '20', TRUE);?> >20</option>
					                    <option value="21"  <?php echo  set_select('day', '21', TRUE);?> >21</option>
					                    <option value="22"  <?php echo  set_select('day', '22', TRUE);?> >22</option>
					                    <option value="23" <?php echo  set_select('day', '23', TRUE);?> >23</option>
					                    <option value="24" <?php echo  set_select('day', '24', TRUE);?> >24</option>
					                    <option value="25" <?php echo  set_select('day', '25', TRUE);?> >25</option>
					                    <option value="26" <?php echo  set_select('day', '26', TRUE);?> >26</option>
					                    <option value="27" <?php echo  set_select('day', '27', TRUE);?> >27</option>
					                    <option value="28" <?php echo  set_select('day', '28', TRUE);?> >28</option>
					                    <option value="29" <?php echo  set_select('day', '29', TRUE);?> >29</option>
					                    <option value="30" <?php echo  set_select('day', '30', TRUE);?> >30</option>
					                    <option value="31"  <?php echo  set_select('day', '31', TRUE);?> >31</option>
					                    <option value="" <?php echo  set_select('day', '', TRUE);?> >Day</option>
						  			</select>

                                    <select name="month" class="form-control select"  id="date" required>
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

					  			<select name="year" class="form-control select"  id="date" required>
				           
				                    <option value="<?php echo $year;?>"><?php echo $year;?></option>
				                    <option value="<?php echo $year+1;?>"><?php echo $year+1;?> </option>
				                    <option value="" <?php echo  set_select('year', '', TRUE);?>>Year</option>
				                  
				                </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">LC Due Date</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>

                                    <select name="due_day" class="form-control select"  id="date" required>
						  				<option value="01"  <?php echo  set_select('due_day', '01', TRUE);?> >1</option>
					                    <option value="02"  <?php echo  set_select('due_day', '02', TRUE);?> >2</option>
					                    <option value="03" <?php echo  set_select('due_day', '03', TRUE);?> >3</option>
					                    <option value="04" <?php echo  set_select('due_day', '04', TRUE);?> >4</option>
					                    <option value="05" <?php echo  set_select('due_day', '05', TRUE);?> >5</option>
					                    <option value="06" <?php echo  set_select('due_day', '06', TRUE);?> >6</option>
					                    <option value="07" <?php echo  set_select('due_day', '07', TRUE);?> >7</option>
					                    <option value="08" <?php echo  set_select('due_day', '08', TRUE);?> >8</option>
					                    <option value="09" <?php echo  set_select('due_day', '09', TRUE);?> >9</option>
					                    <option value="10" <?php echo  set_select('due_day', '10', TRUE);?> >10</option>
					                    <option value="11" <?php echo  set_select('due_day', '11', TRUE);?> >11</option>
					                    <option value="12" <?php echo  set_select('due_day', '12', TRUE);?> >12</option>
					                    <option value="13" <?php echo  set_select('due_day', '13', TRUE);?> >13</option>
					                    <option value="14" <?php echo  set_select('due_day', '14', TRUE);?> >14</option>
					                    <option value="15" <?php echo  set_select('due_day', '15', TRUE);?> >15</option>
					                    <option value="16" <?php echo  set_select('due_day', '16', TRUE);?> >16</option>
					                    <option value="17" <?php echo  set_select('due_day', '17', TRUE);?> >17</option>
					                    <option value="18" <?php echo  set_select('due_day', '18', TRUE);?> >18</option>
					                    <option value="19" <?php echo  set_select('due_day', '19', TRUE);?> >19</option>
					                    <option value="20" <?php echo  set_select('due_day', '20', TRUE);?> >20</option>
					                    <option value="21"  <?php echo  set_select('due_day', '21', TRUE);?> >21</option>
					                    <option value="22"  <?php echo  set_select('due_day', '22', TRUE);?> >22</option>
					                    <option value="23" <?php echo  set_select('due_day', '23', TRUE);?> >23</option>
					                    <option value="24" <?php echo  set_select('due_day', '24', TRUE);?> >24</option>
					                    <option value="25" <?php echo  set_select('due_day', '25', TRUE);?> >25</option>
					                    <option value="26" <?php echo  set_select('due_day', '26', TRUE);?> >26</option>
					                    <option value="27" <?php echo  set_select('due_day', '27', TRUE);?> >27</option>
					                    <option value="28" <?php echo  set_select('due_day', '28', TRUE);?> >28</option>
					                    <option value="29" <?php echo  set_select('due_day', '29', TRUE);?> >29</option>
					                    <option value="30" <?php echo  set_select('due_day', '30', TRUE);?> >30</option>
					                    <option value="31"  <?php echo  set_select('due_day', '31', TRUE);?> >31</option>
					                    <option value="" <?php echo  set_select('due_day', '', TRUE);?> >Day</option>
						  			</select>

                                    <select name="due_month" class="form-control select"  id="date" required>
					  				<option value="01" <?php echo  set_select('due_month', '01', TRUE);?> >January</option>
				                    <option value="02" <?php echo  set_select('due_month', '02', TRUE);?>>February</option>
				                    <option value="03" <?php echo  set_select('due_month', '03', TRUE);?>>March</option>
				                    <option value="04" <?php echo  set_select('due_month', '04', TRUE);?>>April</option>
				                    <option value="05" <?php echo  set_select('due_month', '05', TRUE);?>>May</option>
				                    <option value="06" <?php echo  set_select('due_month', '06', TRUE);?>>June</option>
				                    <option value="07" <?php echo  set_select('due_month', '07', TRUE);?>>July</option>
				                    <option value="08" <?php echo  set_select('due_month', '08', TRUE);?>>August</option>
				                    <option value="09" <?php echo  set_select('due_month', '09', TRUE);?>>September</option>
				                    <option value="10" <?php echo  set_select('due_month', '10', TRUE);?>> October</option>
				                    <option value="11" <?php echo  set_select('due_month', '11', TRUE);?>>November</option>
				                    <option value="12" <?php echo  set_select('due_month', '12', TRUE);?>>December</option>
				                    <option value="" <?php echo  set_select('due_month', '', TRUE);?>>Month</option>
					  			</select>

					  			<select name="due_year" class="form-control select"  id="date" required>
				                    
				                    <option value="<?php echo $year;?>"><?php echo $year;?></option>
				                    <option value="<?php echo $year+1;?>"><?php echo $year+1;?> </option>
				                    <option value="" <?php echo  set_select('due_year', '', TRUE);?>>Year</option>
				                  
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


