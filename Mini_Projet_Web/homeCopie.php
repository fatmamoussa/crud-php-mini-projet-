<?php
include "connexion.php";

        $sql="select * from etudiant";
        $res=mysqli_query($connect,$sql);
        
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page d'accueil</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
	
	function cocher(etat)
	{
		var inputs = document.getElementById('formu').getElementsByTagName('input')
		for (var i = 0; i < inputs.length; i++) {
			if(inputs[i].type=='checkbox')
				inputs[i].checked = etat
		}
	}
</script>


</head>
<body>
	


<h1 align="center"><font face="forte" color="#832510">Liste des Etudiants</font></h1>
<form id="formu" action="suppmult_g4.php" method="post">

<table class="table">
    <thead class="table-dark">

	<tr align="center">
		<th>Photo</th>
		<th>Matricule</th>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Adresse</th>
		<th>Naissance</th>
		<th>Filière</th>
		<th>Stage</th>
		<th>Email</th>
		<th>Password</th>
		<th>Action</th>
		<th>Supp multiple</th>
	</tr>
</thead>






<?php
while($ligne=mysqli_fetch_assoc($res))
{


?>
	<tr align="center">
		<td><img src="<?php Echo $ligne['photo'] ?>" width="80"></td>
		<td><?php Echo $ligne['matricule'] ?></td>
		<td><?php Echo $ligne['nom'] ?></td>
		<td><?php Echo $ligne['prenom'] ?></td>
		<td><?php Echo $ligne['adresse'] ?></td>
		<td><?php Echo $ligne['naissance'] ?></td>
		<td><?php Echo $ligne['filiere'] ?></td>
		<td><?php Echo $ligne['stage'] ?></td>
		<td><?php Echo $ligne['email'] ?></td>
		<td><?php Echo $ligne['password'] ?></td>
		<td>

			<a href="suppinter_g4.php?id=<?php Echo $ligne['id'] ?>&nom=<?php Echo $ligne['nom'] ?>&prenom=<?php Echo $ligne['prenom'] ?>"><button type="button" class="btn btn-dark">Supp</button></a>



				<a href="modif.php?id=<?php echo $ligne['id']  ?>">
					<button type="button" class="btn btn-dark">Modif</button></a>
		</td>
		<td><input type="checkbox" name="supp[]" value="<?php Echo $ligne['id'] ?>">
			
		</td>
	</tr>
<?php
}

?>

<tr align="center">
	<td colspan="11"></td>
	<td>
Tout Cocher <br><input type="checkbox" class="btn btn-dark" onclick="cocher(this.checked)">


<br>
		<input type="submit" value="Supprimer" class="btn btn-dark">
		 </td>
</tr>

</form>
</table>

</body>
</html>