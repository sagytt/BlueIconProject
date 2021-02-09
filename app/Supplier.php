<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'status', 'name', 'score','econhunt_deal', 'link',
        'sourcing','cost', 'processing', 'special_line','branding',
        'couriers', 'score','couriers', 'support', 'return_policy', 'pod'
    ];

    public function user(){
        return $this->hasOne('App\User');
    }
}
