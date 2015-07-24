<?php

namespace App\Model;


use Sifoni\Model\Base;

class User extends Base {
	protected $table = 'users';
	protected $primaryKey = 'id';
} 