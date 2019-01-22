<?php

/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-21
 * Time: 14:02
 */

namespace App\Controllers;

/**
 * Gestion de la page d'accueil
 */
class HomeController extends Controller
{
    /**
     * Page de login
     */
    public function index()
    {
        return $this->view('home/home', [
            'baliseTitle' => 'Homepage title',
            'metaDescription' => 'Homepage desciption',
        ]);  
    }

}
