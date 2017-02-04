<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | LC List</title>

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/table.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" >
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

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
        </div>
        <div class="container-fluid">
            <div class="row table-padding">
                <h3 class="text-center list">Letter Of Credit List</h3>
                <button class="btn btn-success pull-right btn-sm " onclick="location.href='<?php echo base_url();?>home/lc';">New LC</button>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="panel panel-primary filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Letter Of Credit List</h3>
                            <div class="pull-right">
                                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                            </div>
                        </div>
                        <table class="table table-responsive">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="Customer Name" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Opening Bank" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Advising Bank" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="LC Number" disabled></th>
                                    <!-- <th><input type="text" class="form-control" placeholder="LC Type" disabled></th> -->
                                    <th><input type="text" class="form-control" placeholder="Amount" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Issue Date" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Due Date" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Action" disabled></th>
                                </tr>
                            </thead>
                            <tbody>
                             {list}
                                <tr>
                                    <td>{applicant_name}</td>
                                    <td>{opening_bank}</td>
                                    <td>{advising_bank}</td>
                                    <td>{lc_number}</td>
									<!-- <td>{lc_type}</td>	 -->
                                    <td>{amount}</td>  	
                                    <td>{issue_date}</td>							
									<td>{due_date}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" onclick="location.href='<?php echo base_url(); ?>home/specific_lc_details/{id}';">Details</button>
                                            <button type="button" class="btn btn-warning btn-xs" onclick="location.href='<?php echo base_url();?>home/lc_list_edit/{id}';">Edit</button>
                                            <!-- <button type="button" class="btn btn-danger btn-xs" onclick="location.href='<?php echo base_url();?>home/lc_list_delete/{id}';">Delete</button> -->
                                        </div>
                                    </td>
                                </tr>
                             {/list}
                            </tbody>
                        </table>

                       <div class="text-center">
                            <?php echo "$links"; ?>
                        </div>
                        
                    </div>
                </div>
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


