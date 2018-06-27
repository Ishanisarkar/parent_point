<!DOCTYPE html>
<html>
<head>
<title>Parents Point</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="#" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">
				<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php"><span>P</span>arent Point <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
        <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p><strong> <a href="index.php?logout='1'" style="color: black;">logout</a></strong> </p>
    <?php endif ?>
			</div>
        <!-- header-bot -->

		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>

															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>

														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="modal-body modal-body-sub_agile">
<div class="col-md-8 modal_body_left modal_body_left1">
<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
      <form action="register.php" method="post">
  <div class="styled-input agile-styled-input-top">
    <input type="text" name="username" required="">
    <label>UserName</label>
    <span></span>
  </div>
  <div class="styled-input">
    <input type="password" name="password" required="">
    <label>Password</label>
    <span></span>
  </div>
  <input type="submit" name= "signin" value="Sign In">
</form>
</div>
</div>



<!-- footer -->
<div class="footer">
	<center>
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php"><span>P</span>arent Point </a></h2>
			<p>Lorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non
			numquam eius modi tempora.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>

															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>

														</ul>
		</div>



		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copy 2018 Parent Point. All rights reserved </a></p>
	</div>
	</center>
</div>
