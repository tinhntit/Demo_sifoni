<?php

return array(
    '/' => array(
        '/' => 'HomeController:index:home::get',
        '/hello/{name}' => 'HomeController:hello:hello_person:name={name}',
        '/test/{name}' => 'HomeController:index:hello_person:name={name}',
    ),
    '/admin' => array(
    	'/' => 'AdminController:index:home::get',
        '/xinchao/{name}' => 'AdminController:hello:admin_hello_person:name=world',
    )

);