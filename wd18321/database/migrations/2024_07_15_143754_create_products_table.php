<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     // Hàm up chạy khi thực hiện câu lệnh php artisan migrate
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id'); // increments() Mặc định là primary key hoặc viết thêm ->primary()
            $table->string('name', 20);
            $table->float('price', 10, 2)->default(800.02);
            $table->string('description', 500)->nullable();
            $table->timestamps(); // created_at | updated_at
        });
    }

    /**
     * Reverse the migrations.
     */

      // Hàm down chạy khi thực hiện câu lệnh php artisan migrate:rollback | reset
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
