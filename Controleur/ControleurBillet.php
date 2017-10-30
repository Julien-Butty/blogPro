<?php

Namespace App\Controleur;

use App\framework\Controleur;
use App\Modele\Billet;
use App\Framework\Modele;


class ControleurBillet extends Controleur
{
    /**
     * @var Billet
     */
    private $billet;


    public function __construct()
    {
        $this->billet = new Billet();
    }

    public function index()
    {
        $billets = $this->billet->getBillets();
        $this->genererVue(array('billets' => $billets));
    }

    public function read()
    {
        $idBillet = $this->requete->getParametre("id");

        $billet = $this->billet->getBillet($idBillet);


        $this->genererVue(array('billet' => $billet));
    }

    public function modifier()
    {
        $idBillet = $this->requete->getParametre("id");


        $billet = $this->billet->getBillet($idBillet);


        if (isset($_POST['soumettre'])) {

            if ($this->requete->existeParametre('titre')) {
                $billet['titre'] = $this->requete->getParametre('titre');
            }


            if ($this->requete->existeParametre('auteur')) {
                $billet['auteur'] = $this->requete->getParametre('auteur');
            }

            if ($this->requete->existeParametre('contenu')) {
                $billet['contenu'] = $this->requete->getParametre('contenu');
            }

            if ($this->requete->existeParametre('chapo')) {
                $billet['chapo'] = $this->requete->getParametre('chapo');
            }



                $this->billet->modifierBillet($billet);

            $this->rediriger("billet", 'index');


            }
            $this->genererVue(array('billet' => $billet));


        }

        public
        function creer()
        {



            if (isset($_POST['creer'])) {

                $titre = $this->requete->getParametre('titre');
                $chapo = $this->requete->getParametre('chapo');
                $contenu = $this->requete->getParametre('contenu');
                $auteur = $this->requete->getParametre('auteur');

                $this->billet->creerPost($titre, $chapo, $contenu, $auteur);

                //$this->executerAction("billet/index");
                $this->rediriger("billet", 'index');
            }
            $this->genererVue();
        }


    }
