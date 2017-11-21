<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    public $timestamps = false;

    public function supervisor()
    {
        return $this->belongsTo('App\Supervisor');
    }
}
