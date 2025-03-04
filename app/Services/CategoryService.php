<?php

namespace App\Services;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\CategoryResource;

class CategoryService
{
    public function list()
    {
        return CategoryResource::collection(Category::with('products')->simplePaginate());
    }

    public function create(StoreCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return new CategoryResource($category);
    }

    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return new CategoryResource($category);
    }

    public function update(StoreCategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->validated());
        return new CategoryResource($category);
    }

    public function delete(string $id)
    {
        return Category::destroy($id);
    }
}
