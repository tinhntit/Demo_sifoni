<?php

namespace App\Controller;

use Sifoni\Controller\Base;
use App\Model\Post;
use App\Model\User;

class HomeController extends Base {
    public function indexAction() {
        $data['post'] = Post::all();
        $data['user'] = User::all();
        // $data['user'] = $name->fullname;
        // var_dump($name);die();
        return $this->render('post.html.twig', $data);
    }
}
