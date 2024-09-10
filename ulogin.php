<?php
session_start();
include "database.php";
?>

<html>

<head>
  <title>Library Mangement System</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

  <style>
    html {
      /* background: rgb(255, 223, 223); */
      background-color: #ff7675;
    }

    body {
      /* background: yellow; */
      width: 900px;
      height: 500px;
      margin: 50px auto;
      background-color: ;
    }

    .full {
      width: 80%;
      height: 100px;
      margin-left: 250px;
      justify-content: center;
    }

    .in {
      /* float: left; */
      width: 60%;
      /* height: ; */
      background: rgb(254, 252, 250);
    }

    span {
      /* font-size: 30px;
                font-weight: 1000;
                margin: 20px 0;
                text-align: center;
                padding: 20px 0px; */
      font-size: 40px;
      text-align: center;
      margin: 120px;
      font-weight: bold;
    }

    .imgcontainer {
      text-align: center;
      margin: 10px auto;
    }

    .container {
      padding: 16px;
      font-size: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 25px 0;
      display: inline-block;
      border: 2px solid #ccc;
      box-sizing: border-box;
      /* font-size: 20px; */
    }

    button {
      background-color: #04aa6d;
      color: white;
      padding: 10px 10px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      font-size: 20px;
    }

    .cancelbtn {
      background-color: red;
      margin: 13px auto;
      padding: 10px 0px;
      height: 42px;
      font-size: 20px;
    }

    .in2 {
      background-color: red;
      width: 450px;
      height: 500px;
      float: left;
    }

    .text {
      text-align: center;
    }

    p {
      font-size: 40px;
    }

    .text2 {
      /* font-size: 20px;
            text-align: center;
            font-style: italic;
            padding: 10px 20px;
            box-shadow: #04AA6D; */
      font-size: 20px;
      text-align: justify;
    }

    a {
      color: white;
      text-decoration: none;
      width: 100px;
      font-size: 20px;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .error{
  color: red;
  text-align: center;
  font-size:5px;
}
.success{
  color: green;
  text-align: center;
}
  </style>
</head>

<body>
  <div id="container">
    <div id="header">
      <!-- <h1>Library Mangement System</h1> -->
    </div>
    <div id="wrapper">
      <!-- <h2 id="heading">User Login Here</h2> -->
      <div id="center">
        <?php
        if (isset($_POST["submit"])) {
          $sql = "SELECT * FROM student WHERE NAME='{$_POST["name"]}' and PASS='{$_POST["pass"]}'";
          $res = $db->query($sql);
          // print_r($res);
          if ($res->num_rows > 0) {
            // echo "Good";
            $row = $res->fetch_assoc();
            $_SESSION["ID"] = $row["ID"];
            $_SESSION["NAME"] = $row["NAME"];
            header("location:uhome.php");
          } else {   
            //  echo "<p class='success'> Good </p>";
          }
          //  echo "<p class='success'> Good </p>";
          echo "<center><p class='error'><h4>Invalid User Details</h4></p></center>";
        }
        ?>


        <form action="ulogin.php" method="post">
          <!-- <label><b>Name</b></label>
          <input type="text" name="name" placeholder="ram" required><br>
          <label><b>Password</b></label>
          <input type="password" name="pass" placeholder="*******" required><br>
          <button type="submit" name="submit"><b>Login Now</b></button> -->


        <div class="full">
          <div class="in">
            <span> User Login </span>
            <div class="imgcontainer">
              <img src="ulogin.jpg" width="50" />
            </div>

            <div class="container">
              <label for="uname"><b>Name</b></label>
              <input type="text" placeholder="User name" name="name" required />

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="*******" name="pass" required />

              <button type="submit" name="submit">Login</button>
              <!-- <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label> -->
              <button type="button" class="cancelbtn"><a href="index.php">Cancel</button></a>
            </div>
          </div>
        </div>


      </div>
      </form>
    </div>
    <!-- <div id="navi">
      <?php include "sidebar.php";
      ?>
    </div> -->
  </div>
</body>

</html>