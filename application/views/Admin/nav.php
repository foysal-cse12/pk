<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="home.php">P<span>K</span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url();?>home/index">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Banalce Sheet <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>office/office_view_report">Office Balance Sheet</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>factory/factory_view_report">Factory Balance Sheet</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Order Details <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>office/office_order">Office Order Details</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>factory/factory_order">Factory Order Details</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>home/lc_list">LC</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>factory/inventory_list">Inventory</a></li>
                        <li class="divider"></li>
                        <!-- <li><a href="#">Something else here</a></li> -->
                        <!-- <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li> -->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">User <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="#">Profile</a></li> -->
                        <li class="divider"></li>
                         <li><a href="<?php echo base_url();?>home/change_password">Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>home/logout">Logout</a></li>  
                    </ul>
                </li>
            </ul>
            <!-- <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle user" data-toggle="dropdown">User <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Porfile</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
                </ul>
                <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="reset" class="btn btn-default">
                            <span class="fa fa-remove">
                                <span class="sr-only">Close</span>
                            </span>
                        </button>
                        <button type="submit" class="btn btn-default">
                            <span class="fa fa-search">
                                <span class="sr-only">Search</span>
                            </span>
                        </button>
                    </span>
                </div>
                </form> -->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>