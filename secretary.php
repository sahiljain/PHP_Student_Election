<?php
session_start();
include "connectionfile.php";
$vicepresident_vote = $_POST['vicepresident'];
$_SESSION['vicepresident'] = $vicepresident_vote;
$user = $_SESSION['username'];
$query = "SELECT * FROM votes WHERE student_id = ".$user;
$result=mysql_query($query);
if ($result){
$count=mysql_num_rows($result);
if($count>=7){
	header("location:voted_already.php");
} else {
	$result = mysql_query("SELECT * FROM votes WHERE student_id = ".$user." AND vote_position_id = 3");
	if(mysql_num_rows($result)>0){
		header("location:voted_already.php");
}
}
}
$query = "SELECT * FROM candidates WHERE position_id = 3";
$result=mysql_query($query);
if($result){
	$numofcandidates = mysql_num_rows($result);
}else{
	header("location:error.php");
}
?>
<html>
<head>
<title>Secretary</title>
</head>
<body>
<form name="secretary" action="confirmation.php" method="POST">
<div align="left"><br>
	For Secretary, I would like to vote for: <br>
<?php	
	while ($row = mysql_fetch_row($result)) {
	echo	"&nbsp&nbsp&nbsp&nbsp<input type=\"radio\" name=\"secretary\" value=";
	echo $row[0]/*['ID']*/;
	echo ">";
	echo $row[1];
	echo "<br>";
}
?>	
<input type="submit" name="submit" value ="Next" size ="15" maxlength="20"/>
</div>
</form>
</body>
</html>