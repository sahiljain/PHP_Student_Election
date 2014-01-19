
<?php
function check_userid($inputuserid){
	if(!preg_match("([^0-9])", $inputuserid)){
	return true;
} else{
	return false;
}
}

function check_password($inputpass){
	if(!preg_match("([^0-9!@#$%^&*()_+-`])", $inputpass)){
	return true;
} else{
	return false;
}
}
?>


