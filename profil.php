<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>profil</title>
    <meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="ATM.com">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="css/animations.css" rel="stylesheet">

    <!-- Worthy core CSS file -->
    <link href="css/style.css" rel="stylesheet">
    <link href="profil.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
<nav class="container-fluid navbar-light blue">
    <a class="navbar-brand" href="connexion.html">Odyssee</a>
    <div class=row>
        <div class=col-md-3 col-md-8></div>
        <form class="form-inline">
            <input id="inputboutonrecherche" class="form-control" type="Recherche" placeholder="Recherche" aria-label="Recherche" >
            <button id="boutonrecherche" class="btn my-2 my-sm-0 ml-3"  type="submit">
                <i id="iconrecherche" class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
</nav>
<?php
$id = $_GET['idco'];
$mdp = $_GET['mdpco'];



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
$reponse = $bdd->query('SELECT index_auteur, nom, prenom FROM auteur WHERE mail="'.$id.'" AND motdepasse="'.$mdp.'"');
while ($donnees = $reponse->fetch())
{
   $auteur=$donnees['index_auteur'];
   $nomauteur=$donnees['nom'];
   $prenom=$donnees['prenom'];

}



// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM photo WHERE idxauteur="'.$id.'"');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
   $img = $donnees['index_photo'];
   $nom = $donnees['nom'];
   $id_album = $donnees['id_album'];
   $aauteur = $donnees['idxauteur'];
   $aauteur = $donnees['index_pposte'];
   $lastmodified = $donnees['date_pulication'];
   
   $depuis = $donnees['timeposte'];
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>
<div  class="container-fluid">
    <div class="row">
        <div class="container col-md-10">
            <div id="containerduprofil" class="container-fluid">
                <div id="profiltitre" class="media" style="background-image: url(http://fbuzz.net/wp-content/uploads/2012/insolite-03/Couverture-Insolite-Facebook-82.jpg);background-position: center center; ">
                    <img id="photoprofil" align="left" class="d-flex mr-4" src=<?php echo "dossierimage/".$nom; ?> alt="Generic placeholder image">
                    <div class="media-body">
                        <h2 id="prenomnomauteur" class="mt-0 font-weight-bold white-text" style="background-color: rgba(0, 112, 121, 0.7); color: #f0f0f0">
                            <?php echo $prenom." ".$nomauteur;?>
                        </h2>
                    </div>
                </div>
            </div>
            <div id="situation" class="container" style="background-color: #FFFFFF;">
                <h3 id="volonte"> Je cherche un stage de N semaines</h3>
            </div>
            <div id="profildetails" class="container">

            <div id="experiencesprofil" class="container col-md-4" style="background-color: #f0f0f0" >
                   <h3 style="color: #007079;">Experiences</h3>
                <div class="media" id="experience1">
                <h5 id="entreprise"> Microsoft</h5>
                <h6 id="date">Du 31/12/2016 au 3/2/2017</h6>
                <h6 id="details">Assistante Evangelist Marketing, Developer eXperience</h6>

            </div>
                <div class="media" id="experience2">
                    <h5 id="entreprise"> Bubulle</h5>
                    <h6 id="date"> 31/1/2019</h6>
                    <h6 id="details">Assistante chef de projet Marketing</h6>

                </div>
                <div class="media" id="experience3">
                    <h5 id="entreprise"> </h5>
                    <h6 id="date"></h6>
                    <h6 id="details"></h6>

                </div>
                <div class="media" id="experience4">
                    <h5 id="entreprise"> </h5>
                    <h6 id="date"></h6>
                    <h6 id="details"></h6>

                </div>
                <div class="media" id="experience5">
                    <h5 id="entreprise"></h5>
                    <h6 id="date"></h6>
                    <h6 id="details"></h6>

                </div>
            </div>
            <div id="formationsprofil" class="container col-md-4" style="background-color: #f0f0f0">
                <h3 style="color: #007079">Formations</h3>
                <div class="media" id="formation1">
                    <h5 id="ecole">ECE Paris</h5>
                    <h6 id="date">De 2015 a 2020</h6>
                    <h6 id="details">Pour la rentree 2018/2019 je pense m'orienter vers la majeur systemes d'informations, big data, cybersecurite.</h6>

                </div>
                <div class="media" id="formation2">
                    <h5 id="ecole">Lycee St Leon</h5>
                    <h6 id="date">De 2012 a 2015</h6>
                    <h6 id="details">Bac S, Spe Maths</h6>

                </div>
                <div class="media" id="formation3">
                    <h5 id="ecole"></h5>
                    <h6 id="date"></h6>
                    <h6 id="details"></h6>

                </div>
            </div>
            </div>
         </div>

        <div class="col-md-2 ">
            <ul id="navigationprincipale" class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo '"profil.php?idco='.$id."&mdpco=".$mdp.'"';?> style="color: #007079"><?php echo $prenom." ".$nomauteur;?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo '"actualite.php?idco='.$id."&mdpco=".$mdp.'"';?> style="color: #007079">Actualites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo '"reseau.php?idco='.$id."&mdpco=".$mdp.'"';?> style="color: #007079">Mon reseau</a>
                </li>

                <button type="button" style="background: #f0f0f0; color: #007079; border: #f0f0f0" class="btn btn-primary">
                    <span class="badge badge-light" style="color: #007079">4</span> Notifications
                </button>

                <li class="nav-item">
                    <a class="nav-link" href=<?php echo '"emploi.php?idco='.$id."&mdpco=".$mdp.'"';?> style="color: #007079">Emplois</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo '"messagerie.php?idco='.$id."&mdpco=".$mdp.'"';?> style="color: #007079">Messagerie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo '"evenement.php?idco='.$id."&mdpco=".$mdp.'"';?> style="color: #007079">Evenements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo '"parametre.php?idco='.$id."&mdpco=".$mdp.'"';?> style="color: #007079">Parametres</a>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>