<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];

    public function permission()
    {
        return $this->belongsToMany('App\Http\Model\Permission','role_permission','role_id','permission_id');
    }
}
