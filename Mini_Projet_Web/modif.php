<?php

$id=$_GET['id'];

include "connexion.php";

        $sql="select * from etudiant where id =$id";
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

function cocher(etat) {
var inputs = document.getElementById('formu').getElementsByTagName('input');
for(i = 0; i < inputs.length; i++) {
if(inputs[i].type == 'checkbox')
inputs[i].checked = etat;
}
}

</script>


</head>
<body>
<h1 align="center"><font face="forte" color="#832510">Modifier un Etudiant</font></h1>
<form action="modif2.php" method="post">
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
		
		
	</tr>
</thead>






<?php
while($ligne=mysqli_fetch_assoc($res))
{


?>
	<tr align="center">
		<td>
			<img src="<?php Echo $ligne['photo'] ?>" width="80">


		</td>
		<td>
			<input type="text" name="matricule" value="<?php Echo $ligne['matricule'] ?>"size="10">

			</td>
		<td><input type="text" name="nom" value="<?php Echo $ligne['nom'] ?>" size="10"></td>
		<td><input type="text" name="prenom" value="<?php Echo $ligne['prenom'] ?>" size="10"></td>
		<td><input type="text" name="adresse" value="<?php Echo $ligne['adresse'] ?>" size="10"></td>
		<td>
			<input type="date" name="naissance" value="<?php Echo $ligne['naissance'] ?>" size="10"></td>

		<td>

			<select name="filiere">
<?php

$sql1="select * from filiere ";
$res1=mysqli_query($connect,$sql1);

while($ligne1=mysqli_fetch_assoc($res1))
{
	if($ligne['filiere']==$ligne1['nom_filiere'])
	{
?>
				
				<option value="<?php echo $ligne1['nom_filiere']   ?>" selected><?php echo $ligne1['nom_filiere']   ?></option>
<?php
}
else
{
	?>
<option value="<?php echo $ligne1['nom_filiere']   ?>"><?php echo $ligne1['nom_filiere']   ?></option>
	<?php
}
}
?>
			</select>
				

			</td>




		<td><input type="text" name="stage" value="<?php Echo $ligne['stage'] ?>" size="10"></td>
		<td><input type="email" name="email" value="<?php Echo $ligne['email'] ?>" size="10"></td>
		<td>

			<input type="password" name="password" value="<?php Echo $ligne['password'] ?>" size="10"></td>

			<input type="hidden" name="id" value="<?php Echo $ligne['id'] ?>" size="10">
		
		
	</tr>
<?php
}

?>
<tr align="center">
	<td colspan="10">
		<input type="submit" value="Modif" class="btn btn-dark">
		<a href="homecopie.php"><button type="button" class="btn btn-dark">Annuler</button>

	</td>
</tr>

</form>
</table>
</body>
</html>