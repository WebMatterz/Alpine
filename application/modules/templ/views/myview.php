<?php
if(isset($_SESSION['username'])) {
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Responsive Admin Dashboard Template">
		<meta name="keywords" content="admin,dashboard">
		<meta name="author" content="">
		<!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!-- Title -->
		<title><?php print $title; ?></title>
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/png" href="<?php print base_url(); ?>assets/images/lirs-logo.jpg" style="width:15px; height:15px;"/>

		<!-- Styles -->
		<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/fontawesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/jquery-ui-1.8.18.custom.css" rel="stylesheet">



		<!-- Theme Styles -->
		<link href="<?php echo base_url(); ?>assets/css/site.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/style2.css" rel="stylesheet">


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<!-- Page Container -->
		<div class="page-container">
			<!-- Page Sidebar -->
			<div class="page-sidebar">
				<a class="logo-box" href="<?php echo base_url(); ?>dashboard"><span><h4><b>Informal Sector</b></h4></span>
					<i class="icon-close" id="sidebar-toggle-button-close"></i></a>
					<div class="page-sidebar-inner">

						<div class="profile-picture" style="padding:10px 10px;">
							<div class="stats-label text-color">
								<span><?php echo strtolower($_SESSION['displayname']); ?>
									<?php
									if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
										$ip = $_SERVER['HTTP_CLIENT_IP'];
										echo $ip;
									} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
										$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
										echo $ip;
									} else {
										$ip = $_SERVER['REMOTE_ADDR'];
										echo $ip;
									}

									?>
								</span>
							</div>
						</div>
						<div class="page-sidebar-menu">
							<ul class="accordion-menu">
								<li class="active-page">
									<a href="<?php echo base_url()?>dashboard/index">
										<span> Dashboard</span>
									</a>
								</li>

								<?php
								if(isset($_SESSION['usercode']) == NULL)
								{
									echo '<li><center style="padding:10px;">Your account is pending approval</center></li>';
								}
								else
								{
									sort($_SESSION['AAA']);
									foreach ($_SESSION['AAA'] as $value) { ?>
										<li>
											<a href="javascript:void(0);"><span class="fa fa-arrow"></span>
												<span><i class="fa fa-bars">&nbsp;&nbsp;</i><?php  print ucfirst($value); ?> &nbsp; <i class="fa fa-angle-right"></i></span>
											</a>
											<ul class="sub-menu">
												<?php
												sort($_SESSION['BBB']);
												foreach ($_SESSION['BBB'] as $value1) {
													$str = explode(":", $value1) ;
													$menu = $str[3];
													if($value==$menu) {
														$actn = $str[0];
														$displayname = $str[1];
														$ctrller = $str[2];
														?>
														<li> <?php echo anchor("$ctrller/$actn", "$displayname", array('class' => '', 'style' => '')); ?> </li>
														<?php
													}
												} ?>
											</ul>
										</li>
									<?php }
								}?>
								<li>
									<a href="<?php print base_url(); ?>auth/logout"> <i class="fa fa-power-off"></i>  Logout</a>
								</li>

							</ul>
						</div>
					</div>
				</div><!-- /Page Sidebar -->

				<!-- Page Content -->
				<div class="page-content">

					<!-- Page Header -->
					<div class="page-header">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<div class="logo-sm">
										<a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
										<a class="logo-box" href="index.html"><span>Informal Sector</span></a>
									</div>
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<i class="fa fa-angle-down"></i>
									</button>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->

								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li class="collapsed-sidebar-toggle-inv"><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
										<!-- <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li> -->
									</ul>
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
											<ul class="dropdown-menu dropdown-lg dropdown-content">
												<li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
												<li class="slimscroll dropdown-notifications">
													<ul class="list-unstyled dropdown-oc">
														<li>
															<a href="#"><span class="notification-badge bg-info"><i class="fa fa-at"></i></span>
																<span class="notification-info">
																	<span class="notification-info"><b><?php echo $_SESSION['displayname']; ?></b> </span>
																	<small class="notification-date">06:07</small>
																</span></a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
							</nav>
						</div><!-- /Page Header -->
						<!-- Page Inner -->
						<div class="page-inner">
							<?php
							$this->load->view($module . '/' . $view_file);
							?>
						</div><!-- Main Wrapper -->
						<div class="page-footer">
							<p>Informal Sector powered by LIRS ICT</p>
						</div>
					</div><!-- /Page Inner -->
				</div><!-- /Page Content -->
			</div><!-- /Page Container -->

			<!-- Javascripts -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/myScript.js"></script>
	</body>
	</html>
	<?php
}
else {
	echo '<script>document.location.href="'.base_url().'auth/logout";</script>';
}
?>
