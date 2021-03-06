
<!DOCTYPE html>
<?php //include_once 't.php';?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Telekhong</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url()?>store">Telekhong</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                <a href="#">Read All New Messages</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-desktop"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <a href="#">Store 1 <span class="label label-success "style="margin-left :50px">Avaliable</span></a>
                            </li>
                            <li>
                                <a href="#">Store 2 <span class="label label-success"style="margin-left :50px">Avaliable</span></a>
                            </li>
                            <li>
                                <a href="#">Store 3 <span class="label label-success"style="margin-left :50px">Avaliable</span></a>
                            </li>
                            <li>
                                <a href="#">Store 4 <span class="label label-warning"style="margin-left :50px">Blocked</span></a>
                            </li>

                            <li class="divider"></li>
                            <li>
                                <a href="#">View All</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="<?=base_url()?>index.php/dashboardowner"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li >
                            <a href="<?=base_url()?>index.php/storeowner"><i class="fa fa-fw fa-desktop"></i> Store</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/statisticsowner"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/paymentowner"><i class="fa fa-fw fa-table"></i> Payment</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/contact"><i class="fa fa-fw fa-edit"></i> Contact</a>
                        </li>
                        
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-wrench"></i> Manage <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="<?=base_url()?>index.php/manageqrowner">Manage QRCode</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/packageowner"><i class="fa fa-fw fa-arrows-v"></i> Package</a>
                        </li>
                        

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <center><h3>Create Information</h3></center><hr>

                <?php echo form_open_multipart("createinfo/create"); ?>
                <!-- store name -->
                <div class="col-lg-6" style="text-align:right;" >Information Name :</div>
                <div class="col-lg-6"><input type="text" name="name" class="form-control" placeholder="Information name" style="width:300px"></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- Information Description -->
                <div class="col-lg-6" style="text-align:right;" >Description :</div>
                <div class="col-lg-6"><textarea class="form-control" name="desc" rows="3" style="width:250px" placeholder="Description"></textarea></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- Catagory -->
                <div class="col-lg-6" style="text-align:right;" >Catagory :</div>
                <div class="col-lg-6">
                <select class="form-control" name="cat" style="width:300px ;">
                    <option hidden>Select Catagory</option>
                    <option value="food">Food</option>
                    <option value="fashion">Fashion</option>
                    <option value="sport">Sport</option>
                    <option value="entertain">Entertainment</option>
                    <option value="book">Book</option>
                    <option value="it">Technology</option>
                    <option value="healty">Healty</option>
               </select>
           </div>
           <div class="col-lg-12" style="margin-top:30px;"></div>


           <!-- Begin Date -->
           <div class="col-lg-6" style="text-align:right;" >Begin Date :</div>
           <div class="col-lg-6">
            <select class="form-control" name="beda" style="width:80px ; display : inline;">
                <option hidden>Day</option>
                <?php 
                for ($x = 1; $x <= 31; $x++) {
                    echo "<option value='".$x."'>".$x."</option>";
                } 
                ?>
            </select>
            &nbsp
            <select class="form-control" name="bemo" style="width:125px ; display : inline;">
                <option hidden>Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            &nbsp
            <select class="form-control" name="beye" style="width:90px ; display : inline;">
                <option hidden>Year</option>
                <?php 
                for ($x = date("Y"); $x <= date("Y")+5; $x++) {
                    echo "<option value='".$x."'>".$x."</option>";
                } 
                ?>
            </select>
        </div>
        <div class="col-lg-12" style="margin-top:30px;"></div>


        <!-- Expire Date -->
        <div class="col-lg-6" style="text-align:right;" >Expire Date :</div>
        <div class="col-lg-6">
            <select class="form-control" name="exda" style="width:80px ; display : inline;">
                <option hidden>Day</option>
                <?php 
                for ($x = 1; $x <= 31; $x++) {
                    echo "<option value='".$x."'>".$x."</option>";
                } 
                ?>
            </select>
            &nbsp
            <select class="form-control" name="exmo" style="width:125px ; display : inline;">
                <option hidden>Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            &nbsp
            <select class="form-control" name="exye" style="width:90px ; display : inline;">
                <option hidden>Year</option>
                <?php 
                for ($x = date("Y"); $x <= date("Y")+5; $x++) {
                    echo "<option value='".$x."'>".$x."</option>";
                } 
                ?>
            </select>
        </div>
        <div class="col-lg-12" style="margin-top:30px;"></div>

        <!-- Info picture -->
        <div class="col-lg-6" style="text-align:right;" >Information Picture :</div>
        <div class="col-lg-6">
            <input type="file" id="image" name="picture"  /> 
        </div>
         <div class="col-lg-12" style="margin-top:30px;"></div>

        <div class="col-lg-6" style="text-align:right;" >Do you want QR Code? :</div>
        <div class="col-lg-6">
            <label>
                <input type="checkbox" name="qr" value="1"> QR Code
            </label>
        </div>
        
        <div class="col-lg-12" style="text-align:center;margin-top:30px; margin-down: 30px" >

            <?php echo anchor("storeowner", "<button type='button' class='btn btn-danger'>Cancle</button>"); ?>
            <input class="btn btn-success" type="submit" name="btsave" value="Create" style="margin-left: 30px">

        </div>		
        <?php echo form_close();?>

        <div>
           <br>
       </div>

       <center>
        <div class="row">
            <div class="col-lg-12">
            <div class="col-lg-12" style="margin-top: 40px">
               <ol class="breadcrumb">
                 <li>You can contact us in this page </li>
                 <li> facebook : www.facebook.com/promotion2you</li>
                 <li> tel.08X-XXX-XXXX KingMongkutt's University of technology thonburi</li>
             </ol>
         </div>
     </div>
 </center>
 <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>


</body>

</html>
