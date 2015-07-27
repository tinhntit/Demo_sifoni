<?php

namespace App\Controller;

use Sifoni\Controller\Base;
//use App\Model\User;

class HomeController extends Base {
    public function indexAction() {
        $data['name'] = 'sifoni';
        return $this->render('home.html.twig', $data);
    }

    public function helloAction($name) {
        //$data['test'] = \App\Model\User::all();
        $data['name'] = $name;
        return $this->render('home.html.twig', $data);
    }
}
