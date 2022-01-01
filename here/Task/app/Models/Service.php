<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $table = 'services';
    protected $fillable = [
        'name', 'price'
    ];

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }
}
