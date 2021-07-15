<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Robsonvn\CouchDB\Eloquent\Model as Eloquent;

class Registro extends Eloquent
{
    protected $collection = 'users';

    protected $fillable = ['name', 'email', 'passoword'];
}
