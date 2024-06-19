<?php

namespace App\Services;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Resources\ProductResource;

class ProductService
{
    public function getAllProducts()
    {
        return ProductResource::collection(Product::with('category')->simplePaginate());
    }

    public function createProduct(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());
        return new ProductResource($product);
    }

    public function getProductById(string $id)
    {
        $product = Product::with('category')->findOrFail($id);
        return new ProductResource($product);
    }

    public function updateProduct(StoreProductRequest $request, string $id)
    {
        $product = Product::with('category')->findOrFail($id);
        $product->update($request->validated());
        return new ProductResource($product);
    }

    public function deleteProduct(string $id)
    {
        return Product::destroy($id);
    }
}
