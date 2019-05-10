<?php
    include_once('header.php')
?>

<div class="section"></div>
        <main>

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

        </main>

<?php
    include_once('footer.php')
?>