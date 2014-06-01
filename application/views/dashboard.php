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
						    <!--------------  messssages-----------------------------------------------------------------------------------------------   پیام ها  -->
						<li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-success"><?php echo $information['private-num']+$information['public-num'];?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <?php 
                                        if($information['public'] != false)
                                        foreach($information['public'] as $inform):
                                        ?>
                                        <li>
                                            <a href="#">
                                                <h4>
                                                    <?php echo $inform['title'];?>
                                                    <small><i class="fa fa-clock-o"></i><?php echo normal_view($inform['date']); ?></small>
                                                </h4>
                                                <p><?php echo $inform['content'];?></p>
                                            </a>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <?php 
                                        if($information['private'] != false)
                                        foreach($information['private'] as $inform):
                                        ?>
                                        <li>
                                            <a href="#">
                                                <h4>
                                                    <?php echo $inform['title'];?>
                                                    <small><i class="fa fa-clock-o"></i><?php echo normal_view($inform['date']); ?></small>
                                                </h4>
                                                <p><?php echo $inform['content'];?></p>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
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
                                    <form action="<?php echo site_url('dashboard/user_edit');?>" method="post">
                        
						<div class="form-group">
						<?php if(isset($user_edit_error)):?>
                                        <div class="alert alert-danger">
                                        <p><?php echo $user_edit_error;?></p>
                                        </div>
                       <?php endif;?>
                                        <label>نام</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" name="name" class="form-control"/>
											
                                        </div><!-- /.input group -->
										<label>شماره موبایل</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" name="mobile" class="form-control"/>
											
                                        </div><!-- /.input group -->
										<label>پسورد قدیم</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" name="password" class="form-control"/>
											
                                        </div><!-- /.input group -->
										<label>پسورد جدید</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" name="new_password" class="form-control"/>
											
                                        </div><!-- /.input group -->
										<label>تکرار پسورد جدید</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" name="new_password_confirm" class="form-control"/>
                                        </div><!-- /.input group -->
										
                                    </div><!-- /.form group -->
					<button type="submit" class="btn btn-primary">Submit</button>						
                    </form>

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
                                       <?php echo $user['turn_over'];?><sup style="font-size: 20px">%</sup>
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
                                        <?php echo $user['credit'];?>
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
                                        <?php echo $user['name'];?>
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
<?php 
$i=1;
foreach($request as $r):
?>
<?php if($i%3 == 1) echo "<div class=\"row\">";?>
                    <div class="col-md-4">
                            <!-- Danger box -->
                            <div class="box box-solid box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">وضعیت سفارش <?php echo $r['RID'];?></h3>
                                    <div class="box-tools pull-left">
                                        <button class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <?php echo "نام طراح :".$r['designer_name'];?>
                                 <hr/>
                                 	وضعیت :
                                  	<?php if($r['status'] == "j") echo "تازه باز شده"?>
                                  	<?php if($r['status'] == "a") echo "تایید شده"?>
									<?php if($r['status'] == "p") echo "تکمیل پرداخت"?>
									<?php if($r['status'] == "d") echo "تکمیل شده پرداخت نشده"?>                                  	
                                  <hr/>
                                  	<a href="#"></a>
                                  <hr/>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->    
  <?php if($i%3 == 0) echo "</div>";?>
<?php $i++;?>
<?php endforeach;?>
<?php if($i%3 != 1) echo "</div>";?>
                    
					<!--------------------------------------------------------------------------------------->
				<div class="alert alert-danger" style="margin-bottom: 0!important;">
                        <i class="fa fa-info"></i>
                        <b>Note:</b> This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                    </div>
					</br>
					
					<!----------------------------------------------------------------------    فرم ها -------------------------------------->
					<form action="<?php echo site_url('dashboard/add_request'); ?>" method = "post" enctype="multipart/form-data">
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
						   <!-- -----------جزئیات المان های طرح ------------------------------------------------------------>
						   
                                 <div class="box box-primary">
                                <div class="box-header">
                                    <i class="ion ion-clipboard"></i>
                                    <h3 class="box-title"> جزئیات المان های طرح </h3>
                                    
                                </div><!-- /.box-header -->
                                <div class="box-body">
								 <p class="alert alert-warning" >جزییات رو بگو</p>
								
                                    <ul class="todo-list">
                                        <label>نورپردازی</label>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>                                                                          
                                            <label>
                                            <input type="radio" name="lighting" class="flat-red" value="1" checked/>داشته باشد                                     
                                           </label>
                                           <label>
                                           <input type="radio" name="lighting" class="flat-red" value="2" />نداشته باشد                                      
                                           </label> 
                                           <label>
                                           <input type="radio" name="lighting" class="flat-red" value="3" />نظر طراح                                      
                                           </label>                                   
                                           </li>
										
										 <label>ارک سقفی</label>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>                                                                          
                                            <label>
                                            <input type="radio" name="arc" class="flat-red" value="1" checked/>داشته باشد                                     
                                           </label>
                                           <label>
                                           <input type="radio" name="arc" class="flat-red" value="2" />نداشته باشد                                      
                                           </label> 
                                           <label>
                                           <input type="radio" name="arc" class="flat-red" value="3" />نظر طراح                                      
                                           </label>                                   
                                           </li>
											<label>اپن حجمی</label>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>                                                                          
                                            <label>
                                            <input type="radio" name="hajmi" class="flat-red" value="1" checked/>داشته باشد                                     
                                           </label>
                                           <label>
                                           <input type="radio" name="hajmi" class="flat-red" value="2"/>نداشته باشد                                      
                                           </label> 
                                           <label>
                                           <input type="radio" name="hajmi" class="flat-red" value="3"/>نظر طراح                                      
                                           </label>                                   
                                           </li>
                                           <label>اپن جزیره ای</label>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>                                                                          
                                            <label>
                                            <input type="radio" name="jazire" class="flat-red" value="1" checked/>داشته باشد                                     
                                           </label>
                                           <label>
                                           <input type="radio" name="jazire" class="flat-red" value="2"/>نداشته باشد                                      
                                           </label> 
                                           <label>
                                           <input type="radio" name="jazire" class="flat-red" value="3"/>نظر طراح                                      
                                           </label>                                   
                                           </li>								
										
										   <label> نوع سینک</label>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>                                                                          
                                            <label>
                                            <input type="radio" name="sink" class="flat-red" value="1" checked/>توکار                                  
                                           </label>
                                           <label>
                                           <input type="radio" name="sink" class="flat-red" value="2"/>روکار                                    
                                           </label>                                    
                                           </li>
										   <label> کف </label>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>                                                                          
                                            <label>
                                            <input type="radio" name="kaf" class="flat-red" value="1" checked/>پارکت
                                           </label>
                                           <label>
                                           <input type="radio" name="kaf" class="flat-red" value="2"/>سرامیک                                     
                                           </label>                                    
                                           </li>
                                            <label> تجهیزات </label>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>                                                                          
                                            <label>
                                            <input type="checkbox" value="" name="side"/>                                            
                                            <!-- todo text -->
                                            <span class="text">یخچال ساید بای ساید </span>                                
                                           </label>
										    <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
											<label>
                                            <input type="checkbox" value="" name="gaz"/>                                            
                                            <!-- todo text -->
                                            <span class="text">گاز رومیزی </span>                                
                                           </label>
<span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>										   
                                            <label>
											  
                                            <input type="checkbox" value="" name="fer"/>                                            
                                            <!-- todo text -->
                                            <span class="text">فر</span>                                
                                           </label>
										     
											 <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>  
                                            <label>
                                            <input type="checkbox" value="" name="microfer"/>
                                            <span class="text">ماکروفر </span>  
                                             </label>
											  
											  <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>  
											  <label>
                                            <input type="checkbox" value="" name="mashinl"/>                                            
                                           
                                            <span class="text">ماشین لباس شویی</span>                                
                                           </label>
<span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>  										   
                                         	 <label>
                                            <input type="checkbox" value="" name="mashinz"/>                                            
                                            <!-- todo text -->
                                            <span class="text">ماشین ظرف شویی</span>                                
                                           </label>									   
                                           </li>                                 
                                    </ul>
								
                                </br>
                            		
                                
							</div><!-- /.box -->



                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
						
                       <!-- -----------آپلود  ------------------------------------------------------------>
                        <section class="col-lg-6 connectedSortable">
							<div class="box box-primary">
                                <div class="box-header">
                                <i class="ion ion-clipboard"></i>
                                    <h3 class="box-title">آپلود نقشه </h3>
                                </div><!-- /.box-header -->

                                <!-- form start -->
                               
                                    <div class="box-body">
                                        
                                            <p class="alert alert-warning" >نقشرو آپلود کن</p>
                                            
                                        
                                     
                                        <div class="form-group">
										 <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <label for="exampleInputFile">در صورتی که  می خواهید یک عکس را ارسال کنید از دکمه زیر استفاده کنید</label>
                                            <input input type="file" name = "userfile" class="form-control" placeholder="">
                                            
                                        </div>
										
										</br> </hr>
										<div>
                                            <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                       </br>  
                                       <label> انتخاب طراح</label></br>
                                       
                                                                                                                 
                                            <label>
                                            <input type="radio" name="tarrah" class="flat-red" value="1" checked/>طراح1
                                           </label>
                                           <label>
                                           <input type="radio" name="tarrah" class="flat-red" value="2"/>طراح2                                     
                                           </label>
                                           <label>
                                            <input type="radio" name="tarrah" class="flat-red" value="3" />طراح3
                                           </label>                                    
                                           
                                    </div><!-- /.box-body -->

                                    
                                
                            </div><!-- /.box -->
							 
                            
							

                        </section>
						<!--  انتخاب رنگ و چوب----------------------------------------------------------------------------------->
				<section class="content">
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='box box-info'>
                                <div class='box-header'>
								    <i class="ion ion-clipboard"></i>
                                    <h3 class='box-title'>انتخاب نوع چوب و رنگ <h3>
                                    </div><!-- /.box-header -->
								 <p style="margin-right:20px" class="alert alert-warning" >جزییات رنگ رو مشخص کن لاشی</p>
								<div style="margin-right:20px">
								<span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>  
								<label> نوع چوب</label> 
                                    <div class="form-group">
									
                                        <label>
                                            <input type="radio" name="wood_type" class="flat-red" value="1" checked/>
                                              هایگلاس
                                        </label>
										<label>
                                         <input type="radio" name="wood_type" class="flat-red" value="2"/>
                                              عادی
                                        </label>
                                    </div>
									<span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>  
									<label> ترکیب رنگ</label> 
                                    <div class="form-group">
									
                                        <label>
                                            <input type="radio" name="tak_rang" class="flat-red" value="1" checked/>
                                         دو رنگ
                                        </label>
										<label>
                                            <input type="radio" name="tak_rang" class="flat-red" value="2"/>
                                         تک رنگ
                                        </label>
                                    </div>
                                    <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                        <label>
                                        <!-- ##TAINJA -->
                                            <input type="checkbox" name="csbd" class="flat-red" />
                                         انتخاب رنگ با طراح
                                                                                 </label>
										
                                   </br>
									<span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>  
									<label>رنگ اول</label> 
                                    <div class="form-group">
									
                                        <label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
<input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
										<label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
										<label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
										<label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
                                    </div>
<span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>  
									<label>رنگ دوم</label> 
                                    <div class="form-group">
									
                                        <label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
										<label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
										<label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                           <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
										<label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
                                    </div>
                                         
										<span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>  
										<label>کاشی بین کابین</label> 
                                    <div class="form-group">
									
                                        <label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
										<label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
										<label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                           <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
										<label>
                                         <input type="radio" name="r3" class="flat-red" checked/>
					                     <img src="<?php echo base_url('assets/img/p1.png');?>" alt="" />
                                        </label>
										<label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                             <img src="<?php echo base_url('assets/img/p2.png');?>" alt="" />
                                        </label>
                                    </div>
                                         
                                            </br>
											<div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
								
								
                            </div><!-- /.box -->
                        </div><!-- /.col-->
                    </div><!-- ./row -->
                </section>

				</form>
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