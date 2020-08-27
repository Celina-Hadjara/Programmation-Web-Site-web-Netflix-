<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
// On commence par récupérer les champs
if(isset($_POST['Nom'])) $nom=$_POST['Nom'];
else $nom="";
if(isset($_POST['Prenom'])) $prenom=$_POST['Prenom'];
else $prenom="";
if(isset($_POST['Sexe'])) $sexe=$_POST['Sexe'];
else $sexe="";
if(isset($_POST['AnneeN'])) $annee=$_POST['AnneeN'];
else $annee="";
if(isset($_POST['Email'])) $email=$_POST['Email'];
else $email="";
if(isset($_POST['Pwd'])) $mdp=$_POST['Pwd'];
else $mdp="";
if(isset($_POST['Numtel'])) $tel=$_POST['Numtel'];
else $tel="";
if(isset($_POST['monfichier'])) $photo=$_POST['monfichier'];
else $photo="";

//On vérifie si les champs sont vides
If(empty($email) OR empty($nom) OR empty($prenom) )
{
echo '<center>Attention, tout les champs ne peuvent pas rester
vide !</center>';?>
<p>Cliquez <a href="./inscription.html">ici</a> pour s'inscrire</p>
<?php
}
else {
include("BD.php");

//On compte ds la table membre la ou les ligne où le champ pseudo est égale au pseudo posté.
$sql = "SELECT Email FROM Abonne WHERE Email='$email' ";
$data = mysqli_query($conn,$sql);
$reqrow = mysqli_num_rows ($data);
 
//Si il n'y a aucune ligne donc le pseudo est inexistant
if ($reqrow == 1){

    echo 'Il y a déjà une personne qui utilise '.$email .' comme email !<br><br>';
    ?>
<p>Cliquez <a href="./inscription.html">ici</a> pour s'inscrire</p>
<?php
}else{
    //On continue et on enregistre.
    $query = "INSERT INTO Abonne( Nom, Prenom, Sexe, AnneeN,Email ,Pwd, NumPortable, Photo) VALUES( '$nom', '$prenom','$sexe','$annee','$email','$mdp', '$tel', '$photo' );";
mysqli_query($conn,$query).mysqli_error($conn);
    echo(mysqli_error($conn));
    //On affiche les coordonnées 
    echo "Félicitations ! Vous êtes inscrit sous ces coordonnées : | ".$nom." | ".$prenom." | ".$sexe." | ".$annee." | ".$email." | ".$tel." | ".$photo."<br>";
    
        ?>
        <p>Cliquez <a href="./connexion.html">ici</a> pour se connecter</p>
        <?php
}
}	
?>
