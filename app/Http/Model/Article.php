<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //文章模型
    protected $table = 'article';
    protected $primaryKey = 'art_id';
    protected $guarded = [];
    public $timestamps = false;
}
