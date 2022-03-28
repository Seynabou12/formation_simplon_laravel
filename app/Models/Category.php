<?php

namespace App\Models;

use App\Models\Formation;
use App\Models\TypeFormation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function typeformation()
    {
        return $this->belongsTo(TypeFormation::class);
    }
}
