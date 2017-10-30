<?php $this->titre = "Contact" ;
?>


<?php if (array_key_exists('errors', $_SESSION)): ?>
    <div class="alert alert-danger">
        <?= implode('<br>', $_SESSION['errors']); ?>
    </div>
    <?php unset($_SESSION['errors']); endif; ?>
