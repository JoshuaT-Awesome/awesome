<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trivia extends Model
{
    protected $fillable = ['title', 'a', 'b', 'c', 'd', 'answer', 'image'];
    
    protected $table = 'trivia';
     
}
