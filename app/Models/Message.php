<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // if i not use this line laravel dont allow to insert data in the database
    protected $fillable = ['text'];
}

