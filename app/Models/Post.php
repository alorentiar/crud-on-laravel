<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //hanya bisa diassign ini biar secure
    protected $fillable = ['title', 'content'];
}
