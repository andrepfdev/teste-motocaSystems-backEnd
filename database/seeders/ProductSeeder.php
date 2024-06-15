<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nome' => 'Calça Jeans',
                'descricao' => 'Feminina, P.',
                'preco' => 69.90,
                'categoria_id' => 1,
            ],

            [
                'nome' => 'Tênis Nike',
                'descricao' => 'Tam. 40, preto.',
                'preco' => 246.80,
                'categoria_id' => 2,
            ],

            [
                'nome' => 'Sofá Triplo',
                'descricao' => 'Cor verde limão',
                'preco' => 2650.00,
                'categoria_id' => 3,
            ],

            [
                'nome' => 'Bíblia',
                'descricao' => 'Livro sagrado.',
                'preco' => 00.00,
                'categoria_id' => 4,
            ],

            [
                'nome' => 'Boneca da Barbie',
                'descricao' => 'Edição limitada Barbie praia.',
                'preco' => 129.65,
                'categoria_id' => 5,
            ],

            [
                'nome' => 'Luva de Boxe',
                'descricao' => 'Tamanho 12 Oz',
                'preco' => 246.90,
                'categoria_id' => 6,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'nome'=> $product['nome'],
                'descricao'=> $product['descricao'],
                'preco'=> $product['preco'],
                'categoria_id'=> $product['categoria_id'],
            ]); 
        }
    }
}
