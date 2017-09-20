<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
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
$username = 'Rasheed';
$password = 'hey';
if (isset($_POST['submit'])){
    if(!empty($_POST['username'])){
     $username = $_POST['username']; // Put my calculations here
    } 
    if(!empty($_POST['passsword'])){
	$password = $_POST['password'];
    }
    if($username == 'Rasheed' && $password == 'hey'){
	$newURL = "/index.php";
    header('Location: '.$newURL);
    }else{
        echo "Invalid password or username";
	}
}
// http://www.developer.com/ws/creating-a-mobile-friendly-website.html & https://www.phpclasses.org/blog/post/262-10-Tips-to-Adapt-PHP-Web-Sites-for-Mobile-Devices.html & https://webdesign.tutsplus.com/articles/a-simple-responsive-mobile-first-navigation--webdesign-6074
?>
	<div class="form">
			<form action="login.php" method="POST">
				<nav id="primary_nav">
						 
					<ul>
						<li><a href="">Shopping Cart</a></li>
					 
						<li><a href="">Favorites</a></li>
					 
						<li><a href="">Recently Visited</a></li>
					 
						<li><a href="">Recently Ordered</a></li>
					 
						<li><a href="">Contact</a></li>
					 
						<li><a href="#home">Home</a></li>
					</ul>
				 
				</nav>
				Username:<br>
				<input type="text" name="username" Placeholder="Enter Your Username" maxlength="50" required /><br>
				
				
				 
				Password:<br>
				<input type="text" name="password" Placeholder="Enter Your Password" maxlength="50" required /><br>   
			   
			   
				<br> <input type="submit" value="submit" name="submit" Placeholder="Enter" /> <br>
				<footer>
					<p> Copyright &copy;2017 Rasheed Hinds <a href="34.229.11.59/index.php">IT 5236 </a> </p>
				</footer>
		</form>
	</div>
</body>
</html>
