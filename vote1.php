<?php
session_start();
?>
<html>
<head>
<title>MSS Voting</title>
</head>
<body>
	<a href="president.php">asdf</a>
<form name="myform" action="checkover.php" method="POST">
<div align="left"><br>
<input type="radio" name="group1" value="Milk"> Milk<br>
<input type="radio" name="group1" value="Butter" checked> Butter<br>
<input type="radio" name="group1" value="Cheese"> Cheese
<hr>
<input type="radio" name="group2" value="Water"> Water<br>
<input type="radio" name="group2" value="Beer"> Beer<br>
<input type="radio" name="group2" value="Wine" checked> Wine<br>
</div>
</form>
</body>
</html>