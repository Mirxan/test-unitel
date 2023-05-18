<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product\Product;

class ProductRepository implements ProductRepositoryInterface 
{

    public function __construct(private Product $product)
    {
        $this->product = $product;
    }

    public function getAllProducts() 
    {
        return $this->product->all();
    }

    public function getProducts(int $per_page) 
    {
        return $this->product->with(['users'])->paginate($per_page);
    }

    public function getProductById(int $id) 
    {
        return $this->product->with(['users'])->findOrFail($id);
    }
}
