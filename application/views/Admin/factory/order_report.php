<!doctype html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> PK - Garments Management System | Order Report</title>

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/table.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" >
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css">
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.paginemytable.js"></script>
        <script>
            $(document).ready(function() {
                $("table").paginate({
                    paginationButtonsClass: "ui basic default button",
                    paginationButtonsContainerClass: "ui right aligned",
                    previousButtonContent: "Previous",
                    nextButtonContent: "Next",
                    pageLength: 30,
                });
            });
        </script>
        <style type="text/css">
            .total p{
                color: #000;
                text-align: center;
                font-weight: bold;
                font-size: 1.2em;
            }
            .list{
                color: #000;
            }
            .conveyance{
                color: #000;
            }
            .ui{
                color: #000;
            }
            .form-control{
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php include('nav.php');?> 
            </div><br/><br/><br/><br/>

            <div class="row table-padding">
                <h3 class="text-center list">Order List Of <?php echo $name;?> (Factory)</h3>
                <div class="col-md-12">
                   <div class="col-md-7">
                    </div>
                    <div class="col-md-offset-1 col-md-4 text-right">
                         <h3 class="text-center search">What are you looking for?</h3>
                        <input id="searchInput" name="search" class="form-control" placeholder="Searching..."/>
                    </div></br> 
                </div>
                <div class="col-md-12">
                    <table class ="ui table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Invoice No</th>
                                <th>Product/Particular</th>
                                <th>Credit</th>
                                <th>Debit</th>
                                <th>Balance</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                             $balance = 0;
                                foreach($list as $lists){
                                $entry_date =  $lists['entry_date'];
                                $invoice_no =  $lists['invoice_no'];
                                $product =  $lists['product'];
                                $credit_amount =  $lists['credit_amount'];
                                $debit_amount =  $lists['debit_amount'];
                                $balance = $balance+$credit_amount-$debit_amount;
                               ?> 

                            <tr>
                                    <td><?php echo $entry_date;?></td>

                                    <td><?php echo $invoice_no;?></td>
                                    
                                    <td><?php echo $product;?></td>

                                    <td><?php echo $credit_amount;?></td>

                                    <td><?php echo $debit_amount;?></td>

                                    <td><?php echo $balance;?></td> 
                        
                                    
                                    <td>
                                        <?php 

                                           $eid = $lists['client_id'] ;

                                        ?>
                                        <div class="btn-group">

                                        <button type="button" class="btn btn-success btn-xs" onclick="location.href='<?php echo base_url();?>factory/order_report_details/<?php echo $lists['id'] ;?>/<?php echo $eid;?>';">Details</button>
                                           
                                            <button type="button" class="btn btn-warning btn-xs" onclick="location.href='<?php echo base_url();?>factory/order_report_edit/<?php echo $lists['id'] ;?>/<?php echo $eid;?>';">Edit</button>
                                            <!-- <button type="button" class="btn btn-danger btn-xs" onclick="location.href='<?php echo base_url();?>factory/order_report_delete/<?php echo $lists['id'] ;?>/<?php echo $eid;?>';">Delete</button> -->
                                        </div>
                                    </td>
                                </tr>


                        <?php  }  ?>  
                            
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3 col-sm-3 col-lg-3 well total">
                            <p>Total Credit : <?php echo $credit_sum; ?></p>
                        </div>
                        <div class="col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-md-3 col-sm-3 col-lg-3 well total">
                            <p>Total Debit : <?php echo $debit_sum; ?></p>
                        </div>

                        <div class="col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-md-3 col-sm-3 col-lg-3 well total">
                            <p>Total Balance : <?php echo $credit_sum-$debit_sum; ?></p>
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
            </div> 

           
            
            <div class="container-fluid">
                <div class="row">
                    <footer class="text-right footer">2016 <span> &copy </span> Copyright by <a target="_blank" href="http://winskit.com/">Winskit</a></footer>
                </div>
            </div>
        
        
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
        <!-- <script src="<?php echo base_url();?>assets/js/table.js"></script> -->
         <script src="<?php echo base_url();?>assets/js/html2canvas.js"></script>
        <script src="<?php echo base_url();?>assets/js/filterForTable.js"></script>
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-36251023-1']);
          _gaq.push(['_setDomainName', 'jqueryscript.net']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
          $('table').filterForTable();
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-36251023-1']);
          _gaq.push(['_setDomainName', 'jqueryscript.net']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </body>
</html>


