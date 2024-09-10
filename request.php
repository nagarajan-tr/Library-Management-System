<?php
session_start();
include "database.php";
if(!isset($_SESSION["ID"]))
{
    header("location:ulogin.php");
}
?>
<html>
<head>
  <title>Library Mangement System</title>
  <link rel="stylesheet" type="text/css" href="Ustyle.css">
</head>

<body>
  <!-- <div id="container">
    <div id="header">
      <h1>Library Mangement System</h1>
    </div>
    <div id="wrapper">
      <h3 id="heading">New Book Request  </h3>
      <div id="center">
        <?php
         if(isset($_POST["submit"]))
         {
            $sql = "insert into request (ID,MES,LOGS) values ({$_SESSION["ID"]},'{$_POST["mess"]}',now());";
             $db->query($sql);
            
              echo "<p class='success'>Request Sent to admin</p>";
         }
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label>Message</label>
        <textarea required name="mess"></textarea>
        <button type="submit" name="submit"> Sent Message </button>
        </form>
      </div>
    </div>
    <div id="navi">
      <?php include "usersidebar.php";
      ?>
    </div>
  </div> -->

  <h1 class="header">New Book Request</h1>
  <div class="nav-container">
    <div id="wrapper">
    <!-- <h3 id="heading">Search Book </h3> -->
      <div id="center">
      <?php
         if(isset($_POST["submit"]))
         {
            $sql = "insert into request (ID,MES,LOGS) values ({$_SESSION["ID"]},'{$_POST["mess"]}',now());";
             $db->query($sql);
            
              echo "<p class='success'>Request Sent to admin</p>";
         }
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label><h2>Message</h2></label>
        <textarea required name="mess"></textarea>
        <button type="submit" name="submit"> Sent Message </button>
        </form>
    </div>
  </div>
  </div>

  <ul class="navi">
    <li class="active">
      <a href="uhome.php">
        <span class="icon-home"></span>
        <span class="text">Home</span>
      </a>
    </li>
    <li>
      <a href="search_books.php">
        <span class="icon-user"></span>
        <span class="text">Search Books</span>
      </a>
    </li>
    <li>
      <a href="request.php">
        <span class="icon-play"></span>
        <span class="text">Request  </span>
      </a>
    </li>
    <li>
      <a href="uchangepass.php">
        <span class="icon-cogs"></span>
        <span class="text">Change Password</span>
      </a>
    </li>
    <li>
      <a href="logout.php">
        <span class="icon-briefcase"></span>
        <span class="text">Logout
        </span>
      </a>
    </li>
  </ul>
  </div>

  <script>
    $('li').click(function () {
      $(this).addClass('active').siblings().removeClass('active');
    });
  </script>
</body>

</html>