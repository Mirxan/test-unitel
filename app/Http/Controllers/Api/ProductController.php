<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(private ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allProducts()
    {
        return response()->successResponse($this->productRepository->getAllProducts());
    }

    /**
     * Display a listing of the resource with pagination.
     * @param  int  $per_page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->get('per_page',10);
        return response()->successResponse($this->productRepository->getProducts($perPage));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->successResponse($this->productRepository->getProductById($id));
    }
}

