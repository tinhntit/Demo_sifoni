<?php

namespace App\Model;


use Sifoni\Model\Base;

class Post extends Base {
	protected $table = 'post';
	protected $primaryKey = 'post_id';
}