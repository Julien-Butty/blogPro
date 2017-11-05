<?php $this->titre = 'Modifier Post'; ?>
<form method="post" action="">
    <div class="row">
    <div class="form-group">
        <label for="modifTitre">Titre</label>
        <input id="modifTitre" class="form-control" name="titre" type="text" value="<?= $billet['titre'] ?>"<br/>
    </div>
    <div class="form-group">
        <label for="modifChapo">Chapo</label>
        <input id="modifChapo" class="form-control" name="chapo" type="text" value="<?= $billet['chapo'] ?>"<br/>
    </div>
    <div class="form-group">
        <label for="modifAuteur">Auteur</label>
        <input id="modifAuteur" class="form-control" name="auteur" type="text" value="<?= $billet['auteur'] ?>"<br/>
    </div>
    <div class="form-group">
        <label for="modifContenu"></label>
        <textarea id="modifContenu" class="form-control" name="contenu" placeholder="Votre commentaire" rows="10" required><?= $billet['contenu'] ?></textarea><br/>
    </div>
    <input type="hidden" name="id" value="<?= $billet['id'] ?>"/>
    <input class="btn btn-primary" name="soumettre" type="submit" value="Soumettre" onclick="if(window.confirm('Voulez-vous vraiment modifier cet article ?')){return true;}else{return false;}"/>
    </div>
</form>