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
        Schema::table('san_phams', function (Blueprint $table) {
            $table->text('hinh_anh')->nullable()->after('id'); // Thêm trường hình ảnh sau trường id = after()
            $table->double('gia', 10, 2)->change();  // Cập nhật lại trường "gia" đã có trong bảng = change()
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('san_phams', function (Blueprint $table) {
            // Viết ngược lại với hàm up bên trên
            $table->dropColumn('hinh_anh'); // Xóa trường
            $table->double('gia', 8, 2)->change();
        });
    }
};
