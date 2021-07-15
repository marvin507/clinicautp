<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Robsonvn\CouchDB\Eloquent\Model as Eloquent;

class Doctor extends Eloquent
{
    protected $collection = 'doctors';

    protected $fillable = [

        'name', 
        'surname', 
        'ced',
        'birthday',
        'direction',
        'phone',
        'email'

    ];

    public function quotes()
    {
        return $this->HasMany('App\Quote');
    }
}
