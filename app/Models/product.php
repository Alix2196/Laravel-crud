<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use app\Models\ProductController;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','category','quantity','price','image'];
}
