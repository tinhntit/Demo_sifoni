<?php

namespace App\Controller;

use Sifoni\Controller\Base;
use App\Model\User;

class HomeController extends Base {
    public function indexAction() {
        $data['name'] = 'sifoni';
        return $this->render('home.html.twig', $data);
    }

    public function helloAction() {
        $data = User::/*where('user_id',11)->*/firsttofail();
        //$name = $data->fullname;
        //var_dump($data);die();
        return $this->render('home.html.twig', $name);
    }
}
