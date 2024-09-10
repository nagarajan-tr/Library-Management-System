<?php
include "database.php";
?>
<html>

<head>
  <title>Library Mangement System</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

  <style>
    html {
      /* background: rgb(255, 223, 223); */
      background-color: #a29bfe;
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
    input[type="password"]   {
      width: 70%;
      padding: 5px 10px;
      margin: 20px 0;
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
      <!-- <h2 id="heading">New User Registration</h2> -->
      <div id="center">
        <?php
        if (isset($_POST["submit"])) {
          // echo "Good";
          $sql = "insert into student(NAME,PASS,MAIL,DEP) values ('{$_POST["name"]}','{$_POST["pass"]}',
                '{{$_POST["mail"]}','{{$_POST["dep"]}')";
          $db->query($sql);
          echo "<center><p class='success'>User Registration Successful</p></center>";
        }
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
          <!-- <label><b>Name</b></label>
        <input type="text" name="name" placeholder="New user" required><br>
        <label><b>Password</b></label>
        <input type="password" name="pass" placeholder="*******" required><br>
        <label><b>Email</b></label>
        <input type="email" name="mail" placeholder="Newuser@gmail.com" required><br>
        <label><b>Department</b></label>
        <select name="dep" required>
              <option value="">Select</option>
              <option value="B.Sc CS">Computer Sceince </option>
              <option value="B.Sc BC">Bio Chemistry</option>
              <option value="">Select</option>
        </select><br>
        <button type="submit" name="submit"><b> Register Now </b></button> -->

          <div class="full">
            <div class="in">
              <span> New User </span>
              <div class="imgcontainer">
                <img src="nuser.jpg" width="50" />
              </div>

              <div class="container">
                <label for="uname"><b>Name</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" placeholder="New User" name="name" required />

                <label for="psw"><b>Password</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="password" placeholder="*******" name="pass" required /><br><br>

                <label for="mail"><b>E-Mail</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="email" placeholder="NewUser@gmail.com" name="mail" required /><br><br><br>

                <label for="dept"><b>Department</b></label>&nbsp&nbsp
                <select name="dep" required>
                  <option value="">Select</option>
                  <option value="B.Sc CS">Computer Sceince </option>
                  <option value="B.Sc BC">Bio Chemistry</option>
                  <option value="">Select</option>
                </select><br><br>

                <button type="submit" name="submit">Register Now</button>
                <!-- <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label> -->
                <button type="button" class="cancelbtn"><a href="index.php">Cancel</button></a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- <div id="navi">
      <?php include "sidebar.php";
      ?>
    </div> -->
  </div>
</body>

</html>