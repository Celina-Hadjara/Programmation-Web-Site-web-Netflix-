<?php

ini_set('display_errors','on');
error_reporting(E_ALL);
$message='';
if(isset($_POST['Email'])) $email=$_POST['Email'];
else $email="";
if(isset($_POST['Pwd'])) $mdp=$_POST['Pwd'];
else $mdp="";

if (empty($email) OR empty($mdp) ) //Oublie d'un champ
{
    $message = '<p>Une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</p>
	<p>Cliquez <a href="./connexion.html">ici</a> pour revenir</p>';
}else //On check le mot de passe
    {
            include('connexion.html'); // On inclut le formulaire d'identification
            include("BD.php");
            $sql = "SELECT Email, Pwd , Prenom FROM Abonne WHERE Email='$email' AND Pwd ='$mdp'";
            $req = mysqli_query($conn,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
            $rows = mysqli_num_rows($req);
            $data = mysqli_fetch_array($req);
            if($rows==1){

            $prenom =$data['Prenom'];
            session_start();
            $_SESSION['Email'] = $email;
            $_SESSION['Pwd'] = $mdp;
            $_SESSION['Prenom']=$prenom;
            print_r($_SESSION);
            header ("Location:serie.php", true);
            exit();
            }else{
                echo '<p>Mauvais login / password. Merci de recommencer</p>';
                exit();
            }
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres
         }
?>