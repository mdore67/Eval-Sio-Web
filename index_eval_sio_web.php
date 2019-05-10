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
                    <h2 class="welcome">Bienvenue sur Eval Sio Web !</h2>
                    <br />
                    <article>
                        <h3>À quoi sert ce site web ?</h3>
                        <br />
                        <p>
                            Lorem ipseum dolor sit amet, consectetur adipiscing elit. Ut mattis urna sit amet velit euismod lacinia. Donec elit leo, tempor sed ornare a, gravida quis arcu. Suspendisse potenti. Donec convallis erat id libero pretium mollis. Vestibulum vitae vulputate nunc. Aliquam eu maximus massa. Maecenas accumsan turpis sit amet felis vulputate tristique. Morbi vehicula massa ac feugiat pulvinar. Nullam molestie vehicula tortor dignissim facilisis. Sed volutpat nibh at euismod luctus. Praesent quis vestibulum mi, non suscipit mi. Integer molestie magna lectus. Donec id porta dolor, in tincidunt augue. Phasellus vel rutrum urna. Proin porta ipsum non augue sodales eleifend.
                    </article>
        </section>
 
 
        <aside class="col s3">
                    <!-- <h3>Connexion</h3>
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
                    </form> -->
                    <div class="container login_container">
                <div class="z-depth-3 y-depth-3 x-depth-3 grey  lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; solid #EEE;">


                    <h4>Veuillez vous connecter : </h4>
                    <form action="/login" method="post">
                        

                        <div class='row'>
                            <div class='input-field col s12'>
                            <input class='validate' type="text" name='username' id='username' required  />
                            <label for='username'>Identifiant</label>
                            </div>

                       




                            <div class='input-field col s12 '>
                            <input class='validate' type='password' name='password' id='password' required/>
                                <label for='password'>Mot de passe</label>
                            </div>
                         
                        </div>



                        <div class='row'>
                            <button type='submit' class='col btn waves-effect z-depth-1 y-depth-1'>Login</button>
                        </div>
                    </form>



                </div>
            </div>
        </aside> 
 
 
 </div>

<?php
    include_once ('footer.php');
?>