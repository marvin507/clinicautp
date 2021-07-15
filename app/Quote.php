<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Robsonvn\CouchDB\Eloquent\Model as Eloquent;
class Quote extends Eloquent
{
    protected $collection = 'quotes';

    protected $fillable = [
        'doctor_id', 
        'patient_id', 
        'status',
        'date',
        'observations',
    ];

    public function doctor()
    {
        return $this->belongsTo('App\Doctor', 'doctor_id');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient', 'patient_id');
    }
}
