<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(CarCategories::class);
    }

    public function driver()
    {
        return $this->belongsTo(Drivers::class);
    }
}
