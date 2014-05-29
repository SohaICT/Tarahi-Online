<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tarahi-Online</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" >
        <!-- font Awesome -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" >
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" >
        <!-- Morris chart -->
        <link href="<?php echo base_url('assets/css/morris/morris.css');?>" rel="stylesheet" type="text/css" >
        <!-- jvectormap -->
        <link href="<?php echo base_url('assets/css/jvectormap/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" >
        <!-- fullCalendar -->
        <link href="<?php echo base_url('assets/css/fullcalendar/fullcalendar.css');?>" rel="stylesheet" type="text/css">
        <!-- Daterange picker -->
        <link href="<?php echo base_url('assets/css/daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" >
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.css');?>" rel="stylesheet" type="text/css" >

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php site_url();?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                طراحی آنلاین
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-------------------------------------------------------------------------------------------------------------------   منوی بالای بالا -->
                        <li class="dropdown messages-menu">
                           <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i> افزایش اعتبار</a>
                            
                        </li>
						    <!-------------------------------------------------------------------------------------------------------------   پیام ها  -->
						<li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success"><?php echo $information['private-num']+$information['public-num'];?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                            <h4>title</h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url('assets/img/avatar2.png');?>" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url('assetsimg/avatar2.png');?>" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- -----------------------------------------------------------------------------------------------------notifications-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning"><?php echo $information['private-num']+$information['public-num'];?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        
                       
<!----------------------------------------------------------------    مشخصات کاربر----------------------------------->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>نام کاربری <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <p>
                                        <?php echo $user['name']?>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <form action="#" method="get">
                        
						<div class="form-group">
                                        <label>Color picker with addon:</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" class="form-control"/>
											
                                        </div><!-- /.input group -->
										<label>Color picker with addon:</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" class="form-control"/>
											
                                        </div><!-- /.input group -->
										<label>Color picker with addon:</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" class="form-control"/>
											
                                        </div><!-- /.input group -->
										<label>Color picker with addon:</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" class="form-control"/>
											
                                        </div><!-- /.input group -->
										
                                    </div><!-- /.form group -->
						
                    </form>
					<button type="submit" class="btn btn-primary">Submit</button>
                                </li>
                            </ul>
                        </li>
						<!--------------------------------------------------------------------------------------------------->
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
             		<!---------------------------------------------------------------------------         راهنما   ------------------------>
                <section class="sidebar">
                   <div class="row">                        
                        <div class="col-md-12">
                            <!-- The time line -->
                            <ul class="timeline">
                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-red">
                                        10 Feb. 2014
                                    </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-envelope bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you and email</h3>
                                        <div class="timeline-body">
                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                            quora plaxo ideeli hulu weebly balihoo...
                                        </div>
                                        <div class='timeline-footer'>
                                            <a class="btn btn-primary btn-xs">Read more</a>
                                            <a class="btn btn-danger btn-xs">Delete</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-user bg-aqua"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                                        <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-comments bg-yellow"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                                        <div class="timeline-body">
                                            Take me to your leader!
                                            Switzerland is small and neutral!
                                            We are more like Germany, ambitious and misunderstood!
                                        </div>
                                        <div class='timeline-footer'>
                                            <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-green">
                                        3 Jan. 2014
                                    </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-camera bg-purple"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                                        <div class="timeline-body">
                                            <img src="http://placehold.it/150x100" alt="..." class='margin' />
                                            <img src="http://placehold.it/150x100" alt="..." class='margin'/>
                                            <img src="http://placehold.it/150x100" alt="..." class='margin'/>
                                            <img src="http://placehold.it/150x100" alt="..." class='margin'/>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                
                                <!-- END timeline item -->
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                </li>
                            </ul>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                		<!--------------------------------------------------------------------------               منوی افقی بالا      ------------------------->
                <section class="content-header">
                    <h1 align="left">
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
						<!--------------------------------------------------------------------------------------         نکته  ------------->
				<div class="pad margin no-print">
                    <div class="alert alert-info" style="margin-bottom: 0!important;">
                        <i class="fa fa-info"></i>
                        <b>Note:</b> This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                    </div>
                </div>
                 
                <!-- Main content -->
                <section class="content">

                    <!---------------------------------------------------------------------               کاشی ها   ---------------------------------- -->
                   
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        53<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        بن تخفیف شما
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                 اطلاعات بیشتر <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						<div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                       اعتبار اکانت شما
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    اطلاعات بیشتر <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						 <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        ثبت شده
                                    </h3>
                                    <p>
                                        وضعیت سفارش
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                   اطلاعات بیشتر <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h4>
                                        user name
                                    </h4>
                                    <p>
                                       اطلاعات کاربری
                                    </p>
									<p></p></br>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    اطلاعات بیشتر <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        
                    </div><!-- /.row -->
					<!---------------------------------------------------------------------->
					<!------------------------------------------------------------------------------------------------------ گالری و ضعیت طرح >
					 
                    <!-- Solid boxes -->
                    <div class="row">
                 

                        <div class="col-md-8">
                            <!-- Primary box -->
                            <div class="box box-solid box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">نمونه های اولیه </h3>
                                    <div class="box-tools pull-left">
                                        <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                      
                                    </div>
                                </div>
                                <div class="box-body">
                                  
                                    <div id="simple_gallery" class="box-content">
				<a class="fancybox" rel="gallery1" href="http://farm6.staticflickr.com/5471/9036958611_fa1bb7f827_b.jpg" title="Westfield Waterfalls - Middletown CT Lower (Graham_CS)">
					<img src="<?php echo base_url('assets/img/9036958611_fa1bb7f827_m.jpg');?>" alt="" />
				</a>
				<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
					<img src="<?php echo base_url('assets/img/9041440555_2175b32078_m.jpg');?>" alt="" />
				</a>
				<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
					<img src="<?php echo base_url('assets/img/8985207189_01ea27882d_m.jpg');?>" alt="" />
				</a>
				<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
					<img src="<?php echo base_url('assets/img/8962691008_7f489395c9_m.jpg');?>" alt="" />
				</a>
				
				
			</div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                    <div class="col-md-4">
                            <!-- Danger box -->
                            <div class="box box-solid box-danger">
                                <div class="box-header">
                                    <h3 class="box-title"> وضعیت سفارش</h3>
                                    <div class="box-tools pull-left">
                                        <button class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.box-danger</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer
										 amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->    
                    </div><!-- /.row -->

                    
					<!--------------------------------------------------------------------------------------->
				
					
					<!----------------------------------------------------------------------    فرم ها -------------------------------------->
					<div class="row">
                        <div class="col-md-6">

                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Input masks</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Date masks:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>US phone mask:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Intl US phone mask:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- IP mask -->
                                    <div class="form-group">
                                        <label>IP mask:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-laptop"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Color & Time Picker</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                        <label>Color picker:</label>                                         
                                        <input type="text" class="form-control my-colorpicker1"/>
                                    </div><!-- /.form group -->

                                    <!-- Color Picker -->
                                    <div class="form-group">
                                        <label>Color picker with addon:</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" class="form-control"/>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- time Picker -->
                                    <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                            <label>Time picker:</label>
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control timepicker"/>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col (left) -->
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Date picker</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Date range:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservation"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Date and time range:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservationtime"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Date range button:</label>
                                        <div class="input-group">
                                            <button class="btn btn-default pull-right" id="daterange-btn">
                                                <i class="fa fa-calendar"></i> Date range picker
                                                <i class="fa fa-caret-down"></i>
                                            </button>
                                        </div>
                                    </div><!-- /.form group -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <!-- iCheck -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">iCheck - Checkbox & Radio Inputs</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Minimal style -->

                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="minimal" checked/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal"/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal" disabled/>
                                            Minimal skin checkbox
                                        </label>
                                    </div>

                                    <!-- radio -->
                                    <div class="form-group">                                    
                                        <label>
                                            <input type="radio" name="r1" class="minimal" checked/>
                                        </label>
                                        <label>
                                            <input type="radio" name="r1" class="minimal"/>                                                    
                                        </label>
                                        <label>
                                            <input type="radio" name="r1" class="minimal" disabled/>
                                            Minimal skin radio
                                        </label>
                                    </div>

                                    <!-- Minimal red style -->

                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="minimal-red" checked/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal-red"/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal-red" disabled/>
                                            Minimal red skin checkbox
                                        </label>
                                    </div>

                                    <!-- radio -->
                                    <div class="form-group">                                    
                                        <label>
                                            <input type="radio" name="r2" class="minimal-red" checked/>
                                        </label>
                                        <label>
                                            <input type="radio" name="r2" class="minimal-red"/>                                                    
                                        </label>
                                        <label>
                                            <input type="radio" name="r2" class="minimal-red" disabled/>
                                            Minimal red skin radio
                                        </label>
                                    </div>

                                    <!-- Minimal red style -->

                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="flat-red" checked/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="flat-red"/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="flat-red" disabled/>
                                            Flat red skin checkbox
                                        </label>
                                    </div>

                                    <!-- radio -->
                                    <div class="form-group">                                    
                                        <label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                        </label>
                                        <label>
                                            <input type="radio" name="r3" class="flat-red"/>                                                    
                                        </label>
                                        <label>
                                            <input type="radio" name="r3" class="flat-red" disabled/>
                                            Flat red skin radio
                                        </label>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    Many more skins available.
                                </div>
                            </div><!-- /.box -->
                        </div><!-- /.col (right) -->
                    </div><!-- /.row --> 
					
					<!----------------------------------------------------------------------------->
					
					

                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable"> 
                           <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Quick Example</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" id="exampleInputFile">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Check me out
                                            </label>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                                
                                
                           
                            
                           
                           
                                                
                          

                            <!-- quick email widget -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-envelope"></i>
                                    <h3 class="box-title">Quick Email</h3>
                                    
                                    
                                </div>
                                <div class="box-body">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="emailto" placeholder="Email to:"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                                        </div>
                                        <div>
                                            <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer clearfix">
                                    <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>

                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 connectedSortable">
                                                 

                            <!-- TO DO List -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="ion ion-clipboard"></i>
                                    <h3 class="box-title">To Do List</h3>
                                    <div class="box-tools pull-right">
                                        <ul class="pagination pagination-sm inline">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <ul class="todo-list">
                                        <li>
                                            <!-- drag handle -->
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>  
                                            <!-- checkbox -->
                                            <input type="checkbox" value="" name=""/>                                            
                                            <!-- todo text -->
                                            <span class="text">Design a nice theme</span>
                                            <!-- Emphasis label -->
                                            <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                                            <!-- General tools such as edit or delete-->
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>                                            
                                            <input type="checkbox" value="" name=""/>
                                            <span class="text">Make the theme responsive</span>
                                            <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <input type="checkbox" value="" name=""/>
                                            <span class="text">Let theme shine like a star</span>
                                            <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <input type="checkbox" value="" name=""/>
                                            <span class="text">Let theme shine like a star</span>
                                            <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <input type="checkbox" value="" name=""/>
                                            <span class="text">Check your messages and notifications</span>
                                            <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <input type="checkbox" value="" name=""/>
                                            <span class="text">Let theme shine like a star</span>
                                            <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix no-border">
                                    <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                                </div>
                            </div><!-- /.box -->
							 
                            
							

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

           <!---------------------------------------------------------------------------------------------------------  فرم افزایش اعتبار -->
        <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                     
                        <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Compose New Message</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">TO:</span>
                                    <input name="email_to" type="email" class="form-control" placeholder="Email TO">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">CC:</span>
                                    <input name="email_to" type="email" class="form-control" placeholder="Email CC">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">BCC:</span>
                                    <input name="email_to" type="email" class="form-control" placeholder="Email BCC">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="email_message" class="form-control" placeholder="Message" style="height: 120px;"></textarea>
                            </div>
                            <div class="form-group">                                
                                <div class="btn btn-success btn-file">
                                    <i class="fa fa-paperclip"></i> Attachment
                                    <input type="file" name="attachment"/>
                                </div>
                                <p class="help-block">Max. 32MB</p>
                            </div>

                        </div>
                        <div class="modal-footer clearfix">

                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>

                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Send Message</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url('assets/js/jquery-ui-1.10.3.min.js');?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/morris.min.js');?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url('assets/js/plugins/sparkline/jquery.sparkline.min.js');?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url('assets/js/plugins/fullcalendar/fullcalendar.min.js');?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url('assets/js/plugins/jqueryKnob/jquery.knob.js');?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js');?>" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/js/AdminLTE/app.js');?>" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('assets/js/AdminLTE/dashboard.js');?>" type="text/javascript"></script>        

    </body>
</html>