<?php include_once('header.php'); ?>
          
 <div class="row">
 
        <aside class="col s3">
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
 
 
 <section class="col s6">
            <h2 class="welcome">Bienvenue sur le gestionnaire d'évaluations d'IFIDE SUP'FORMATION !</h2>
            <article>
                <p>Cette application Web vous permettra de rentrer les notes des différents élèves NTM FDP</p>
                <p>
                    Lorem ipseum dolor sit amet, consectetur adipiscing elit. Ut mattis urna sit amet velit euismod lacinia. Donec elit leo, tempor sed ornare a, gravida quis arcu. Suspendisse potenti. Donec convallis erat id libero pretium mollis. Vestibulum vitae vulputate nunc. Aliquam eu maximus massa. Maecenas accumsan turpis sit amet felis vulputate tristique. Morbi vehicula massa ac feugiat pulvinar. Nullam molestie vehicula tortor dignissim facilisis. Sed volutpat nibh at euismod luctus. Praesent quis vestibulum mi, non suscipit mi. Integer molestie magna lectus. Donec id porta dolor, in tincidunt augue. Phasellus vel rutrum urna. Proin porta ipsum non augue sodales eleifend.
            </article>
        </section>
 
 
 <aside class="col s3">
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
 
 </div>

<?php
    include_once ('footer.php');
?>