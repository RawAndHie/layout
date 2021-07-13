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
                'product_id'=>1,
                'price'=>64000,
                'name'=>'Móc khóa Đấu La Đại Lục'
            ],
            [
                'product_id'=>2,
                'price'=>64000,
                'name'=>'Móc Khóa Kiếm Đấu La Đại Lục'
            ],
            [
                'product_id'=>3,
                'price'=>80000,
                'name'=>'Móc khóa búa Đấu La Đại Lục'
            ],
            [
                'product_id'=>4,
                'price'=>200000,
                'name'=>'Mô hình nhân vật Đường Tam Đấu la đại lục'
            ],
            [
                'product_id'=>5,
                'price'=>170000,
                'name'=>'Mô hình vũ khí đấu la đại lục'
            ],
            [
                'product_id'=>6,
                'price'=>200000,
                'name'=>'Mô hình nhân vật tiểu vũ đấu la đại lục'
            ],
            [
                'product_id'=>7,
                'price'=>180000,
                'name'=>'Mô hình ám khí đấu la đại lục'
            ],
            [
                'product_id'=>8,
                'price'=>150000,
                'name'=>'Mô hình thương đấu la đại lục'
            ],
            [
                'product_id'=>9,
                'price'=>65000,
                'name'=>'Móc khóa ám khí Đấu La Đại Lục'
            ],
            [
                'product_id'=>10,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục'
            ]
            ,
            [
                'product_id'=>11,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 1'
            ],
            [
                'product_id'=>12,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 12'
            ],
            [
                'product_id'=>13,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 13'
            ],
            [
                'product_id'=>14,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 14'
            ],
            [
                'product_id'=>15,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 15'
            ],
            [
                'product_id'=>16,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 16'
            ],
            [
                'product_id'=>17,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 17'
            ],
            [
                'product_id'=>18,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 18'
            ],
            [
                'product_id'=>19,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 19'
            ],
            [
                'product_id'=>20,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 20'
            ],
            [
                'product_id'=>21,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 21'
            ],
            [
                'product_id'=>22,
                'price'=>65000,
                'name'=>'Móc khóa lệnh bài Đấu La Đại Lục 22'
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
