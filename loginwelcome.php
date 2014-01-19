<?php
session_start();
include "connectionfile.php";
$user = $_POST[username];
$pass = $_POST[password];
$user = stripslashes($user);
$pass = stripslashes($pass);
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);
$sql="SELECT * FROM schoolusers WHERE Userid='$user' and Password='$pass'";
$result=mysql_query($sql);
if ($result){
$count=mysql_num_rows($result);
if($count==1){
//session_start();
$_SESSION['username'] = $user;
$_SESSION['password'] = $pass;
$rows = mysql_fetch_array($result);
$name = $rows['Name'];
$_SESSION['name'] = $name;
header("location:login_success.php");
} else {
echo "Wrong Username or Password.";
}
}?>