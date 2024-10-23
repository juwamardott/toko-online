<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Product::create([
            'images' => 'https://images.unsplash.com/photo-1607929680208-0528b0039b43?q=80&w=2864&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'kode_product' => '123123',
            'nama_product' => 'Coca Cola',
            'harga_product' => 12000
        ]);
        Product::create([
            'images' => 'https://images.unsplash.com/photo-1607929680208-0528b0039b43?q=80&w=2864&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'kode_product' => '222222',
            'nama_product' => 'Sprite',
            'harga_product' => 7000
        ]);
        Product::create([
            'images' => 'https://images.unsplash.com/photo-1607929680208-0528b0039b43?q=80&w=2864&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'kode_product' => '33333',
            'nama_product' => 'Starbucks',
            'harga_product' => 20000
        ]);
        Product::create([
            'images' => 'https://images.unsplash.com/photo-1607929680208-0528b0039b43?q=80&w=2864&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'kode_product' => '44444',
            'nama_product' => 'Kopi Luwak',
            'harga_product' => 5000
        ]);
        Product::create([
            'images' => 'https://images.unsplash.com/photo-1607929680208-0528b0039b43?q=80&w=2864&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'kode_product' => '55555',
            'nama_product' => 'Kopi Kenangan',
            'harga_product' => 6500
        ]);
        Product::create([
            'images' => 'https://images.unsplash.com/photo-1607929680208-0528b0039b43?q=80&w=2864&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'kode_product' => '66666',
            'nama_product' => 'Wine',
            'harga_product' => 23000
        ]);
    }
}