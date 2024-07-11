<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nơi xử lý để tạo ra các dữ liệu mẫu
        // Sử dụng query builder để tạo thêm dữ liệu
        DB::table('san_phams')->insert(
            [
                [
                    'ma_san_pham' => 'SP01',
                    'ten_san_pham' => 'Iphone 15',
                    'gia' => 100000,
                    'so_luong' => 50,
                    'ngay_nhap' => '2024/06/28',
                    'mota' => 'Điện thoại',
                    'trang_thai' => true  
                ],
                [
                    'ma_san_pham' => 'SP02',
                    'ten_san_pham' => 'Iphone 15',
                    'gia' => 200000,
                    'so_luong' => 50,
                    'ngay_nhap' => '2024/06/28',
                    'mota' => 'Điện thoại',
                    'trang_thai' => true   
                ]
            ]
        );
    }
}
