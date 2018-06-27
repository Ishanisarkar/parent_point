<?php include('register.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Parents Point</title>
<!--/tags -->
<meta name="viewport" content="width=device-widvth, initial-scale=1">
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
        <?php  if (isset($_SESSION['email'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
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

  <center>
  <form method= "POST" action = "register.php" enctype="multipart/form-data">

  <table>
  <tr>  <caption><h2> Add Data For Gifts<h2> </caption> </tr>
    <tr>
      <th>  <label>Id</label>
        <span></span> </th>
      <td>
        <input type="text" name="id" required=""> </td>
  </tr>
  <tr>
    <th> <label> Product Name</label><span></span></th>
    <td>
      <input type="text" name="product_name" required="">
    </td>
</tr>
<tr>
  <th> <label> Select Category</label><span></span> </th>
  <th>  <select name = "product_category">
    <option value="Girls" name= "girls">For Girls</option>
    <option value="Boys" name = "boys">For Boys</option>
    <option value="Under5" name = "under5">Under 5</option>
    <option value="Infant" name = "Infant">Infant</option>
    <option value="AllPurpose" name = "AllPurpose">All Purpose</option>
  </select>


</th>
</tr>
<tr>
  <th> <label>Product Description</label>
  <span></span> </th>
  <th>  <textarea rows = "4" cols = "50" name="product_description" required=""></textarea>
    </th>
</tr>
<tr>
  <th> <label>Product Image</label>
  <span></span> </th>
  <th>  <input type="file" name="product_image" accept="image/*">

  </div>
</th>
</tr>
<tr>
  <th>   <label>Product Price</label>
    <span></span> </th>
  <th>  <input type="text" name="product_price" required="">
</th>
</tr>


</table>
<input type = "submit" name="add_gifts" value = "Add"></input>
</form>
<!-- add for stationary -->
<center>
<form method= "POST" action = "register.php">

<table>
<tr>  <caption><h2> Add Data For Stationary<h2> </caption> </tr>
  <tr>
    <th>  <label>Id</label>
      <span></span> </th>
    <td>
      <input type="text" name="id" required=""> </td>
</tr>
<tr>
  <th> <label> Product Name</label><span></span></th>
  <td>
    <input type="text" name="product_name" required="">
  </td>
</tr>
<tr>
<th> <label> Select Category</label><span></span> </th>
<th>  <select name = "product_category">
  <option value="Notebooks" name= "notebooks">NoteBooks</option>
  <option value="Pensnpencil" name = "pensnpencil">PensnPencil</option>
  <option value="schoolbags" name = "schoolbags">schoolbags</option>
  <option value="craft" name = "craft">Craft</option>
  <option value="accessories" name = "accessories">Accessories</option>
</select>


</th>
</tr>
<tr>
<th> <label>Product Description</label>
<span></span> </th>
<th>  <textarea rows = "4" cols = "50" name="product_description" required=""></textarea>
  </th>
</tr>
<tr>
<th> <label>Product Image</label>
<span></span> </th>
<th>  <input type="file" name="product_image" >

</div>
</th>
</tr>
<tr>
<th>   <label>Product Price</label>
  <span></span> </th>
<th>  <input type="text" name="product_price" required="">
</th>
</tr>


</table>
<input type = "submit" name="add_stationary" value = "Add"></input>
</form>
<!-- footer -->
