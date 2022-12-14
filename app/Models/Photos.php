<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Photos extends Model
{
    use HasFactory;
    
    public function itemForSale() {
        return $this->belongsTo(ItemForSale::class);
    }
}
