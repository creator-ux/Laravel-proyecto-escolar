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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('mark');
            $table->integer('size');
            //SE ANEXA 2 CAMPOS ADICIONALES A LA TABLA computers
            $table->timestamp('published_at')->nullable();; //campo extra
            $table->boolean('is_active');      //campo extra
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
