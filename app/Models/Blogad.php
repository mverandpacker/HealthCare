<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogad extends Model
{
    use HasFactory;
    protected $table = "blogs";
    protected $primaryKey = "id";
}
