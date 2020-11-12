<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();
        $data = new Category();
        $data->category = 'normal';
        $data->save();
        $data = new Category();
        $data->category = 'low calorie';
        $data->save();
        $data = new Category();
        $data->category = 'custom - normal';
        $data->save();
        $data = new Category();
        $data->category = 'custom - low calorie';
        $data->save();


        $data = new Barang();
        $data->name = 'CUSTOM normal';
        $data->price = 100000;
        $data->available = true;
        $data->desc = 'Desert Custom yang bisa anda tentukan senidiri variasi nya';
        $data->category = 'custom - normal';
        $data->save();

        $data = new Barang();
        $data->name = 'CUSTOM low calorie';
        $data->price = 120000;
        $data->available = true;
        $data->desc = 'Desert Custom yang bisa anda tentukan senidiri variasi nya';
        $data->category = 'custom - low calorie';
        $data->save();

        $data = new Barang();
        $data->name = 'Choco Cookie';
        $data->price = 80000;
        $data->available = true;
        $data->desc = 'Coklat nya ajib banget';
        $data->category = 'normal';
        $data->save();

        $data = new Barang();
        $data->name = 'Matcha meninggal';
        $data->price = 90000;
        $data->available = true;
        $data->desc = 'Matcha ijo se ijo rumput tetangga';
        $data->category = 'low calorie';
        $data->save();
    }
}
