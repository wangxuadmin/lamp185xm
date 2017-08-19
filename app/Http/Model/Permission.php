<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permission';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
