<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    //
    protected $table = 'blog_links';
    protected $primaryKey = 'link_id';
    protected $guarded = [];
    public $timestamps = false;
}
