<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | Factory Order</title>

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
        <style type="text/css">
            .panel.panel-horizontal {
                display:table;
                width:100%;
                color:#000;
                margin-top: -18px;
/*                font-size: .8em;*/
            }
            .panel-title{
/*                font-size: .6em;*/
            }
            .panel.panel-horizontal > .panel-heading, .panel.panel-horizontal > .panel-body, .panel.panel-horizontal > .panel-footer {
                display:table-cell;
            }
            .panel.panel-horizontal > .panel-heading, .panel.panel-horizontal > .panel-footer {
                width: 25%;
                border:0;
                vertical-align: middle;
            }
            .panel.panel-horizontal > .panel-heading {
                border-right: 1px solid #ddd;
                border-top-right-radius: 0;
                border-bottom-left-radius: 4px;
            }
            .panel.panel-horizontal > .panel-footer {
                border-left: 1px solid #ddd;
                border-top-left-radius: 0;
                border-bottom-right-radius: 4px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php include('nav.php');?>
            </div>
            <div class="row" id="main-container">
                <h3 class="text-center list">Product Or Particular Details Of {name} (Factory)</h3>
                <div class="col-md-offset-3 col-md-6">

                    <div class="panel panel-default panel-horizontal">
                        <div class="panel-heading">
                            <h3 class="panel-title">Date</h3>
                        </div>
                        <div class="panel-body text-center">{entry_date}</div>
                    </div>
                    <div class="panel panel-default panel-horizontal">
                        <div class="panel-heading">
                            <h3 class="panel-title">Product</h3>
                        </div>
                        <div class="panel-body text-center"> {product}</div>
                        <!-- <div class="panel-footer">Order Id</div> -->
                    </div>
                     <div class="panel panel-default panel-horizontal">
                        <div class="panel-heading">
                            <h3 class="panel-title">Quantity</h3>
                        </div>
                        <div class="panel-body text-center">{quantity} {quantity_type}</div>
                    </div>
                    <div class="panel panel-default panel-horizontal">
                        <div class="panel-heading">
                            <h3 class="panel-title">Unit Price</h3>
                        </div>
                        <div class="panel-body text-center"> {unit_price} </div>
                    </div>
                    <div class="panel panel-default panel-horizontal">
                        <div class="panel-heading">
                            <h3 class="panel-title">Credit Amount</h3>
                        </div>
                        <div class="panel-body text-center">{credit_amount}</div>
                    </div>
                    <div class="panel panel-default panel-horizontal">
                        <div class="panel-heading">
                            <h3 class="panel-title">Debit Amount</h3>
                        </div>
                        <div class="panel-body text-center">{debit_amount}</div>
                    </div>
                    
                    <div class="panel panel-default panel-horizontal">
                        <div class="panel-heading">
                            <h3 class="panel-title">Balance</h3>
                        </div>
                        <div class="panel-body text-center">
                            <script type="text/javascript">
                                var i = '{credit_amount}';
                                var j = '{debit_amount}';
                                var k = i-j;
                                document.write(k);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div id="form" class="result">
                        <button class="btn btn-success"  id="printpagebutton" type="button" onclick="printpage()">Print This Page</button>
                        <button class="btn btn-warning" type="button" onclick="captureFullPage()">Download Full Page</button>
                        <button class="btn btn-info" type="button" onclick="captureCurrentDiv()">Download Only Details</button>
                        
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


