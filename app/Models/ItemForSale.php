<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemForSale extends Model
{
    use HasFactory;
    
    public $fillable = [
        'name',
        'description',
        'price',
        'primary_photo_id'
    ];
    
    function photos() {
        return $this->hasMany(Photos::class);
    }
    
    function user() {
        return $this->belongsTo(User::class);
    }
}
