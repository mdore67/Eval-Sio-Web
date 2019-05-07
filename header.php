<?php
    session_start(); //Gestionnaire de sessions, a appeller dans toutes nos pages web et tjs en premier
    // echo session_id(); //Affiche le cookie de connexion
    if(isset($_POST["logout"]))
    {
        session_destroy();
    }
    
    if(isset($_SESSION["logged"]))
    {
        header("Location:game.php");
    }
?>


<!DOCTYPE html> <!-- Snippet de HTML5 générée par VSCode -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/materialize.css"> <!--  " . " = A partir de ce dossier courant -->
    <link rel="stylesheet" href="./assets/css/style.css"> <!--  " . " = A partir de ce dossier courant -->

    <script src="/assets/js/materialize.js"></script>


    <title>Eval Sio Web</title>
</head>
<body>


<nav> <!-- Navbar générée avec Materialize -->
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="login.php">Connexion</a></li> <!--Ajouter page Connexion -->
        <li><a href="badges.html">Test Admin</a></li> <!--Ajouter page -->
        <li><a href="collapsible.html">JavaScript</a></li> <!--Ajouter page -->
      </ul>
    </div>
  </nav>



    
