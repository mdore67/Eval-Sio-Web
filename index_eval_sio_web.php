<?php
    session_start(); //Gestionnaire de sessions, a appeller dans toutes nos pages web et tjs en premier
    echo session_id(); //Affiche le cookie de connexion
    if(isset($_POST["logout"]))
    {
        session_destroy();
    }
    
    if(isset($_SESSION["logged"]))
    {
        header("Location:game.php");
    }
?>


<html>
    <head>
        <title>Eval Sio Web</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="design_eval.css" />
    </head>
    <body>
        <header>
            <h1>Bienvenue sur EvalSioWeb !</h1>
            <nav>
                <a href="index_eval_sio_web.php">Accueil</a> <> 
                <a href="register_eval.php">Inscription</a>
            </nav>
        </header>
        <aside>
              <h3>Statistiques</h3> <!-- Pour pouvoir se logger en tant que professeur, Admin etc... -->
            <br />
            <br />
            <?php 
            
                // try
                // {
                //     //Pour connecter une page web à une base de données :
                //     $bdd = new PDO("mysql:host=localhost;dbname=//nom database;charset=utf8", "user", "pwd");
                //     $req = $bdd->query('SELECT COUNT(id) as nb FROM player');
                // }
                // catch (Exception $e)
                // {
                //     die('Erreur : ' . $e->getMessage());
                // }
                // $donnees = $req->fetch();
                // echo $donnees['nb']. "joueurs inscrits";
                
            ?>
        </aside>
        <section>
            <h2>Bienvenue sur le gestionnaire d'évaluations d'IFIDE SUP'FORMATION !</h2>
            <article>
                <p>Cette application Web vous permettra de rentrer les notes des différents élèves</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis urna sit amet velit euismod lacinia. Donec elit leo, tempor sed ornare a, gravida quis arcu. Suspendisse potenti. Donec convallis erat id libero pretium mollis. Vestibulum vitae vulputate nunc. Aliquam eu maximus massa. Maecenas accumsan turpis sit amet felis vulputate tristique. Morbi vehicula massa ac feugiat pulvinar. Nullam molestie vehicula tortor dignissim facilisis. Sed volutpat nibh at euismod luctus. Praesent quis vestibulum mi, non suscipit mi. Integer molestie magna lectus. Donec id porta dolor, in tincidunt augue. Phasellus vel rutrum urna. Proin porta ipsum non augue sodales eleifend.
            </article>
        </section>
        <aside>
            <h3>Connexion</h3>
            <br />
            <br />
            <form action="game.php" method="post">
                <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" />
                <br />
                <br />
                <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" />
                <br />
                <br />
                <input type="submit" value="Login" />
            </form>
        </aside>
        <footer>
            Copyright @ Cours 2019
        </footer>
    </body>
</html>