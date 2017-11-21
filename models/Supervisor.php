<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    public $timestamps = false;

    public $guarded = [];

    protected $table = 'supervisors';

    public function operators()
    {
        return $this->hasMany('App\Operator');
    }
}
