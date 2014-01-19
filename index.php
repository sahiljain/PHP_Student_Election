<?php
session_start(); 
session_destroy();
?>
<html>
<head>
</head>
<body>

<form method="POST" action="loginwelcome.php">
<p>Username: <input type="text" name="username" size ="15" maxlength="20"/></p>
<p>Password: <input type="password" name="password" size ="15" maxlength="20"/></p>
<p><input type="submit" name="submit" value ="submit" size ="15" maxlength="20"/></p>
</form>

</body>

</html>
