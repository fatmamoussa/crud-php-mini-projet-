<?php
include"connexion.php";
$matricule=$_POST['matricule'];

$sql1="select * from etudiant where matricule = '$matricule' ";
$res1=mysqli_query($connect,$sql1);



//echo $matricule;
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$naissance=$_POST['naissance'];
$filiere=$_POST['filiere'];
$stage=$_POST['stage'];

$email=$_POST['email'];
$password=$_POST['password'];


//***************Upload**************

$file_name=$_FILES['photo']['name'];

$file_tmp_name=$_FILES['photo']['tmp_name'];

$file_dest = 'photos/'.$file_name;

$file_extension=strrchr($file_name,".");

$extensions_autorisees= array('.jpg' ,'.JPG' , '.png' , '.PNG','.gif', '.GIF');

$photo="photos/".$file_name;

if(mysqli_num_rows($res1)==1)
{
	include 'inscription.php';
	echo"<center>Matricule Existant";
}

else if(!in_array($file_extension,$extensions_autorisees))
{
	include 'inscription.php';
	echo"<center>Extension non autorisée";
}

else
{

move_uploaded_file($file_tmp_name,$file_dest);

$sql="insert into etudiant(matricule,nom,prenom,adresse,naissance,filiere,stage,photo,email,password)values('$matricule','$nom','$prenom','$adresse','$naissance','$filiere','$stage','$photo','$email','$password')";
if(mysqli_query($connect,$sql))
	header('location:homecopie.php');

}
?>