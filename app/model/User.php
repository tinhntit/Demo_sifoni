<?php

namespace App\Model;


use Sifoni\Model\Base;

class User extends Base {
	protected $table = 'user';
	protected $primaryKey = 'user_id';
}