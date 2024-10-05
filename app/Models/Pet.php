<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $guarded = [
      
    ];

    public function images()
    {
        return $this->hasMany(PetImage::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
