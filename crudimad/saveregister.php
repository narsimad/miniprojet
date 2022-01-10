<?php

 $pseudo = $_POST['pseudo'];

 $username = $_POST['username'];
 $passeword = $_POST['passeword'];
 $passeword2 = $_POST['passeword2'];

 conn = mysqli_connect("localhost","root","","mini projet") or die("Connection Failed");

$sql = "INSERT INTO tbl_user(pseudo,username,passeword) VALUES ('{$pseudo}','{$username}','{$passeword}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
