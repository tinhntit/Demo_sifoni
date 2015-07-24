<?php

return array(
    '/' => array(
        '/' => 'HomeController:index:home::get',
        '/xinchao/{name}' => 'HomeController:hello:hello_person:name=world',
    ),
    '/admin' => array(
    	'/' => 'AdminController:index:home::get',
        '/xinchao/{name}' => 'AdminController:hello:admin_hello_person:name=world',
    )

);