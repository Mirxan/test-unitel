<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'image',
    ];

    public function users(){
        return $this->belongsToMany(User::class)->using(ProductUser::class);
    }
}
