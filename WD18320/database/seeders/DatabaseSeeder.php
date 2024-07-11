<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // SanPhamSeeder::class, 
            KhachHangSeeder::class
            // Nếu seeder này chạy rồi thì khi chạy lại php artisan db:seed sẽ bị lỗi vì trùng id của mảng dữ liệu trước
            // Bỏ seeder chạy rồi đi là chạy được tiếp
            // Các seeder khác
        ]);
    }
}
