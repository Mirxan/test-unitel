<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductUser extends Pivot
{
    use HasFactory;
}
