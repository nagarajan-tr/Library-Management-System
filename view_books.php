<?php
session_start();
include "database.php";
if (!isset($_SESSION["AID"])) {
  header("location:alogin.php");
}
?>
<html>

<head>
  <title>Library Mangement System</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <style>
    html,
    body {
      margin: 0px;
      padding: 0;
      /* background-image: url(book2.jfif); */
      /* background-repeat: no-repeat; */
      /* background-size: 100%; */
      width: 100%;
      height: 100%;
      background: #f2ec72;
      /* background-color: red; */
    }

    body {
      margin-top: 0px;
      font: 90% sans-serif;
      text-align: center;
      /* background-image: url(book2.jfif); */
    }

    .header {
      height: 70px;
      line-height: 70px;
      margin: 0;
      padding-left: 10px;
      text-align: center;
      /* background-color: yellow; */
      background: linear-gradient(to bottom, #ec6f66 0%, #f3a183 100%);
    }

    .nav-container {
      height: auto;
      width: 100%;
      margin: 0 auto;
      text-align: left;
      /* background-color: red ; */
    }

    div#wrapper {
      float: right;
      width: 1050px;
      height: 100%;
      background-color: #ffeaa7;
      /* background-image: url(book1.jfif); */
      /* background: linear-gradient(to bottom, #eacda3 0%, #d6ae7b 100%); */
      color: black;
      margin: 0;
      /* text-align:center; */
    }

    .navi {
      float: left;
      height: 100%;
      width: 242px;
      background: #f2ec72;
      margin-bottom: 5px;
      padding-top: 0px;
      font-weight:bold;
    }

    #center {
      height: auto;
      width: 300px;
      margin-left: 100px;
      /* background-color: rgb(255, 255, 255); */
    }

    .record {
      /* list-style-type: upper-roman; */
      line-height: 50px;
      font-size: 20px;
      font-weight: bold;
      letter-spacing: 2px;
    }

    ul {
      position: relative;
      /* float: left; */
    }

    ul li {
      list-style: none;
      /* text-align: center; */
    }

    ul li a {
      /* color: #333; */
      color: black;
      text-decoration: none;
      font-size: 20px;
      padding: 8px 0px;
      display: inline-flex;
      font-weight: 40px;
      transition: 0.5s;
    }

    ul:hover li a {
      color: #0002;
      color: black;
    }

    ul li:hover a {
      color: #000;
      background: rgba(255, 255, 255, 1);
    }

    ul li a:before {
      content: '';
      position: absolute;
      top: 50%;
      left: 40%;
      transform: translate(-50%, -50%);
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 5em;
      color: rgba(0, 0, 0, .1);
      border-radius: 50%;
      z-index: -1;
      opacity: 0;
      font-weight: 400;
      text-transform: uppercase;
      letter-spacing: 500px;
      transition: letter-spacing 0.5s, left 0.5s;
    }

    ul li a:hover:before {
      content: attr(data-text);
      opacity: 1;
      left: 50%;
      letter-spacing: 0px;
      width: 1650px;
      height: 1700px;
    }

    table {
      width: 800;
      border-collapse: collapse;
      margin-top: 15px;
      /* background-color: aquamarine; */
      /* background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%); */
      /* height: 00%; */
    }

    table th {
      /* background-color: blueviolet; */
      font-family: verdana;
      font-weight: bolder;
      letter-spacing: 2;
    }

    table td,
    table th {
      border: 2px solid black;
      padding: 8px;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }

    label,
    input,
    button,
    select,
    textarea {
      display: block;
      margin-top: 20px;
      margin-bottom: 25px;
      margin-left: 70px;
      font-size: 15px;
      font-weight: bold;
      font-family: verdana;
      /* color:white; */
    }

    input,
    select,
    textarea {
      width: 100%;

    }

    .error {
      color: red;
      text-align: center;
    }

    .success {
      color: green;
      text-align: center;
      font-size: 20px;
    }
  </style>
</head>

<body>
  <!-- <div id="container">
    <div id="header">
      <h1>Library Mangement System</h1>
    </div>
    <div id="wrapper">
      <h3 id="heading">View Book Details</h3>
        <?php
        $sql = "select * FROM book";
        $res = $db->query($sql);
        if ($res->num_rows > 0) {
          // print_r($res);
          echo "<table>
                   <tr>
                      <th>Student ID</th>
                      <th>Book Name</th>
                      <th>Author</th>
                      <th class=view>View</th>
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
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "<p class='error'>No Books Records Found </p>";
        }
        ?>
    </div>
    <div id="navi">
      <?php include "adminsidebar.php";
      ?>
    </div>
  </div> -->

  <h1 class="header">View Books Details</h1>
  <div class="nav-container">
    <div id="wrapper">
      <!-- <h3 id="heading">Welcome Admin</h3> -->
      <div id="center">
        <?php
        $sql = "select * FROM book";
        $res = $db->query($sql);
        if ($res->num_rows > 0) {
          // print_r($res);
          echo "<table>
                   <tr>
                      <th>Student ID</th>
                      <th>Book Name</th>
                      <th>Author</th>
                      <th>View</th>
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
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "<p class='error'>No Books Records Found </p>";
        }
        ?>
      </div>
    </div>
  </div>
  </div>

  <ul class="navi">
    <li class="active">
      <a href="ahome.php">
        <span class="icon-home"></span>
        <span class="text">Home</span>
      </a>
    </li>
    <li>
      <a href="view_student.php">
        <span class="icon-user"></span>
        <span class="text">View Student</span>
      </a>
    </li>
    <li>
      <a href="upload_books.php">
        <span class="icon-play"></span>
        <span class="text">Upload Books</span>
      </a>
    </li>
    <li>
      <a href="view_books.php">
        <span class="icon-cogs"></span>
        <span class="text">View Books</span>
      </a>
    </li>
    <li>
      <a href="view_req.php">
        <span class="icon-briefcase"></span>
        <span class="text">View Request</span>
      </a>
    </li>
    <li>
      <a href="issue_book.php">
        <span class="icon-calendar"></span>
        <span class="text">Book Issues</span>
      </a>
    </li>

    <li>
      <a href="view_comm.php">
        <span class="icon-calendar"></span>
        <span class="text">View Comments</span>
      </a>
    </li>
    <li>
      <a href="achangepass.php">
        <span class="icon-calendar"></span>
        <span class="text">Change Password</span>
      </a>
    </li>
    <li>
      <a href="logout.php">
        <span class="icon-calendar"></span>
        <span class="text">Logout</span>
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