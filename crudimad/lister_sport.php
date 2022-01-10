<html>
<head>
	<title></title>
</head>
<body>
	<h1>Liste des sportifs</h1>
	<hr>
	<table border="1">
		<tr>
			
		<th>Sport</th>
		<th>Name</th>
		</tr>
	<?php 
require 'config.php';
$requete="SELECT * FROM studentsport";
  
$query=mysqli_query($conn,$requete);
while($rows=mysqli_fetch_assoc($query))
	{$Sport=$rows['name'];
     echo "<tr>";
     
     echo "<td>".$rows['name']."</td>";
     echo "<td>".$rows['nom']."</td";
    
     echo "</tr>";

	}
?>
</table>
</body>
</html>