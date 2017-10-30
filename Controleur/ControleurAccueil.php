<?php

namespace App\Controleur;

use App\Framework\Controleur;
use App\Modele\Billet;
use App\Framework\Session;
use App\Framework\Requete;

class ControleurAccueil extends Controleur
{


    /**
     * Méthode abstraite correspondant à l'action par défaut
     * Oblige les classes dérivées à implémenter cette action par défaut
     */
    public function index()
    {

        $errors = [];
        if (isset($_POST['envoyer'])) {

            if ($this->requete->existeParametre('nom') == false) {
                $errors['nom'] = "Vous n'avez pas renseigné votre nom";
            }

            if ($this->requete->existeParametre('email') == false || filter_var($this->requete->existeParametre('email'), FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Vous n'avez pas renseigné un email valide";
            }

            if ($this->requete->existeParametre('message') == false) {
                $errors['message'] = "Vous n'avez pas renseigné votre message";
            }
//$this->requete->getSession()->getAttribut() a remplacer
            if (!empty($errors)) {

                $this->requete->getSession()->setAttribute('errors', $errors);
                $this->requete->getSession()->setAttribute('inputs', $_POST);

                //echo '<div class="alert alert-danger">' . implode('<br>', $_SESSION['errors']) . '</div>';
                $this->rediriger('accueil', 'index');


            } else {
                $message = $_POST['message'];
                $headers = 'FROM: julienbutty@gmail.com';

                mail('julienbutty@gmail.com', 'Formulaire de contact', $message, $headers);
                $this->rediriger("accueil", "index");
                //$this->requete->getSession()->detruire();

            }
        }


        $this->genererVue();
        //$this->requete->getSession()->detruire();
    }


}
