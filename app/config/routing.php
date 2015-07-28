<?php

return array(
    '/' => array(
        '/' => 'HomeController:index:home::get',
        '/hello/{name}' => 'HomeController:hello:hello_person:name={}',
        '/xinchao/{name}' => 'HomeController:index:index_test:name=TENT',
        '/post/' => 'PostController:post:list_post:post={}',
    )

);
?>