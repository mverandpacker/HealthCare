<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crusowl extends Model
{
    use HasFactory;
    protected $table = "slides";
    protected $primaryKey = "id";
}
