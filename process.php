<html>
<head>
</head>
<body>
<?php
$username=$_POST['username'];
$password=$_POST['password'];


if($username == 'amal' && $password == 'pass'){
	echo "logon sucsuss";
}
else{
	
echo "invalid data";
}



?>
</body>
<html>