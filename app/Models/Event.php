<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [
        
    ];

    public function user(){

        return $this->hasMany(User::class);
    }

    public function tag(){

        return $this->belongsToMany(tag::class);
    }
}
