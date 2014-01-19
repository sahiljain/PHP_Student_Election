<?php
session_start();
include "connectionfile.php";
$user = $_SESSION['username'];

$query = "INSERT INTO votes (student_id, vote_position_id, vote_cand_id) VALUES (".$user.",1,".$_SESSION['president'].")";

mysql_query($query);
$query = "INSERT INTO votes (student_id, vote_position_id, vote_cand_id) VALUES (".$user.",2,".$_SESSION['vicepresident'].")";

mysql_query($query);
$query = "INSERT INTO votes (student_id, vote_position_id, vote_cand_id) VALUES (".$user.",3,".$_SESSION['secretary'].")";

mysql_query($query);
session_destroy(); 
?>
<html>
<head>
</head>
<body>
	<br>
Thank you for voting!
</body>
</html>