<!DOCTYPE HTML>
<html>
<head>
<title>Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1" content="text/html; charset=utf-8" />
<meta name="author" content="IT 5236">
<link rel="stylesheet" href="styles.css">
<style>
.form{
	float: left;
   margin: 10px;
   padding: 10px;
   max-width: 300px;
   height: 300px;
   border: 1px solid black;	
}



</style>
</head>
<body id="login">
<?php
if (isset($_POST['sent'])){
     $shirt= $_POST['userID']; // Put my calculations here
	 $size= $_POST['username'];
	 $money= $_POST['password'];
	 $email= $_POST['email'];
	 $errors=array();
	
	if (0 === $userID){
$errors['UserID']="Please enter the correct User ID.<br>";
     }
	if (!empty($_POST['username'])){
$errors['Username']="Please enter the correct Username.<br>";
     }

	if (!empty($_POST['passsword'])){
$errors['password']="Please enter the correct password.<br>";
     }
	if($username == 'Rasheed' && $password == 'hey'){
	$newURL = "/index.php";
    header('Location: '.$newURL);
    }else{
        echo "Invalid password or username";
	}

	if (0 == preg_match("/.+@.+\..+/", $_POST['email'])){
$errors['email']="Please enter a valid email address.<br>";
     }
	
    $string = " Welcome $username!"; 

     displayForm($userID, $username, $password , $email, $string);
}
else{

     displayForm('','','','','');
}

function displayForm($_userID, $_username, $_password , $_email, $_string){?>
<form action="form.php" method="POST">
	Username:<br>
    <input type="Shirt" name="Username" value="<?php $_username?>" Placeholder="Enter Your Username" maxlength="50" required ><br>
	Password:<br>
    <input type="Shirt" name="Password" value="<?php $_password?>" Placeholder="Enter Your Password" maxlength="50" required><br>
	User ID:<br>
    <input type="text" name="UserID" value="<?php $_userID?>"><br>
    Email Address:<br>
    <input type="text" name="Email" value="<?php $_email?>"><br>  
    <br> <input type="submit" value="submit" name="Sent" Placeholder="Enter"> <br>
    
    <br> <textarea rows="7" cols="25"><?php echo $_string; ?> </textarea> <br>
	<footer>
		<p> Copyright &copy;2017 Rasheed Hinds <a href="34.229.11.59/index.php">IT 5236 </a> </p>
	</footer>
</form>
<?php
}
?>



</body>
</html>
