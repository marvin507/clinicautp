<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Robsonvn\CouchDB\Eloquent\Model as Eloquent;
class Patient extends Eloquent
{
    protected $collection = 'patients';

    protected $fillable = [
        'name', 
        'surname', 
        'ced',
        'birthday',
        'phone',
        'celular',
        'direction',
    ];
}
