<?php

 $nat_name = $_POST['name_nat'];
 $nat_code = $_POST['code_nat'];

 $conn = mysqli_connect("localhost","root","","mini projet") or die("Connection Failed");

$sql = "INSERT INTO nationalite(code,nom) VALUES ('{$nat_code}','{$nat_name}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>