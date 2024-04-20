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
        Schema::create('laporans', function (Blueprint $table) {
         $table->id();
    $table->string('title');
    $table->text('isi');
    $table->text('img');
<<<<<<< HEAD
      $table->string('label');
         $table->string('status');
        });
=======
    $table->string('status');
	$table->string('distrik');
    $table->timestamps();
        });
        
>>>>>>> 5090c0447caae7f45ee8ac1ff39bfcedcf2ce4a7
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
