<html >
<link  rel="stylesheet"  type="text/css" media="screen" href="style1.css"/>
<body>
<div class="php">
<?php
include("BD.php");
session_start();
$id = $_POST['ID'];
$_SESSION['IDSer'] = $id;
$sql = "SELECT * FROM Serie INNER JOIN Episode ON IDSer = RefSer WHERE IDSer='$id' ";
$req = mysqli_query($conn,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
$data = mysqli_fetch_array($req);
    //On affiche les coordonnées 
    echo ('Cher '.$_SESSION['Prenom'].' vous avez choisis la série '.$data['Titre_ser'].' de '.$data['Nb_ep'].' épisodes. <form name="y" action="reprendre.php" method="post"><div id="monmenus"><input type ="hidden" value="'.$data["IDEp"].'" name="idep" ; /></form><div class="showcase-tope"> <form name="y" action="serie.php" method="post"><div id="monmenus"> <input type ="submit"  class="bt" value="  Accueil    " name="Choix" onclick="header ("location : serie.php")" /></form><form name="y" action="reprendre.php" method="post"><div id="monmenus"><input type ="submit" class="btn" value="reprendre" name="Choix" onclick="header ("location : reprendre.php")" /></div></form></div>');
    
    ?>
    
    </div>

<div class="forme">
    <table border =2 action="revoir.php" action="reprendre.php"  method="post" > 
        <tr >
        <td>Titre d'épisode</td><td>Revoir</td>
    </tr>
    <?php
    $sql = "SELECT * FROM Serie INNER JOIN Episode ON IDSer = RefSer WHERE IDSer='$id'";
    $req = mysqli_query($conn,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());    
    while($data = mysqli_fetch_array($req)){
        echo ('<tr ><td>'.$data['Titre_ep'].'</td><td> <form name="x" action="revoir.php" method="post"> <input type ="hidden" value="'.$data["IDEp"].'" name="IDep" ; /><input type ="submit" value="revoir" name="Choix" onclick="header ("location : revoir.php")" /></form></td><tr>');
    }
    ?>
    </div>
    </body>
</html>

