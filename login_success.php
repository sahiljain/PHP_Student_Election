<?php
session_start();
if(isset($_SESSION['username']) == false){
header("location:index.php");
}
?>
<html>
<body>
Welcome, <?php echo $_SESSION['name'] ?>!
<br><br>
Click <a href="president.php">here</a> to begin the voting process.
</body>
</html>