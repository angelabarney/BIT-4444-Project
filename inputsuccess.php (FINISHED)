<!doctype html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HokieMatch: View Profiles </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <script src="jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">    </script>
  <title>New User Created</title>

  <style>
      table, td {
        border: 1px solid orange;
      }
      table {
        border-collapse: collapse;
        empty-cells: show;
        display:
      }
      th, td:first-child{
        color: orange;
        background-color: maroon;
      }
      td {
        width: 15em;
        height: 20px;
        color: black;
        background-color: rgb(255, 204, 102);
      }
    </style>
</head>
<p>
   <body>


     <a href="HMHome.html"><img src="Hokiematchlogo.png"  HEIGHT="75" WIDTH="250" /></a>

   <br />
   <br />

   <a  href="HMStudentlogin.php" align="right">Student Log In</a>


   <p>


   <nav>
   <ul class="nav nav-pills">
     <li role="presentation" class="dropdown">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
       Home <span class="caret"></span>
     </a>
     <ul class="dropdown-menu">
       <li role="presentation"><a href="HMHome.html">Home</a></li>
       <li role="presentation"><a href="HMHousingoptions.html">Housing Options</a></li>
       <li role="presentation"><a href="HMExampleprofile.html">Example Profile Match-Up</a></li>
     </ul>
   </li>

   <li role="presentation" class="dropdown">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     Personal Information <span class="caret"></span>
   </a>
   <ul class="dropdown-menu">
     <li role="presentation"><a href="personalinfo.html">Personal Information</a></li>
     <li role="presentation"><a href="roommatePref.html">Roommate Preferences</a></li>
     <li role="presentation"><a href="apartmentPref.html">Apartment Preferences</a></li>
       <li role="presentation"><a href="matchUP.html">Find Similar People!</a></li>

   </ul>
   </li>

   <li role="presentation" class="dropdown">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
   Admin Login <span class="caret"></span>
   </a>
   <ul class="dropdown-menu">
   <li role="presentation"><a href="HMadminlogin.php">Admin Login</a></li>

   </ul>
   </li>

   </ul>
   </nav>
   <br />
   <br />
   </p>
   </nav>
<body>
  <?php
    $login_ID = 0;
    $name = "";
    $username = "";
    $password = "";
    if (isset($_POST["login_ID"])) $login_ID = $_POST["login_ID"];
    if (isset($_POST["name"])) $name = $_POST["name"];
    if (isset($_POST["username"])) $username = $_POST["username"];
    if (isset($_POST["password"])) $password = $_POST["password"];
    require_once("db.php");
    echo "<table>";
    echo "<thead>";
    echo "<th>Login_ID</th><th>Name</th><th>Username</th><th>Password</th>";
    echo "</thead>";
    echo "<td>$login_ID</td><td>$name</td><td>$username</td><td>$password</td>";
    if ($login_ID > 5) {
      $sql = "insert into login(login_ID, name, username, password)
              values('$login_ID','$name', '$username', '$password')";
      $result=$mydb->query($sql);
      if ($result==1) {
        echo "<p>A new user has been added.</p>";
      }
    } else {
      echo "That login ID already exists!";
    }
  ?>
</body>
</html>
