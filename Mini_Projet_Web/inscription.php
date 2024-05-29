<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page d'inscription</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<h1 align="center"><font face="forte" color="#832510">Inscription</font></h1>
<form action="inscription2.php" method="post" enctype="multipart/form-data">
	
	<table align="center">
		<tr>
			<th>Matricule:</th>
			<td><input type="text" name="matricule" placeholder="Tapez votre matricule" required class="form-control" ></td>
		</tr>
		<tr>
			<th>Nom:</th>
			<td><input type="text" name="nom" placeholder="Tapez votre nom"  class="form-control" ></td>
		</tr>
		<tr>
			<th>Prénom:</th>
			<td><input type="text" name="prenom" placeholder="Tapez votre prénom"  class="form-control" ></td>
		</tr>
		<tr>
			<th>Adresse:</th>
			<td><input type="text" name="adresse" placeholder="Tapez votre adresse"  class="form-control" ></td>
		</tr>
		<tr>
			<th>Naissance:</th>

			<td><input type="date" name="naissance" placeholder="Tapez votre naissance"  class="form-control" ></td>

		</tr>
		<tr>
			<th>Filière:</th>
			<td>

<?php
include 'connexion.php';
$sql="select * from filiere";
$res=mysqli_query($connect,$sql);


?>

				<select class="form-select" name="filiere">


<?php

while($ligne=mysqli_fetch_assoc($res))
{

?>
	<option value="<?php echo $ligne['nom_filiere']  ?>"><?php echo $ligne['nom_filiere']  ?></option>

<?php
}
?>			

			</select>

		</td>


		</tr>
		<tr>
			<th>Stage:</th>
			<td><select class="form-select" name="stage">




				<option value="1">1</option>
				



			</select></td>
		</tr>
		<tr>
			<th>Photo:</th>
			<td><input type="file" name="photo" class="form-control" ></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><input type="email" name="email" placeholder="Tapez votre email"  class="form-control" ></td>
		</tr>
		<tr>
			<th>Mot de passe:</th>
			<td><input type="password" name="password" placeholder="Tapez votre mot de passe"  class="form-control" ></td>
		</tr>
		<tr>
			<th><input type="submit" value="Valider" class="btn btn-dark"></th>
			<td><input type="reset" value="Annuler" class="btn btn-dark"></td>
		</tr>
	</table>
</form>

</body>
</html>