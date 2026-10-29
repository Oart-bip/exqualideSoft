<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Product::insert([
            ['name'=>'Caderno universitário','category'=>'Papelaria','price'=>18.90,'stock'=>20,'minimum_stock'=>5,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Caneta azul','category'=>'Papelaria','price'=>3.50,'stock'=>3,'minimum_stock'=>5,'created_at'=>now(),'updated_at'=>now()],
        ]);
        \App\Models\Customer::create(['name'=>'Ana Silva','email'=>'ana@example.com','phone'=>'11999999999','address'=>'Rua Central, 100']);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
