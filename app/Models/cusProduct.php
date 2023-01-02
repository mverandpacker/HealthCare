<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cusProduct extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $primaryKey = "id";
    
    public function child() {
        return $this->hasMany(productBenefit::class);
   }
}
