<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Modal\Product;

class Category extends Model
{
    use HasFactory;
    public function pro(){
        return $this->hasMany(Product::class,"category_id","category");
    }
}
