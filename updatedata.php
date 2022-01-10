<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];
$stu_sexe = $_POST['ssexe'];
$stu_statut = $_POST['sstatut'];
$stu_p1 = $_POST['typ_permis1'];
$stu_p2 = $_POST['typ_permis2'];
$stu_p3 = $_POST['typ_permis3'];
 
include 'config.php';

$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}',sclass = '{$stu_class}', sphone = '{$stu_phone}', ssexe = '{$stu_sexe}', sstatut= '{$stu_statut}', typ_permis1 = '{$stu_p1}', typ_permis2 = '{$stu_p2}', typ_permis3 = '{$stu_p3}' WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
