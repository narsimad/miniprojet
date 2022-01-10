<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Site de rencontre</title>
</head>
<body>
<?php
require('db_conn.php');
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$_SESSION['username'] = $username;
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `tbl_user` WHERE username='$username' AND password ='$password'";
    $conn = mysqli_connect("localhost","root","","mini projet") or die("Connection Failed");
	$result = mysqli_query($conn,$query) or die("Query Unsuccesfull.");
	
	if (mysqli_num_rows($result) == 1) {
		$user = mysqli_fetch_assoc($result);
		// vérifier si l'utilisateur est un administrateur ou un utilisateur
		if ($user['type'] == 'admin') {
			header('location: crud/header.php');		  
		}else{
			header('location: index.php');
		}
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Bienvenu au site de rencontre !</h1>

	<div class="form">
		<h1>Se Connecter :</h1>
	<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
	<input type="password" class="box-input" name="password" placeholder="Mot de passe">
		<input type="submit" value="Connexion " name="submit" class="button">
	<p class="message">N'est pas encore inscrit?
   			   <a href="register.php">Créer un nouveau compte !</a>
  			  </p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</div>
</form>
</body>
</html>
<style type="text/css">
body {
  background: #008080;
  font-family: sans-serif;
}
.box input{
	background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size:14px;
}
.box-title {
  width: 300px;
  margin: auto;
  position: relative;
  background:#FFFFFFFF;
  margin: 100px auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 20px 20px rgba(0, 0, 0, 0.24);
}
.form {
  width: 300px;
  margin: auto;
  position: relative;
  background:#FFFFFFFF;
  margin: 100px auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 20px 20px rgba(0, 0, 0, 0.24);
}
.form .button {
	background: #FFC107;
  width: 100%;
  border: 0;
  padding: 15px;
  color:#FFFFFF;
  font-size: 14px;
  cursor: pointer;
}
.errorMessage {
  background: #F2DEDE;
  width: 95%;
  border: 0;
  padding: 15px;
  color:#FF0000;
  font-size: 14px;
  cursor: pointer;
}
}