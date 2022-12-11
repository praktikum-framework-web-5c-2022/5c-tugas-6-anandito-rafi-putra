<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produk;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'nama' => 'Hoodie',
        ]);
 
        Type::create([
            'nama' => 'Crewneck',
        ]);
        Type::create([
            'nama' => 'Tshirt',
        ]);
        Type::create([
            'nama' => 'Sweeter',
        ]);
        Type::create([
            'nama' => 'Varsity',
        ]);
 
        Produk::create([
             'kode_produk'=> 'BJ001',
             'nama'=> 'Levis',
             'ukuran'=> 'L',
             'harga'=> 115000,
             'type_id'=>'1',
        ]);
        Produk::create([
             'kode_produk'=> 'BJ002',
             'nama'=> 'Bloods',
             'ukuran'=> 'S',
             'harga'=> 130000,
             'type_id'=>'1',
        ]);
        Produk::create([
             'kode_produk'=> 'BJ003',
             'nama'=> 'Adidas',
             'ukuran'=> 'L',
             'harga'=> 280000,
             'type_id'=>'2',
        ]);
        Produk::create([
             'kode_produk'=> 'BJ004',
             'nama'=> 'Jeans',
             'ukuran'=> 'M',
             'harga'=> 210000,
             'type_id'=>'2',
        ]);
        Produk::create([
             'kode_produk'=> 'BJ005',
             'nama'=> 'Supreme',
             'ukuran'=> 'L',
             'harga'=> 600000,
             'type_id'=>'3',
        ]);
        Produk::create([
             'kode_produk'=> 'BJ006',
             'nama'=> 'Mirabel',
             'ukuran'=> 'M',
             'harga'=> 90000,
             'type_id'=>'4',
        ]);
        Produk::create([
             'kode_produk'=> 'BJ007',
             'nama'=> 'NoFake',
             'ukuran'=> 'XL',
             'harga'=> 185000,
             'type_id'=>'5',
        ]);
    }
}
