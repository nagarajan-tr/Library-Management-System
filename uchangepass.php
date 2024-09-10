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
      <h3 id="heading">Change Password</h3>
      <div id="center">
        <?php
         if(isset($_POST["submit"]))
         {
            $sql = "SELECT * from student WHERE PASS='{$_POST["opass"]}' and ID='{$_SESSION["ID"]}'";
            $res = $db->query($sql);
            if($res->num_rows>0)
            {
              $s="update student set PASS='{$_POST["npass"]}' WHERE ID=".$_SESSION["ID"];
              $res = $db->query($s);
              echo "<p class='success'>Password Change Success</p>";
            }
            else{
                echo "<p class='error'>Invalid Password</p>";
            }
         }
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label>Old Password</label>
        <input type="password" name="opass" required>
        <label>New Password</label>
        <input type="password" name="npass" required>
        <button type="submit" name="submit"> Update password </button>
        </form>
      </div>
    </div>
    <div id="navi">
      <?php include "usersidebar.php";
      ?>
    </div>
  </div> -->

  <h1 class="header">Change Password</h1>
  <div class="nav-container">
    <div id="wrapper">
    <!-- <h3 id="heading">Search Book </h3> -->
      <div id="center">
      <?php
         if(isset($_POST["submit"]))
         {
            $sql = "SELECT * from student WHERE PASS='{$_POST["opass"]}' and ID='{$_SESSION["ID"]}'";
            $res = $db->query($sql);
            if($res->num_rows>0)
            {
              $s="update student set PASS='{$_POST["npass"]}' WHERE ID=".$_SESSION["ID"];
              $res = $db->query($s);
              echo "<p class='success'>Password Change Success</p>";
              // echo "<p class='error'>Invalid Password</p>";
            }
            else{
                echo "<p class='error'>Invalid Password</p>";
                // echo "<p class='success'>Password Change Success</p>";
            }
         }
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label>Old Password</label>
        <input type="password" name="opass" required>
        <label>New Password</label>
        <input type="password" name="npass" required>
        <button type="submit" name="submit"> Update password </button>
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