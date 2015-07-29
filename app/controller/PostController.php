<?php

namespace App\Controller;

use Sifoni\Controller\Base;
use App\Model\User;

class PostController extends Base {
    public function postAction() {
        $data['user'] = User::all();
        return $this->render('home.html.twig', $data);
    }
}
