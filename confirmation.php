<?php
session_start();
include "connectionfile.php";
$secretary_vote = $_POST['secretary'];
$_SESSION['secretary'] = $secretary_vote;
?>
<html>
<head>
</head>
<body>
These are your votes:<br>
President:
<?php 
$result = mysql_query('SELECT first_name FROM candidates WHERE ID = '.$_SESSION['president']);
if($result){
echo mysql_result($result,0); 
}else{
	echo "Not yet completed.";
}
?>
<br>
Vice President:
<?php 
$result = mysql_query('SELECT first_name FROM candidates WHERE ID = '.$_SESSION['vicepresident']);
if($result){
echo mysql_result($result,0); 
}else{
	echo "Not yet completed.";
} 
?>
<br>
Secretary:
<?php 
$result = mysql_query('SELECT first_name FROM candidates WHERE ID = '.$_SESSION['secretary']);
if($result){
echo mysql_result($result,0); 
}else{
	echo "Not yet completed.";
} 
?>
<form name="vicepresident" action="finalpage.php" method="POST">
<br>
	<input type="submit" name="submit" value ="Submit Vote" size ="15" maxlength="20"/>

</form>
</body>

</html>
