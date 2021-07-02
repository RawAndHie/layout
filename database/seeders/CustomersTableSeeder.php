<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([
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
    }
}
