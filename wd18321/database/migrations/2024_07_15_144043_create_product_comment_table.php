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
        // Schema::create('product_comment', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->unsignedInteger('userId'); // unsign: số nguyên không âm
        //     $table->unsignedInteger('productId');
        //     $table->string('comment', 500);
        //     $table->timestamps();
        //     $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); // references(): tham chiếu đến cột nào, on(): bảng nào, onDelete('cascade): xóa những thằng liên quan đến khóa ngoại này
        //     $table->foreign('productId')->references('id')->on('products')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_comment');
    }
};
