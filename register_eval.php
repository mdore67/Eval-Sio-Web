<html>
    <head>
        <title>Connexion Eval Sio Web</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="design_eval.css" />
    </head>
    <body>
        <header>
            <h1>Veuillez vous inscrire au sytème de gestion de grilles d'évaluation !</h1>
            <nav>
                <a href="index_eval_sio_web.php">Accueil</a> <> <a href="register_eval.php">Inscription</a>
            </nav>
        </header>
        <aside>
        </aside>
        <section>
            <h2>Inscription</h2>
            <form action="register_eval.php" method="post">
                <table>
                    <tr>
                        <td>Pseudo</td>
                        <td><input type="text" name="pseudo"  id="pseudo" placeholder="Votre Pseudo"/></td>
                    </tr>
                    <tr>
                        <td>Mot de passe</td>
                        <td><input type="password" name="mdp" id="mdp" placeholder="Mot de Passe"/></td>
                    </tr>
                    <tr>
                        <td>Confirmer le mot de passe</td>
                        <td><input type="password" name="mdp2" id="mdp2" placeholder="Confirmation"/></td>
                    </tr>
                    <tr>
                        <td>J'accepte les CGU</td>
                        <td><input type="checkbox" name="cgu" id="cgu"/></td>
                    </tr>
                </table>
                <br />
                <input type="submit" value="Créer un compte" />
                <br />
                <br />
                <?php 
                    if(isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['mdp2']))
                    {
                        if(empty($_POST['pseudo']))
                        {
                            echo "<p class=\"red\">ERREUR : Pseudo non renseigné ! </p>";
                        }
                        elseif(empty($_POST['mdp']))
                        {
                            echo "<p class=\"red\">ERREUR : Mot de passe non renseigné ! </p>";
                        }
                        elseif(empty($_POST['mdp2']))
                        {
                             echo "<p class=\"red\">ERREUR : Confirmation du mot de passe non renseigné ! </p>";
                        }
                        elseif(empty($_POST['cgu']))
                        {
                             echo "<p class=\"red\">ERREUR : Conditions générales non acceptées ! </p>";
                        }
                        // else
                        // {
                        //     //Test de connexion à la base de donnée
                        //     try
                        //     {
                        //         $bdd = new PDO("mysql:host=10.0.0.92;dbname=romulus;charset=utf8", "max", "max"); //Mettre l'adresse ip de Xampp et nom de la bdd
                        //         $bdd->exec("INSERT INTO players(nickname, password) VALUES('".$_POST['pseudo']."', '".$_POST['mdp']."')");
                        //         //echo "INSERT INTO players(nickname, password) VALUES('".$_POST['pseudo']."', '".$_POST['mdp']."')";
                        //     }
                        //     catch(Exception $e)
                        //     {
                        //         die('Erreur : ' . $e->getMessage());
                        //     }
                        //     echo 
                        //     {
                        //         "<p class=\"green\">Compte créé avec succès ! ".$_POST['pseudo']." !</p>"
                        //     }
                        // }
                       
                    }
                ?>
            </form>
        </section>
        <aside>
        </aside>
        <footer>
            Copyright @ Cours 2019
        </footer>
    </body>
</html>