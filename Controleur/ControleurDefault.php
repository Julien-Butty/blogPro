<?php

namespace App\Controleur;

use App\Framework\Controleur;

class ControleurDefault extends Controleur {


    /**
     * Méthode abstraite correspondant à l'action par défaut
     * Oblige les classes dérivées à implémenter cette action par défaut
     */
    public function index()
    {
        $this->genererVue();
    }
}