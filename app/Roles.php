<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    /**
     * The database column that uses this model
     * 
     * @var string
     */
    protected $table = 'roles';

    public function user() {
        return $this->belongsTo('App\User','id');
    }
}
