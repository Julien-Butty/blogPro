<?php $this->titre = 'Modifier Post'; ?>


<section class="container padding-perso">
    <form method="post" action="">
        <div class="row">
            <div class="input-field">
                <label for="modifTitre">Titre</label>
                <input id="modifTitre" class="validate" name="titre" type="text" value="<?= $billet['titre'] ?>""<br/>
            </div>
            <div class="input-field">
                <label for="modifChapo">Chapo</label>
                <input id="modifChapo" class=validate"" name="chapo" type="text" value="<?= $billet['chapo'] ?>" "<br/>
            </div>
            <div class="input-field">
                <label for="modifAuteur">Auteur</label>
                <input id="modifAuteur" class=validate"" name="auteur" type="text" value="<?= $billet['auteur'] ?>""<br/>
            </div>
            <div class="input-field">
                <label for="modifContenu">Votre texte</label>
                <textarea id="modifContenu" class="materialize-textarea" name="contenu"><?= $billet['contenu'] ?></textarea><br/>
            </div>
            <br>

            <input class="btn waves-effect waves-light light-blue accent-3" name="soumettre" type="submit" value="Soumettre" onclick="if(window.confirm('Voulez-vous vraiment modifier cet article ?')){return true;}else{return false;}"/>
        </div>
    </form>
</section>"