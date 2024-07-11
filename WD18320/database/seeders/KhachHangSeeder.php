<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->insert(
            [
                [
                    'ten_khach_hang' => 'Phạm Quốc Khanh',
                    'sdt' => '0334675867',
                    'email' => 'meliodas2sk@gmail.com',
                    'que_quan' => 'Quảng Ninh'
                ],
                [
                    'ten_khach_hang' => 'Phạm Trung Hoàng',
                    'sdt' => '0334675866',
                    'email' => 'meliodas1sk@gmail.com',
                    'que_quan' => 'Quảng Ninh'
                ]
            ]
        );
    }
}
