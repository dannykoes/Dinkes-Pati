<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    
    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }
    
    public function options()
    {
        return $this->hasMany(Option::class);
    }
    
    public function responses()
    {
        return $this->hasMany(ResponseAnswer::class);
    }
}