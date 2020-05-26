<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'category_id', 'type', 'details','amount'
    ];

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}
