<?php
//session_start();

// initializing variables
$username = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'parent_point');

// REGISTER USER
// if (isset($_POST['login'])) {
//   // receive all input values from the form
//   $username = mysqli_real_escape_string($db, $_POST['Name']);
//   $email = mysqli_real_escape_string($db, $_POST['Email']);
//   $password_1 = mysqli_real_escape_string($db, $_POST['password']);
//   $password_2 = mysqli_real_escape_string($db, $_POST['Confirm_Password']);
//
//   // form validation: ensure that the form is correctly filled ...
//   // by adding (array_push()) corresponding error unto $errors array
//   if (empty($username)) { array_push($errors, "Username is required"); }
//   if (empty($email)) { array_push($errors, "Email is required"); }
//   if (empty($password_1)) { array_push($errors, "Password is required"); }
//   if ($password_1 != $password_2) {
// 	array_push($errors, "The two passwords do not match");
//   }
//
//   // first check the database to make sure
//   // a user does not already exist with the same username and/or email
//   $user_check_query = "SELECT * FROM `users` WHERE name='$username' OR email='$email' ";
//   $result = mysqli_query($db, $user_check_query);
//   $user = mysqli_fetch_assoc($result);
//
//   if ($user) { // if user exists
//     if ($user['Name'] === $username) {
//       array_push($errors, "Username already exists");
//     }
//
//     if ($user['Email'] === $email) {
//       array_push($errors, "email already exists");
//     }
//   }
//
//   // Finally, register user if there are no errors in the form
//   if (count($errors) === 0) {
//   	$password = $password_1;//encrypt the password before saving in the database
//
//   	$query = "INSERT INTO `users` (name, email, password)
//   			  VALUES('$username', '$email', '$password')";
//   	mysqli_query($db, $query);
//   	$_SESSION['name'] = $username;
//   	$_SESSION['success'] = "You are now logged in";
//   	header('location: index.php');
//   }
// }

if (isset($_POST['signin'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) === 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) === 1) {
  	  $_SESSION['username'] = $username;
  	  //$_SESSION['success'] = "You are now logged in";
  	  header('location: add_data.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
			echo "wrong combination";
  	}
  }
}


if (isset($_POST['add_gifts'])) {
  $currentDir = getcwd();
  $tar = "imgs/";
  $target = addslashes($currentDir . $tar);

  $id = mysqli_real_escape_string($db, $_POST['id']);
  $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
  $product_category = mysqli_real_escape_string($db, $_POST['product_category']);
  $product_description = mysqli_real_escape_string($db, $_POST['product_description']);
  //$product_image = mysqli_real_escape_string($db, $_POST['product_image']);
  $fileTarget = $target.$file;
  $file = $_FILES['product_image']['name'];
	$tempFileName = $_FILES['product_image']['tmp_name'];

  //$product_image = mysqli_real_escape_string($db, $_POST['product_image']);
  $product_price = mysqli_real_escape_string($db, $_POST['product_price']);
  $result = move_uploaded_file($tempFileName , "imgs/".$file);
  $filename = $_FILES['product_image']['name'];

  $image_name = addslashes($_FILES['product_image']['name']);
  $path =  $target . $image_name;

  echo $product_price;
  if (empty($id)) {
  	array_push($errors, "id is required");
  }
  if (empty($product_name)) {
  	array_push($errors, "Name is required");
  }
  if (empty($product_category)) {
    array_push($errors, "Category is required");
  }
  if (empty($product_description)) {
    array_push($errors, "Description is required");
  }
  if (empty($product_image)) {
    array_push($errors, "Image is required");
  }
  if (empty($product_price)) {
    array_push($errors, "Price is required");
  }
  if (count($errors) === 0) {
  	//$password = md5($password);
  	$query = "INSERT INTO `gifts` (id , product_name, product_category, product_description, image, price) VALUES ('$id','$product_name' , '$product_category', '$product_description', '$path', '$product_price')";
  	mysqli_query($db, $query);
  	header('location: add_data.php');
  	} else {
       echo "error";
    }
  }


  if (isset($_POST['add_stationary'])) {
    $currentDir = addslashes(getcwd());
    $tar = "\imgs";
    $target = addslashes($tar);
    $file = $_FILES['product_image']['name'];
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
    $product_category = mysqli_real_escape_string($db, $_POST['product_category']);
    $product_description = mysqli_real_escape_string($db, $_POST['product_description']);
    $product_image = mysqli_real_escape_string($db, $_POST['product_image']);
    //$fileTarget = $target.$file;
  	$tempFileName = $_FILES['product_image']['tmp_name'];
    $path = $currentDir . $target .basename($file);
    //$product_image = mysqli_real_escape_string($db, $_POST['product_image']);
    $product_price = mysqli_real_escape_string($db, $_POST['product_price']);
    $result = move_uploaded_file($tempFileName , "./imgs/" . $file);




    echo $id;
    echo $product_name;
    echo $product_category;
    echo $product_description;
    //echo $product_image;
    echo $product_price;
    if (empty($id)) {
    	array_push($errors, "id is required");
    }
    if (empty($product_name)) {
    	array_push($errors, "Name is required");
    }
    if (empty($product_category)) {
      array_push($errors, "Category is required");
    }
    if (empty($product_description)) {
      array_push($errors, "Description is required");
    }
    if (empty($product_image)) {
      array_push($errors, "Image is required");
    }
    if (empty($product_price)) {
      array_push($errors, "Price is required");
    }
    if (count($errors) === 0) {
    	//$password = md5($password);
    	$query = "INSERT INTO `stationary` (id , product_name, product_category, product_description, image, price) VALUES ('$id','$product_name' , '$product_category', '$product_description', '$path', '$product_price')";
    	mysqli_query($db, $query);
    	header('location: add_data.php');
    	} else {
         echo "error";
      }
    }
?>
