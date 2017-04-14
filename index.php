<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WELCOME|ANSAT Login</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery-3.1.0.min.js"></script>

</head>
<body>
<div class="login-page">
    <div class="form">
        <form method="post">
            <input required type="text" placeholder="Username" name="username"/>
            <input required type="password" placeholder="Password" name="password"/>
            <input required type="text" placeholder="Email Address" name="email"/>
            <input required type="text" placeholder="Name" name="name"/>
            <input required type="text" placeholder="Gender: M || F" name="sex"/>
            <span style="float:left; margin-bottom: 1.5em;"><select name="user_type">
                 <option value="client">Client</option>
                 <option value="author">Author</option>
            </select></span>
            <input required type="date"  name="dob"/>
            <input type="submit" name="register" style="color: #000"/><p style="color: #fff"></p>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <?php if(isset($_POST['register'])){

// MySQL Hostname
$sql_db_host = "localhost";
// MySQL Database User
$sql_db_user = "vitwag3b";
// MySQL Database Password
$sql_db_pass = "Sharma638??";
// MySQL Database Name
$sql_db_name = "vitwag3b_wp577";

$sqlconnect = mysqli_connect($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$name = $_POST['name'];
$gender = $_POST['sex'];
$user_type = $_POST['user_type'];
$dob = $_POST['dob'];
   $queryone = mysqli_connect($sqlconnect, "INSERT INTO user (username, password, email, name, sex) VALUES ('$username', '$password', '$email', '$name', '$sex')");
   if($queryone){
      header("Location: http://vitwale.com/ansat/");
      echo '<script language="javascript">';
      echo 'alert("working ")';
      echo '</script>';
   }
   else {
      echo '<script language="javascript">';
      echo 'alert("not working ")';
      echo '</script>';
   }
        }
        ?>
    </div>
</div>
</body>
</html>
