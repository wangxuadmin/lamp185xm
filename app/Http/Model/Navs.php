<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Navs extends Model
{
    protected $table='blog_navs';
    protected $primaryKey='nav_id';
    protected $guarded=[];
    public $timestamps=false;

}
