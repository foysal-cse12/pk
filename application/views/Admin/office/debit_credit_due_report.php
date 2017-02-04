<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | View Result</title>

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/table.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" >
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <style type="text/css">
            .total{
                color: #000;
                font-family: Tahoma;
                font-size: 1.2em;
                text-align: center;
                font-weight: bold;
            }
            .well{
                background: #f0f0f0 !important;
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
            <div id="main-container" class="row table-padding">
                <h3 class="text-center list">View Result (Office)</h3>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="panel panel-primary filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Debit</h3>
                            <div class="pull-right">
                                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Particular Name" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Total Amount" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Due Amount" disabled></th>
                                </tr>
                            </thead>
                            <tbody>
                            {debit}
                                <tr>
                                    <td>{entry_date}</td>
                                    <td>{particulars}</td>
                                    <td>{total_amount}</td>
                                    <td>{due_amount}</td>
                                    <td> <button type="button" class="btn btn-success btn-xs" onclick="location.href='<?php echo base_url();?>office/pay_due_amount/{id}';">Pay</button></td>
                                </tr>
                            {/debit}
                                
                            </tbody>
                        </table>
                    </div>
                   
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="panel panel-primary filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Credit</h3>
                            <div class="pull-right">
                                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Particular Name" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Total Amount" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Due Amount" disabled></th>
                                </tr>
                            </thead>
                            <tbody>
                            {credit}
                                <tr>
                                    <td>{entry_date}</td>
                                    <td>{particulars}</td>
                                    <td>{total_amount}</td>
                                    <td>{due_amount}</td>
                                    <td> <button type="button" class="btn btn-success btn-xs" onclick="location.href='<?php echo base_url();?>office/pay_due_amount/{id}';">Pay</button></td>
                                </tr>
                            {/credit}  
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-6">
                    <div id="form" class="result">
                        <button class="btn btn-success"  id="printpagebutton" type="button" onclick="printpage()">Print This Page</button>
                        <button class="btn btn-warning" type="button" onclick="captureFullPage()">Download Full Page</button>
                        <button class="btn btn-info" type="button" onclick="captureCurrentDiv()">Download Only Report</button>
                        
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
        <script src="<?php echo base_url();?>assets/js/html2canvas.js"></script>
        <script type="text/javascript">
            function printpage() {
                //Get the print button and put it into a variable
                var printButton = document.getElementById("printpagebutton");
                //Set the print button visibility to 'hidden' 
                printButton.style.visibility = 'hidden';
                //Print the page content
                window.print()
                //Set the print button to 'visible' again 
                //[Delete this line if you want it to stay hidden after printing]
                printButton.style.visibility = 'visible';
            }
        </script>
        <script type="text/javascript">
            function captureCurrentDiv()
            {
                html2canvas([document.getElementById('main-container')], {   
                    onrendered: function(canvas)  
                    {
                        var img = canvas.toDataURL()
                        $.post("<?php echo base_url();?>assets/download/save.php", {data: img}, function (file) {
                        window.location.href =  "<?php echo base_url();?>assets/download/download.php?path="+ file});   
                    }
                });
            }
            
            function captureFullPage()
            {
                html2canvas(document.body, {  
                    onrendered: function(canvas)  
                    {
                        var img = canvas.toDataURL()
                        $.post("<?php echo base_url();?>assets/download/save.php", {data: img}, function (file) {
                        window.location.href =  "<?php echo base_url();?>assets/download/download.php?path="+ file});   
                    }
                });
            }
        </script>
    </body>
</html>

