<html>

<head>
  <title>Library Mangement System</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      overflow: hidden;
      /* background-image:url(book3.jfif); */
      background-repeat: none;
    }

    h1{
      font-size:50px;
    }
    ul {
      position: relative;
    }

    ul li {
      list-style: none;
      text-align: center;
    }

    ul li a {
      /* color: #333; */
      color:black;
      text-decoration: none;
      font-size: 3em;
      padding: 5px 20px;
      display: inline-flex;
      font-weight: 700;
      transition: 0.5s;
    }

    ul:hover li a {
      color: #0002;
      color: black;
    }

    ul li:hover a {
      /* color: #000; */
      background: rgba(255, 255, 255, 1);
    }

    ul li a:before {
      content: '';
      position: absolute;
      top: 60%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 5em;
      color: rgba(0, 0, 0, .1);
      border-radius: 50%;
      z-index: -1;
      opacity: 0;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: 500px;
      transition: letter-spacing 0.5s, left 0.5s;
    }

    ul li a:hover:before {
      content: attr(data-text);
      opacity: 1;
      left: 50%;
      letter-spacing: 10px;
      width: 1650px;
      height: 1700px;
    }

    ul li:nth-child(6n+1) a:before {
      background: #81ecec;
    }

    ul li:nth-child(6n+2) a:before {
      background: #ff7675;
    }

    ul li:nth-child(6n+3) a:before {
      background: #55efc4;
    }

    ul li:nth-child(6n+4) a:before {
      background: #a29bfe;
    }

    ul li:nth-child(6n+5) a:before {
      background: #fd79a8;
    }

    ul li:nth-child(6n+6) a:before {
      background: #ffeaa7;
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
  <!-- <div id="container">
      <div id="header">
        <h1>Library Mangement System</h1>
      </div>
      <div id="wrapper">
        <p class="index_p">WELCOME TO LIBRARY</p>
      </div>
      <div id="navi">
         <?php include "sidebar.php";
         ?> 
    </div>
    </div> -->
    <!-- <h1>Library Mangement System</h1> -->
  <ul>
  <h1>Library Mangement System</h1><br><br><br><br>
    <li><a href="alogin.php" data-text="Admin Login"><img src="Alogin.jpg " width=60 height=60>&nbsp Admin Login</a></li><br>
    <li><a href="ulogin.php" data-text="User Login"><img src="ulogin.jpg " width=60 height=60>&nbsp User Login</a></li><br>
    <li><a href="new.php" data-text="New User"><img src="nuser.jpg " width=60 height=60>&nbsp New User</a></li><br>
    <!-- <li><a href="#" data-text="Work">Work</a></li>
    <li><a href="#" data-text="Team">Team</a></li>
    <li><a href="#" data-text="Contact">Contact</a></li> -->
  </ul>

</body>

</html>