<?php
$id=$_GET['id'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];


include"homecopie.php";
echo "<center>Etes vous sûr de supprimer ".$nom." ".$prenom;
?>
<br>

<a href="supp_g4.php?id=<?php echo $id ?>"><button type="button">Oui</button></a>
<a href="homecopie.php"><button type="button">Non</button></a>