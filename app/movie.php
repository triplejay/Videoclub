<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $fillable = ['title', 'year', 'Director', 'poster', 'synopsis'];
}
