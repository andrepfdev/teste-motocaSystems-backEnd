<?php

namespace App\Services;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\CategoryResource;

class CategoryService
{
    public function getAllCategories()
    {
        return CategoryResource::collection(Category::with('products')->simplePaginate());
    }

    public function createCategory(StoreCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return new CategoryResource($category);
    }

    public function getCategoryById(string $id)
    {
        $category = Category::findOrFail($id);
        return new CategoryResource($category);
    }

    public function updateCategory(StoreCategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->validated());
        return new CategoryResource($category);
    }

    public function deleteCategory(string $id)
    {
        return Category::destroy($id);
    }
}
