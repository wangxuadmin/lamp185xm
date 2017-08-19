<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    protected $primaryKey = 'user_id';

    public $timestamps = false;

    protected $guarded = [];


    public function roles()
    {
        return $this->belongsToMany('App\Http\Model\Role','user_role','user_id','role_id');
    }
}
