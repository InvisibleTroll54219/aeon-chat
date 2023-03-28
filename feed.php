<!DOCTYPE html>
<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Feed</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

<style>
.dropbtn {
  display:flex;
  padding: 32px;
  font-family: 'roboto';
  font-size: 2.35rem;
  color: gray;
  border: none;
  box-sizing: border-box;
  background-color:white;
}
.dropbtn:hover{
background-color:#f1f1f1;
}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  text-align: center;
  text-decoration: underline;
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 16.72rem;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

</style>

</head>

<body style="font-family:'roboto';">
  <div class="header">
    <div class="lheader">
      <img src="images/pic1.png" alt="" />
      <!-- <div class="headerinp">
        <span class="material-icons"> search </span>
        <input type="text" placeholder="Search... " />
      </div> -->
    </div>

    <div class="header__middle">
      <div class="header__option active">
        <a style="font-family:'roboto';" class="material-icons" href="feed.php">
          <h3>HOME</h3>
        </a>
      </div>
      <div class="header__option">
        <a style="font-family:'roboto';" class="material-icons" href="users.php">
          <h3>CHAT</h3>
        </a>
      </div>
      <div class="header__option">
        <a style="font-family:'roboto';" class="material-icons" href="postimage.php">
          <h3>POST</h3>
        </a>
      </div>
    <div class="dropdown">
       <button class="dropbtn"><u><strong>MINIGAMES</strong></u></button>
       <div class="dropdown-content">
       <a href="baseSnake.html">Snake</a>
       <a href="rps.html">Rock Paper Scissors</a>
       </div> 
      </div>
      <div class="header__option">
        <a style="font-family:'roboto';" class="material-icons" href="mid_logout.php">
          <h3>LOGOUT</h3>
        </a>
      </div>
    </div>

    <div class="rheader">
      <div class="header__info">


        <?php
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if (mysqli_num_rows($sql) > 0) {
          $row = mysqli_fetch_assoc($sql);
        }
        ?>
        <img class="user__avatar" src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <h3><?php echo $row['fname'] . " " . $row['lname'] ?></h3>
        </div>


        <!-- <img class="user__avatar" src="images/pfp.png" alt="" />
        <h3>[firstName] [lastName]</h3> -->
      </div>
    </div>
  </div>




  </div>

  <?php

$sql = mysqli_query($conn, "SELECT * FROM posts ORDER BY time_posted DESC");

while($row = mysqli_fetch_assoc($sql)) {
	echo "
<div class='post' style='width:80%'><div class='post__top'>
<div class='post__topInfo'><h3>".$row["fname"]." ".$row["lname"]."</h3><p>".$row["time_posted"]."</p></div></div><div class='post__bottom'><p>".$row["text_content"]."</p></div>";
    echo "<div class='post__image'><img src='php/images/".$row["img_content"]."'/></div></div></center>";
}
?>


  </div>

</body>

</html>
