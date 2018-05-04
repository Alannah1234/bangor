





<?php


$id = $_POST['idco'];
$mdp = $_POST['mdpco'];


try
{
   // On se connecte à MySQL
   $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');
}
catch(Exception $e)
{
   // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT index_auteur FROM auteur WHERE mail="'.$id.'" AND motdepasse="'.$mdp.'"');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
   if($donnees['index_auteur']==null)
   {
   header('Location:connexion.html');
}
else{
   header('Location: profil.php?idco='.$id."&mdpco=".$mdp);
}
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>