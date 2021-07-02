<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'customer_id'=>101,
                'name'=>'Trần Anh Đức',
                'address'=>'Hà Nội'
            ],
            [
                'customer_id'=>102,
                'name'=>'Đào Hồng Luyến',
                'address'=>'Hà Nội'
            ],
            [
                'customer_id'=>103,
                'name'=>'Nguyễn Minh Tú',
                'address'=>'Hà Nội'
            ],
            [
                'customer_id'=>104,
                'name'=>'Phạm Thị Quỳnh',
                'address'=>'TP HCM'
            ],
            [
                'customer_id'=>105,
                'name'=>'Nguyễn Thu Trang',
                'address'=>'Bến Tre'
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
