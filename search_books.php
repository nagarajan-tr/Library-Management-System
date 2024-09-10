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
      <h3 id="heading">Search Book </h3>
      <div id="center">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label>Enter Book name or Keywords</label>
        <input type="text" required name="name">
        <button type="submit" name="submit"> Search Now</button>
        </form>
      </div>
      <?php
      if (isset($_POST["submit"])) {
         $sql = "select * FROM book where BTITLE like '%{$_POST["name"]}%' or Keywords like '%{$_POST["name"]}%'";
          $res = $db->query($sql);
          if ($res->num_rows > 0) {
              // print_r($res);
              echo "<table>
                   <tr>
                      <th>Student ID</th>
                      <th>Book Name</th>
                      <th>Authors</th>
                      <th>View</th>
                      <th>Comment</th>
                   </tr>
                   ";
              $i = 0;
              while ($row = $res->fetch_assoc()) {
                  $i++;
                  echo "<tr>";
                  echo "<td>{$i}</td>";
                  echo "<td>{$row["BTITLE"]}</td>";
                  echo "<td>{$row["KEYWORDS"]}</td>";
                  echo "<td><a href='{$row["FILE"]}' target='_blank'>View</td>";
                  echo "<td><a href='comment.php?id={$row["BID"]}'>Go</a></td>";
                  echo "</tr>";
              }
              echo "</table>";
          } else {
              echo "<p class='error'>No Books Records Found </p>";
          }
      }
        ?>
    </div>
    <div id="navi">
      <?php include "usersidebar.php";
      ?>
    </div>
  </div> -->

  <h1 class="header">Search Book</h1>
  <div class="nav-container">
    <div id="wrapper">
    <!-- <h3 id="heading">Search Book </h3> -->
      <div id="center">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label><h3>Enter Book name or Author</h3></label>
        <input type="text" required name="name">
        <button type="submit" name="submit"> Search Now</button>
        </form>
      </div>
      <?php
      if (isset($_POST["submit"])) {
         $sql = "select * FROM book where BTITLE like '%{$_POST["name"]}%' or Keywords like '%{$_POST["name"]}%'";
          $res = $db->query($sql);
          if ($res->num_rows > 0) {
              // print_r($res);
              echo "<table>
                   <tr>
                      <th>Student ID</th>
                      <th>Book Name</th>
                      <th>Keywords</th>
                      <th>View</th>
                      <th>Comment</th>
                   </tr>
                   ";
              $i = 0;
              while ($row = $res->fetch_assoc()) {
                  $i++;
                  echo "<tr>";
                  echo "<td>{$i}</td>";
                  echo "<td>{$row["BTITLE"]}</td>";
                  echo "<td>{$row["KEYWORDS"]}</td>";
                  echo "<td><a href='{$row["FILE"]}' target='_blank'>View</td>";
                  echo "<td><a href='comment.php?id={$row["BID"]}'>Go</a></td>";
                  echo "</tr>";
              }
              echo "</table>";
          } else {
              echo "<p class='error'>No Books Records Found </p>";
          }
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