<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    public $table = 'carts';

    protected $fillable= [
        'photography_id', 
        'quantity',
        'price',
        'user_id',
        'created_at',
        'updated_at'
    ];
    //relacion con la tabla fotografia
    public function photography(){
        return $this->hasMany(photography::class, 'id', 'photography_id');
    }
}
