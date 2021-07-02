<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'product_id'=>101,
                'price'=>64000,
                'name'=>'Móc khóa Đấu La Đại Lục'
            ],
            [
                'product_id'=>102,
                'price'=>64000,
                'name'=>'Móc Khóa Kiếm Đấu La Đại Lục'
            ],
            [
                'product_id'=>103,
                'price'=>80000,
                'name'=>'Móc khóa búa Đấu La Đại Lục'
            ],
            [
                'product_id'=>104,
                'price'=>200000,
                'name'=>'Mô hình nhân vật Đường Tam Đấu la đại lục'
            ],
            [
                'product_id'=>105,
                'price'=>170000,
                'name'=>'Mô hình vũ khí đấu la đại lục'
            ],
            [
                'product_id'=>106,
                'price'=>200000,
                'name'=>'Mô hình nhân vật tiểu vũ đấu la đại lục'
            ],
            [
                'product_id'=>107,
                'price'=>180000,
                'name'=>'Mô hình ám khí đấu la đại lục'
            ],
            [
                'product_id'=>108,
                'price'=>150000,
                'name'=>'Mô hình thương đấu la đại lục'
            ],
            [
                'product_id'=>109,
                'price'=>65000,
                'name'=>'Móc khóa ám khí Đấu La Đại Lục'
            ],
            [
                'product_id'=>110,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục'
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
