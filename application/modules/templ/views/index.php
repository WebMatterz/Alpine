<!DOCTYPE html>
<html>

<!-- #BeginTemplate "template.dwt" -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Alpine Holiday Composer, Alpinehol, Holiday, info@alpinehol.com" />
<meta name="keywords" content="alpine, alpinehol, holiday, traveller" />
<title> <?php print $title; ?> </title>
<link href="<?php echo base_url(); ?>assets/styles/fonts.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/styles/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url(); ?>assets/styles/font-awesome.css" rel="stylesheet" type="text/css" />
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <link href="<?php echo base_url(); ?>assets/styles/myglyphicons2.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/styles/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/styles/site.css" class="type/text" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/styles/style2.css" class="type/text" rel="stylesheet" />

<!-- #BeginEditable "styles" -->


<!-- #EndEditable -->


	


<!-- #BeginEditable "script" -->

<!-- #EndEditable -->
</head>


<body>

<header id="header" style="background: transparent none repeat scroll 0% 0%; border-bottom: medium none; color: white;">
	<div class="container-fluid">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="logoName">
		<nav class="navbar navbar-default" id="menu">
			<div class="navbar-header">
				<button class="btn btn-success btn-lg navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
				<span class="glyphicon glyphicon-align-justify"></span>  </button>
				<div id="logo">	
			<a href="."><img src="<?php echo base_url(); ?>assets/images/index.jpeg" alt="FLHS" class="img-responsive" title="Alpine Holiday Network"/> </a> 
			<h1> Alpine Holiday Network</h1>
			<p> ...pick, click, sell </p>
				</div>
			</div>
		</nav>
	</div>
		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="nav">
			<div class="navbar-collapse collapse" id="mainNav">
				<ul class="nav navbar-nav navbar-right">
			<li class="nav active" ><a style="font-family: 'Open Sans', sans-serif; font-size: 1.2em;" href="<?php echo base_url();?>"> Home</a></li>
			<li class="nav" ><a style="font-family: 'Open Sans', sans-serif; font-size: 1.2em;" href="<?php echo base_url();?>about"> About Us </a></li>
			<li class="nav"><a style="font-family: 'Open Sans', sans-serif; font-size: 1.2em;" href="<?php echo base_url();?>member"> Membership </a></li>
			<li class="nav" ><a style="font-family: 'Open Sans', sans-serif; font-size: 1.2em;" href="<?php echo base_url();?>service"> Our Service </a></li>
			<li class="nav" ><a style="font-family: 'Open Sans', sans-serif; font-size: 1.2em;" href="<?php echo base_url();?>news"> News </a></li>
			<li class="nav"><a style="font-family: 'Open Sans', sans-serif; font-size: 1.2em;" href="<?php echo base_url();?>contact"> Contact </a></li>
			
				</ul> 
			</div>
		</div>
	</div>
</header>
	
	<?php
		$this->load->view($module . '/' . $view_file);
	?>

<section style="min-height:200px;">
<div id="indexContact">
	<div class="container-fluid">
			
		<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<h3> Follow Us On </h3>
			<hr>
		<p>
				<a href="https://web.facebook.com/Alpine-Holiday-Network-748131422190481" id="fb" target="_blank" title="Like Our Page on facebook"></a> 
				<a href="https://twitter.com/alpinehn" id="tw" target="_blank" title="Follow us on twitter"> </a> 
			</p>
			<p>&copy; 2018. Alpine Holiday Network. <br> All right reserved</p>
			<p>Developed by: <a href="http://www.webmatterz.com.ng" target="_blank" title="Web Matterz Nigeria" style="margin-left: -20px;">Web Matterz Nigeria</a></p>

		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-left: 0px;">
			<h3> Contact Us </h3>
			<hr>
		<p><span class="glyphicon glyphicon-home"></span> Plot 22, Mary Lot Close Behind Fototek, Dogon Karfe, Jos, Plateau State, Nigeria. </p>
		<p><span class="glyphicon glyphicon-envelope"></span>contact@alpinehol.com </p> 
		<p><span class="glyphicon glyphicon-earphone"></span> +2348094022810,  +2348054091023</p>
		</div>
		
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right">
		<h3> Quick Links </h3>
			<hr>
		<li> <a style="font-family: 'Open Sans', sans-serif; font-size: 1.0em;"  href="<?php echo base_url();?>member"> Become a Member </a> </li>
		<li> <a style="font-family: 'Open Sans', sans-serif; font-size: 1.0em;" href="<?php echo base_url(); ?>auth"> Alpine Selling Portal </a> </li>
		<li> <a style="font-family: 'Open Sans', sans-serif; font-size: 1.0em;"  href="<?php echo base_url();?>destination"> Destinations </a></li>
		<li> <a style="font-family: 'Open Sans', sans-serif; font-size: 1.0em;"  href="<?php echo base_url();?>contact"> Contact </a></li>	
		<li> <a href="#"> FAQs </a></li>		
		</div>		
	</div>
</div>
</section>

<!-- #BeginEditable "scripts" -->

	
<!-- #EndEditable -->



</body>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/myScript.js"></script>

<!-- #EndTemplate -->


</html>
