<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'BIỂN ĐỒNG VÀ INOX ĂN ',
                'image' => 'default.png',
                'content' => 'abc',
                'status' => 1,
            ],
            [
                'title' => 'BIỂN MICA CÔNG TY',
                'image' => 'default.png',
                'content' => 'abc',
                'status' => 1,
            ],
        ]);
    }
}
