<?php
include "connexion.php";
$id=$_POST['id'];
$matricule=$_POST['matricule'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$naissance=$_POST['naissance'];
$filiere=$_POST['filiere'];
$stage=$_POST['stage'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="update etudiant set matricule='$matricule', nom = '$nom',prenom='$prenom' , adresse='$adresse', naissance='$naissance' , filiere='$filiere', stage='$stage', password='$password' where id = $id";


if(mysqli_query($connect,$sql))
header('location:homecopie.php');




?>