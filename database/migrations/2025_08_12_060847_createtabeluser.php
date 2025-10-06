  <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
    Schema::create('tbl_user', function (Blueprint $table) {
            $table->id(); // kolom id auto increment
            $table->string('username')->unique(); // username admin
            $table->string('password'); // password dalam bentuk hash
            $table->string('role')->default('admin'); // role admin
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_user');
    }
};
