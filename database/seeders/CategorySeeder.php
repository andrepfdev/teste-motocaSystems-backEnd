<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Roupas',
            'Calçados',
            'Móveis',
            'Livros',
            'Brinquedos',
            'Equipamentos Esportivos',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'nome'=> $category,
            ]);
        }
    }
}
