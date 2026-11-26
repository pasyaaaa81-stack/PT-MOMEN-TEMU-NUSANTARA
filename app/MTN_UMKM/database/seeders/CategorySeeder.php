<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['name' => 'Makanan Utama', 'slug' => 'makanan-utama', 'description' => 'Menu makanan utama untuk menemani aktivitas.'],
            ['name' => 'Camilan', 'slug' => 'camilan', 'description' => 'Pilihan camilan lezat untuk waktu santai.'],
            ['name' => 'Minuman', 'slug' => 'minuman', 'description' => 'Minuman segar untuk pelanggan.'],
        ];

        foreach ($items as $item) {
            Category::updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
