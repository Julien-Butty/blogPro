
<?php $this->titre = 'Accueil'; ?>
<section class="container padding-perso">
    <div class="row">
        <div class="col s12 m8 offset-m2 m4 l8 offset-l2">
            <h4 class="header center-align">A propos de moi</h4>
            <div class="card-panel grey darken-4 z-depth-1">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="Contenu/img/me.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="white-text">
                    Venant du graphisme et passioné par le monde digital, j'ai repris mes études il'y a un an afin de me reconvertir
                    dans le domaine du développement web. A travers ce blog je vous propose mes services mais également un moyen d'échange
                    par le biais d'articles que vous pourrez commenter et même créer. Au plaisir de vous lire !
                </span>
            </div>
        </div>
    </div>
</div>
</div>


</div>
</div>
<hr/>
<?php if(array_key_exists('errors', $_SESSION)): ?>
    <article class="message is-danger">
        <div class="message-header">
            <?= implode('<br>', $_SESSION['errors']); ?>
        </div>
    <?php  endif; ?>
</article>
</div>
</section>

<section class="grey lighten-3 padding-perso">
    <div class="container">
        <div class="row ">
            <article class="col m4 s12 center-align  grey-text text-darken-4">
                <i class="material-icons light-blue-text text-accent-3 large">code</i>
                <h4>Conception Web</h4>
                <p>Php Symfony</p>
            </article>
            <article class="col m4 s12 center-align  grey-text text-darken-4">
             <i class="material-icons light-blue-text text-accent-3 large ">visibility</i>
             <h4>Design Web</h4>
             <p>Affinity designer / Sketch</p>
         </article>
         <article class="col m4 s12 center-align  grey-text text-darken-4">
            <i class="material-icons light-blue-text text-accent-3 large ">star</i>
            <h4>Conseils</h4>
            <p>Blog / Communauté</p>
        </article>

    </div>
</div>
</section>

<hr/>

<section class="padding-perso ">
    <div class="container contact ">
        <a href="#modal1" class="waves-effect waves-light btn modal-trigger light-blue accent-3"> Contactez moi</a>
        <div id="modal1" class="modal">
            <div class="modal-content">
                <div class="row center-align">
                    <h4>Contactez moi</h4>
                </div>

                <div class="row ">
                    <form class="col offset-m3 m6 s12" action="" method="post">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <label for="inputNom">Votre nom</label>
                                <input type="text" name="nom" class="validate" id="inputNom"  value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : '';  ?>">
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">mail</i>
                                <label for="inputEmail">Votre email</label>
                                <input type="email" name="email" class="validate" id="inputEmail"   value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '';  ?>">
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">message</i>
                                <label for="inputMessage">Votre message</label>
                                <textarea name="message" class="materialize-textarea " id="inputMessage"  value="<?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';  ?>"></textarea>
                            </div>
                        </div>


                        <div class="input-field col s12 left-align">
                            <button type="submit" name="envoyer" value="1" class="btn waves-effect waves-light light-blue accent-3">Envoyer</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</section>





