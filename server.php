<?php  
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	
	 else
    {
        session_destroy();
        session_start(); 
    }
$username="";
$email="";
$password="";
$errors=array();


//connect to the database

$db=mysqli_connect('localhost','root','','registrationnew');

//if the register button is clicked
if(isset($_POST['register'])){
	 $username=mysqli_real_escape_string($db,$_POST['username']);
     $email=mysqli_real_escape_string($db,$_POST['email']);
     $password_1=mysqli_real_escape_string($db,$_POST['password_1']);
     $password_2=mysqli_real_escape_string($db,$_POST['password_2']);
   
    // ensure that form field are filled properly

     if (empty($username)) {
     	array_push($errors, "username is required");
     	
     }
     if (empty($email)) {
     	array_push($errors, "email is required");
     	
     }
      if (empty($password_1)) {
     	array_push($errors, "password_1 is required");
     	
     }
      if ($password_1 != $password_2) {
     	array_push($errors, "The two passwords do not match");
     	
     }
	 if (count($errors)==0) {
     	$password=md5($password_1);//encrypt password before storing in database
     	$sql="INSERT INTO user(username,email,password) 
     	                 VALUES ('$username','$email','$password')";
     	# code...
    mysqli_query($db, $sql);
	$_SESSION['username']=$username;
	$_SESSION['succcess']="You are now logged in";
	header('location:index.php');//redirect into home page
     }
}
if(isset($_POST['login'])){

	
	 $username=mysqli_real_escape_string($db,$_POST['username']);
     $password=mysqli_real_escape_string($db,$_POST['password']);
   
    // ensure that form field are filled properly

     if (empty($username)) {
		 
     	array_push($errors, "username is required");
     	
     }
     if (empty($password)) {
     	array_push($errors, "password is required");
	 }
	 	if(count($errors)== 0){
		$password==md5($password);//encrypt password before comparing with that from database
		$query="SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result=mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1){
			//log user in
			
			
			$_SESSION['username']=$username;
			
	        $_SESSION['succcess']="You are now logged in";
	        header('location:index.php');//redirect into home page
		}
		else{
			array_push($errors,"Wrong  username/password combination");
            header('location:login.php');
		}
		
	}
}


// logout
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location:login.php');
}



	
	


?>