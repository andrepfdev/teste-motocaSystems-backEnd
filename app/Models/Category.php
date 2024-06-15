<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    protected $hidden = ['created_at', 'updated_at'];

    public function produtcs()
    {
        return $this->hasMany(Product::class, 'categoria_id');
    }
}
