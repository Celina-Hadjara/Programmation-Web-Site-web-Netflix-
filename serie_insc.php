<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
// On commence par récupérer les champs
if(isset($_POST['Titre'])) $titre=$_POST['Titre'];
else $titre="";
if(isset($_POST['Ctg'])) $categorie=$_POST['Ctg'];
else $categorie="";
if(isset($_POST['Epi'])) $episode=$_POST['Epi'];
else $episode="";
if(isset($_POST['Acteurs'])) $acteurs=$_POST['Acteurs'];
else $acteurs="";
if(isset($_POST['Realisateurs'])) $realisateurs=$_POST['Realisateurs'];
else $realisateurs="";
if(isset($_POST['Annee'])) $annee=$_POST['Annee'];
else $annee="";
if(isset($_POST['Descri'])) $descri=$_POST['Descri'];
else $descri="";
if(isset($_POST['monfichier'])) $photo=$_POST['monfichier'];
else $photo="";

//On vérifie si les champs sont vides
If( empty($titre) OR empty($categorie) OR empty($episode) OR empty($acteurs) OR empty($realisateurs) OR empty($annee) OR empty($descri) )
{
echo '<center>Attention, les champs ne peuvent pas rester vide !</center>';
}
else {
include("BD.php");
//On continue et on enregistre.
$query= "INSERT INTO Serie( Titre_ser, Catégorie,Descri, Nb_ep, Acteurs ,Realisateur, Annee_Sortie, Photo) VALUES('$titre', '$categorie', '$descri','$episode','$acteurs','$realisateurs','$annee', '$photo' );";
$descri=addslashes($descri);
mysqli_query($conn,$query).mysqli_error($conn);
    echo(mysqli_error($conn));
    //On affiche les coordonnées 
    echo "Félicitations ! Vous avez inscrit une série sous ces coordonnées : ". $titre." <br> | ".$categorie."<br> | ".$descri." <br>| ".$episode." <br>| ".$acteurs." <br>| ".$realisateurs." <br>| ".$annee." <br>| ".$photo."<br>";
}	
?>
