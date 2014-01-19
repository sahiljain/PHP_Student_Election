<html>
<head>
</head>
<body>
<?php
include('connectionfile.php');
$user = $_POST[username];
$pass = $_POST[password];


if(!preg_match("([^0-9])", $user)){
	echo "onlynums";
}else{
	echo "notonlynums";
}



?>
</body>

</html>
