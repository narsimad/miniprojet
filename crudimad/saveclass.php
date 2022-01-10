<?php

 $activite_code = $_POST['code_activite'];
 $activite_name = $_POST['name_activite'];
 
// $stu_class = $_POST['class'];
//  $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","mini projet") or die("Connection Failed");

$sql = "INSERT INTO activites_sportifs(code,activites) VALUES ('{code_activite}','{$activite_name}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

//_________________________________________________________

$conn = mysqli_connect("localhost","root","","mini projet") or die("Connection Failed");

$sql = "DELETE FROM activites_sportifs(code,activites) WHERE 'code' = {$activite_code}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
