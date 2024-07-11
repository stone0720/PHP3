<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ma_san_pham',10)->unique();//10 ky tu, -> unique:du lieu kh trung nhau co the dung trong sdt hoac email
            $table->string('ten_san_pham',255);
            $table->double('gia', 8, 2); // lay 8 so, phan thap phan lay 2 so
            $table->integer('so_luong');
            $table->date('ngay_nhap');
            $table->text('mota')->nullable();//nullable cho phep gia tri la null
            $table->boolean('trang_thai')->default(0);//default xet gia tri mac dinh
            $table->timestamps();//tu sinh ra create_at ,update_at
            //php artisan make:migration create_san_phams_table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
