<?php

namespace App\Interfaces;

interface ProductRepositoryInterface 
{
    public function getAllProducts();
    public function getProducts(int $perPage);
    public function getProductById(int $id);
}