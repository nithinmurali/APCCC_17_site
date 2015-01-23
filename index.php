<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<script type="text/javascript" src="js/jquery.js" ></script>
		<!-- <script type="text/javascript" src="js/menu.js" ></script> -->
		<script type="text/javascript" src="js/jquery.flexslider-min.js" ></script>
		<!--<script type="text/javascript" src="js/gallery_js.js" ></script>-->
		
		<script type="text/javascript" src="js/jquery.easing.js" ></script>
		<!-- <script type="text/javascript" src="js/cbpTooltipMenu.js" ></script> -->
		
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/flexslider.css" />
		<!-- <script type="text/javascript" src="js/bootstrap.min.js" ></script>  
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> -->
		
		<!-- <link rel="stylesheet" type="text/css" href="css/styles.css" /> -->
        <!--<script src="js/modernizr-2.6.2.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="css/demo.css" />   
        <link rel="stylesheet" type="text/css" href="css/style9.css" />
        
        <link rel="stylesheet" href="css/gallery_css.css"> 
        <!-- <link rel="stylesheet" type="text/css" href="css/style1.css" /> -->
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
        <!--<script type="text/javascript" src="js/interact-1.2.2.min.js" ></script>-->
		<!-- <link type="text/css" href="css/menu.css" rel="stylesheet" /> -->
	</head>

	<body class="back">
		
		
		<div class="container">
			
			
		<? @include("include/slider.php");  ?>
						
			<div class="row" >
				
				<div class="col-md-12 middle content" style="height:1350px;" >
					<? @include("content/home.html"); ?>
				</div>
				
			</div>
			
		<? @include("include/footer.php"); ?>	
		
		<? @include("include/nav-bar.php"); ?>
		<? @include("include/defaultJs.php"); ?>

	</body>
</html>