<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->productService->list();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        return $this->productService->create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->productService->show($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, string $id)
    {
        return $this->productService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->productService->delete($id);
    }
}
