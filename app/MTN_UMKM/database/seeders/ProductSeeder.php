<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $main = Category::where('slug', 'makanan-utama')->firstOrFail();
        $snack = Category::where('slug', 'camilan')->firstOrFail();
        $drink = Category::where('slug', 'minuman')->firstOrFail();

        $products = [
            [$main->id, 'Nasi Ayam Crispy', 'nasi-ayam-crispy', 'Nasi hangat dengan ayam crispy berbumbu gurih dan sambal pilihan.', 18000, true],
            [$main->id, 'Rice Bowl Teriyaki', 'rice-bowl-teriyaki', 'Rice bowl praktis dengan ayam saus teriyaki dan sayuran segar.', 20000, true],
            [$main->id, 'Mie Pedas Nusantara', 'mie-pedas-nusantara', 'Mie dengan racikan bumbu khas dan tingkat kepedasan pilihan.', 15000, false],
            [$snack->id, 'Pisang Cokelat', 'pisang-cokelat', 'Pisang pilihan dengan isian cokelat yang cocok untuk camilan.', 12000, false],
            [$snack->id, 'Kentang Goreng', 'kentang-goreng', 'Kentang goreng renyah disajikan dengan saus pendamping.', 13000, false],
            [$drink->id, 'Es Teh Nusantara', 'es-teh-nusantara', 'Teh segar dengan rasa ringan untuk menemani hidangan.', 5000, true],
        ];

        foreach ($products as [$categoryId, $name, $slug, $description, $price, $featured]) {
            Product::updateOrCreate(
                ['slug' => $slug],
                [
                    'category_id' => $categoryId,
                    'name' => $name,
                    'description' => $description,
                    'price' => $price,
                    'is_featured' => $featured,
                ]
            );
        }
    }
}
