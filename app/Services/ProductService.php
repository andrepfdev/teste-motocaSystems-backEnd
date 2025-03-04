<?php

namespace App\Services;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Resources\ProductResource;

class ProductService
{
    public function list()
    {
        return ProductResource::collection(Product::with('category')->simplePaginate());
    }

    public function create(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());
        return new ProductResource($product);
    }

    public function show(string $id)
    {
        $product = Product::with('category')->findOrFail($id);
        return new ProductResource($product);
    }

    public function update(StoreProductRequest $request, string $id)
    {
        $product = Product::with('category')->findOrFail($id);
        $product->update($request->validated());
        return new ProductResource($product);
    }

    public function delete(string $id)
    {
        return Product::destroy($id);
    }
}
