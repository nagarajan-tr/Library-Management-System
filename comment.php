<?php
session_start();
include "database.php";
if (!isset($_SESSION["ID"])) {
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
      <h3 id="heading"> Send Your Comments </h3>
      <?php

      if (isset($_POST["submit"])) {
        // echo "Good";
        $sql = "INSERT INTO comment(BID,SID,COMM,LOGS) VALUES 
               ({$_GET["id"]},{$_SESSION["ID"]},'{$_POST["mes"]}',now()) ";
        $db->query($sql);
      }

      $sql = "SELECT * from BOOK where BID=" . $_GET["id"];
      $res = $db->query($sql);
      if ($res->num_rows > 0) {
        echo "<table>";
        $row = $res->fetch_assoc();
        echo "
            <tr>
            <th> Book name</th>
            <td>{$row["BTITLE"]}</td> 
            </tr>
            <tr>
            <th> Authors </th> 
            <td>{$row["KEYWORDS"]}</td> 
            </tr>
          ";
        echo "</table>";
      } else {
        echo "<p class='error'> NO Books Found </p>";
      }
      ?>
      <div id="center">
        <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="post">
          <label> Your Comments </label>
          <textarea name="mes" required> </textarea>
          <button type="submit" name="submit"> Post Now</button>
        </form>
      </div>
      <?php
      $sql = "SELECT student.NAME,comment.COMM,comment.LOGS from comment inner join student on 
              comment.SID=student.ID where comment.BID={$_GET["id"]} order by comment.CID DESC";

      $res = $db->query($sql);
      if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
          echo "<p><strong>{$row["NAME"]}  :  </strong>
                {$row["COMM"]}
                <i>{$row["LOGS"]}</i>
                </p>";
        }
      } else {
        echo "<p class='error'>No Comments Yet...</p>";
      }
      ?>

    </div>
    <div id="navi">
      <?php include "usersidebar.php";
      ?>
    </div>
  </div> -->

  <h1 class="header">Comments</h1>
  <div class="nav-container">
    <div id="wrapper">
      <!-- <h3 id="heading">Search Book </h3> -->
      <div id="center">
        <?php

        if (isset($_POST["submit"])) {
          // echo "Good";
          $sql = "INSERT INTO comment(BID,SID,COMM,LOGS) VALUES 
         ({$_GET["id"]},{$_SESSION["ID"]},'{$_POST["mes"]}',now()) ";
          $db->query($sql);
        }

        $sql = "SELECT * from BOOK where BID=" . $_GET["id"];
        $res = $db->query($sql);
        if ($res->num_rows > 0) {
          echo "<table class='ctable'>";
          $row = $res->fetch_assoc();
          echo "
      <tr>
      <th> Book name</th>
      <td>{$row["BTITLE"]}</td> 
      </tr>
      <tr>
      <th> Keywords </th> 
      <td>{$row["KEYWORDS"]}</td> 
      </tr>
    ";
          echo "</table>";
        } else {
          echo "<p class='error'> NO Books Found </p>";
        }
        ?>
        <div id="center">
          <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="post">
            <label><h3> Your Comments </h3></label>
            <textarea name="mes" required> </textarea>
            <button type="submit" name="submit"> Post Now</button>
          </form>
        </div>
        <?php
        $sql = "SELECT student.NAME,comment.COMM,comment.LOGS from comment inner join student on 
        comment.SID=student.ID where comment.BID={$_GET["id"]} order by comment.CID DESC";

        $res = $db->query($sql);
        if ($res->num_rows > 0) {
          while ($row = $res->fetch_assoc()) {
            echo "<p><strong>{$row["NAME"]}  :  </strong>
           <b>{$row["COMM"]}</b>
          <i>{$row["LOGS"]}</i>
          </p>";
          }
        } else {
          echo "<p class='error'>No Comments Yet...</p>";
        }
        ?>
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
        <span class="text">Request </span>
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