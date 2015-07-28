<?php

namespace App\Controller;

use Sifoni\Controller\Base;
use App\Model\Post;

class PostController extends Base {
    public function postAction() {
        $data = Post::where('post_id',16)->first();
        $test['post'] = $data->title;
        $test['id'] = $data->post_id;
        $test['text'] = $data->text;
        //var_dump($test);die();
        return $this->render('post.html.twig', $test);
    }

    public function addpostAction() {
        $data = User::/*where('user_id',11)->*/firsttofail();
        //$name = $data->fullname;
        //var_dump($data);die();
        return $this->render('home.html.twig', $name);
    }
}
