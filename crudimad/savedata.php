<?php

 $stu_ordre = $_POST['N°Ordre'];

 $stu_adresse = $_POST['Adresse'];
 $stu_ville = $_POST['Ville'];
 $stu_pays = $_POST['Pays'];


 $stu_email = $_POST['E-mail'];
 $stu_nom = $_POST['Nom'];

 $stu_religion = $_POST['Religion'];
$stu_gr = $_POST['Groupe Sanguin'];
$stu_lieu = $_POST['Lieu De Naissance'];
$stu_prenom = $_POST['Prénom'];

$stu_statut = $_POST['Statut'];
$stu_ = $_POST[''];
$stu_ = $_POST[''];
$stu_ = $_POST[''];
 
$conn = mysqli_connect("localhost","root","","mini projet") or die("Connection Failed");

$sql = "INSERT INTO student(N°Ordre,Adresse,Ville,Pays,E-mail,Nom,Religion,Groupe Sanguin,Lieu De Naissance,Prénom,Statut,,) VALUES ('{$stu_ordre}','{$stu_adresse}','{$stu_ville}','{$stu_pays}','{$stu_email}','{$stu_nom}','{$stu_religion}','{$stu_gr}','{$stu_lieu}','{$stu_prenom}','{$stu_statut}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
