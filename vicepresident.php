<?php
session_start();
include "connectionfile.php";
$president_vote = $_POST['president'];
$_SESSION['president'] = $president_vote;
$user = $_SESSION['username'];
$query = "SELECT * FROM votes WHERE student_id = ".$user;
$result=mysql_query($query);
if ($result){
$count=mysql_num_rows($result);
if($count>=7){
	header("location:voted_already.php");
} else {
	$result = mysql_query("SELECT * FROM votes WHERE student_id = ".$user." AND vote_position_id = 2");
	if(mysql_num_rows($result)>0){
		header("location:secretary.php");
}
}
}
$query = "SELECT * FROM candidates WHERE position_id = 2";
$result=mysql_query($query);
if($result){
	$numofcandidates = mysql_num_rows($result);
}else{
	header("location:error.php");
}
?>
<html>
<head>
<title>Vice President</title>
</head>
<body>
<form name="vicepresident" action="secretary.php" method="POST">
<div align="left"><br>
	For Vice President, I would like to vote for: <br>
<?php	
	while ($row = mysql_fetch_row($result)) {
	echo	"&nbsp&nbsp&nbsp&nbsp<input type=\"radio\" name=\"vicepresident\" value=";
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