<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: feed.php"); }
    include_once "init.php";
    include_once "php/config.php";
?>

<?php include_once "header.php"; ?>
<body>
<div class="wrapper, form signup">
      	<header >Welcome to AEON</header>
      	<form action="#" method="POST">
 	<div  class="field input">
    First Name<br><input type="text" name="fname" placeholder="First name" required><br>
    Last Name<br><input type="text" name="lname" placeholder="Last name" required><br>
		Email Address<br><input type="text" name="email" placeholder="Enter your email" required><br>
		Password<br><input type="password" name="password" placeholder="Enter new password" required><br></div> 
	<span > "Select Image<br><input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
	<div class="field button">
        <input type="submit" name="submit" value="Continue to Chat">
        </div> </span>
      </form>
      <div class="link" >Already signed up? <a href="login.php"> Login now</a></div>
  </div>
  <script src="javascript/signup.js"></script>
</body>
</html>