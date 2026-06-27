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
        Schema::create('singup', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->text("name");
            $table->text("ennumber");
            $table->text("password");
            $table->text('sem');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('singup');
    }
};
