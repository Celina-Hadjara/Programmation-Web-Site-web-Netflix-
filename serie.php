<html >
<link  rel="stylesheet"  type="text/css" media="screen" href="style1.css"/>
<body>


<div class="form">
<div id="monmenu">
<ul id ="menu">

  <li ><a href="./inscription_serie.html"> Inserer une série </a></li>
  <li ><a href="./connexion.html"> Se déconnecter </a></li>
</ul>
</div>
<div class="php">
<?php
session_start();
echo "Bienvenue ".  $_SESSION['Prenom'] . "<br>";
include("BD.php");
$sql = "SELECT * FROM Serie";
$req = mysqli_query($conn,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
?>
<div>
    <br>
<table border =1 style="width:100%" action="nouvelle.php" method="post" > 
    <th><font color="blue">Titre</th><th><font color="blue">Catégorie</th><th><font color="blue">Nombre d'épisode</th><th><font color="blue">Acteurs</th><th><font color="blue">Réalisateurs</th><th><font color="blue">Année de sortie </th><th><font color="blue">Description</th><th><font color="blue">Visioner</th>

<?php

while($data = mysqli_fetch_array($req)){
    echo ('<tr><td>'.$data['Titre_ser'].'</td><td>'.$data['Catégorie'].'</td><td>'.$data['Nb_ep'].'</td><td>'.$data['Acteurs'].'</td><td>'.$data['Realisateur'].'</td><td>'.$data['Annee_Sortie'].'</td><td>'.$data['Descri'].'</td><td>'.'<form name="x" action="nouvelle.php" method="post"> <input type ="hidden" value="'.$data["IDSer"].'" name="ID" ; /><input type ="submit" value="Visionner" name="Choix" onclick="header ("location : nouvelle.php")" /></form>'.'</td><tr>');
}
?>
</tr>
</div>
</body>
</html>