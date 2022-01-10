
<head>
	<title></title>
</head>
<body>
	<h1>Student</h1>
	<hr>
	<table border="1">
		<tr>
			
		<th>num</th>
		<th>Name
		</tr>
	<?php 
require 'config.php';
$requete="SELECT * from personne ";

$query=mysqli_query($conn,$requete);
while($rows=mysqli_fetch_assoc($query))
	{$sid=$rows['id'];
     echo "<tr>";
     echo "<td>".$rows['id']."</td>";
     echo "<td>".$rows['Nom']."</td";
    
     echo "</tr>";

	}
?>
</table>

<h1>Users</h1>
	<hr>
	<table border="1">
		<tr>
			
		<th>num</th>
		<th>Name
		</tr>
	<?php 

$requete="SELECT * from tbl_user";
$query=mysqli_query($conn,$requete);
while($rows=mysqli_fetch_assoc($query))
	{$id=$rows['id'];
     echo "<tr>";
     echo "<td>".$rows['id']."</td>";
     echo "<td>".$rows['username']."</td";
    
     echo "</tr>";

	}
?>
</table>
</body>
</html>