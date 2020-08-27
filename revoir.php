<html >
<link  rel="stylesheet"  type="text/css" media="screen" href="style1.css"/>
<body>
<div class="php">
<?php
include("BD.php");
session_start();
$id=$_SESSION['IDSer'];
$idep = $_POST['IDep'];
$_SESSION['IDEp'] = $idep;
$sql = "SELECT * FROM Serie INNER JOIN Episode ON IDSer = RefSer WHERE IDSer='$id' AND IDEp='$idep' ";
$req = mysqli_query($conn,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
$data = mysqli_fetch_array($req);
//On affiche les coordonnées 
echo ('Cher '.$_SESSION['Prenom']." vous avez choisis de ragarder l'épisode ".$data['Titre_ep'].' de la série '.$data['Titre_ser'].'.<form name="y" action="reprendre.php" method="post"><div id="monmenus"><input type ="hidden" value="'.$data["IDEp"].'" name="idep" ; /></form><div class="showcase-tope"> <form name="y" action="serie.php" method="post"><div id="monmenus"> <input type ="submit"  class="bt" value="  Accueil    " name="Choix" onclick="header ("location : serie.php")" /></form></div>');
$_SESSION['IDEp']=$data["IDEp"];
?>
<?php

?>
</body>
</html>