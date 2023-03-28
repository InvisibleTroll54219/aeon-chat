<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
} ?>

<?php include_once "header.php"; ?>
<body>
<div class="wrapper, form signup">
      	<header >Post an Image</header>
      	<form action="#" method="POST">
 	<div  class="field input">
    Caption<br><input type="text" name="caption" placeholder="Caption" required><br>
	<span > "Select Image<br><input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
	<div class="field button">
        <input type="submit" name="submit" value="Upload">
        </div> </span>
      </form>
  <script src="javascript/imagepost.js"></script>
  <div class="field button"><input type="submit" value="Back to Home" onclick="location.href = 'feed.php';"></div>

</body>
</html>