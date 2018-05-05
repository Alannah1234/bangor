<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>parametre</title>
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
    <link href="parametre.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- javascript -->

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="container-fluid navbar-light blue">
    <a class="navbar-brand" href="connexion.html">
        <img id="logo" src="logof.png">
    </a>
    <a class="navbar-brand" href="administrateur.html">
        Administrateur
    </a>
    <div class=row>
        <div class=col-md-3 col-md-8></div>
        <form class="form-inline">
            <input id="inputboutonrecherche" class="form-control" type="Recherche" placeholder="Recherche" aria-label="Recherche" >
            <button id="boutonrecherche" class="btn my-2 my-sm-0 ml-3"  type="submit">
                <i id="iconrecherche" class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
</nav>

<div  class="container-fluid">
    <div class="row">
        <div class="container col-md-10">
            <form action="action_page.php">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Prenom</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="firstname" placeholder="Votre nouveau prenom...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Nom</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Votre nouveau nom...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="password">Mot de passe</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="password" name="passeword" placeholder="Mot de passe..." ></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="photoprofilupload">Photo de profil</label>
                    </div>
                    <div class="col-75">
                        <input id="photoprofilupload" type="file" title="Choisissez un fichier à importer" accept="image/*">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="photocouvupload">Photo de profil</label>
                    </div>
                    <div class="col-75">
                        <input id="photocouvupload" type="file" title="Choisissez un fichier à importer" accept="image/*">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="cvupload">CV (format .jpg)</label>
                    </div>
                    <div class="col-75">
                        <input id="cvupload" type="file" title="Choisissez un fichier à importer" accept="image/*">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="situation">Situation</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="situation" name="situation" placeholder="Situation..." ></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Experience</label>
                    </div>
                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Ajouter</button>
                    <div id="demo" class="collapse">

                        <div id="ajouteruneex" class="row">
                            <div class="col-25">
                                <label for="intitule">Intitule</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="intitule" name="intitule" placeholder="intitule.." ></input>
                            </div>
                        </div>
                        <div id="ajouteruneex" class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-25">
                                <label for="datedebut">Date de debut</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="datedebut" name="datedebut" placeholder="date.." ></input>
                            </div>
                        </div>
                        <div id="ajouteruneex" class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-25">
                                <label for="datefin">Date de fin</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="datefin" name="datefin" placeholder="date.." ></input>
                            </div>
                        </div>
                        <div id="ajouteruneex" class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-25">
                                <label for="entreprise">Entreprise</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="entreprise" name="entreprise" placeholder="entreprise..." ></input>
                            </div>
                        </div>
                        <div id="ajouteruneex" class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-25">
                                <label for="description">Description</label>
                            </div>
                            <div class="col-50">
                                <input type="text" id="description" name="description" placeholder="description..." ></input>
                            </div>
                        </div>
                        <div id="ajouteruneex" class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-25">
                                <label for="lien">Lien/ref. internet</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="lien" name="lien" placeholder="lien..." ></input>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label></label>
                    </div>
                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">Modifier</button>
                    <div id="demo1" class="collapse">

                        <div id="muneex" class="row">

                            <div class="col-25">
                                <label for="mintitule">Intitule</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="mintitule" name="mintitule" placeholder="intitule.." ></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-25">
                                <label for="mdatedebut">Date de debut</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="mdatedebut" name="mdatedebut" placeholder="date.." ></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-25">
                                <label for="mdatefin">Date de fin</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="mdatefin" name="mdatefin" placeholder="date.." ></input>
                            </div>
                        </div>
                        <div id="ajouteruneex" class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-25">
                                <label for="mentreprise">Entreprise</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="mentreprise" name="mentreprise" placeholder="entreprise..." ></input>
                            </div>
                        </div>
                        <div id="ajouteruneex" class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-25">
                                <label for="mdescription">Description</label>
                            </div>
                            <div class="col-50">
                                <input type="text" id="mdescription" name="mdescription" placeholder="description..." ></input>
                            </div>
                        </div>
                        <div id="ajouteruneex" class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-25">
                                <label for="mlien">Lien/ref. internet</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="mlien" name="mlien" placeholder="lien..." ></input>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label></label>
                    </div>
                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Supprimer</button>
                    <div id="demo2" class="collapse">

                        <div id="suneex" class="row">
                            <div class="col-25">
                                <label for="sintitule">intitule</label>
                            </div>
                            <div class="col-25">
                                <input type="text" id="sintitule" name="sintitule" placeholder="intitule.." ></input>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
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
                    <span class="badge badge-light" style="color: #007079">0</span> Notifications
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