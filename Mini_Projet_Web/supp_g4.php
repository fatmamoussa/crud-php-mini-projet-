<?php
include "connexion.php";
$id=$_GET['id'];


$sql="delete from etudiant where id= $id ";
if(mysqli_query($connect,$sql))
	header('location:homecopie.php');




?>