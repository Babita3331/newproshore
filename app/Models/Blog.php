<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='blogs';
    protected $fillable = ['blog_title','blog_author','description','image','status'];
}
