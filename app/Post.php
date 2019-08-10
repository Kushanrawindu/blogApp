<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    //primary key
    public $primaryKey = 'id';

    //timestamp
    public $timpstamps = true;
}
