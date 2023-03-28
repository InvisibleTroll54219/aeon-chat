<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
<header>
  <div class="wrapper, users, content">
      
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
        <p><h2>Are you sure you want to log out?</h2></p>
        <br>
      
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      <a href="feed.php" class="logout">Go Back</a>
      </div>
<div class="wrapper, content, users">
      
</div>
</header>

  <script src="javascript/users.js"></script>

</body>
</html>
