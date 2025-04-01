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
        Schema::create('user_data', function(Blueprint $table){
            $table->string('id')->primary();
            $table->string('name');
            $table->string('mobile');
            $table->string('age');
            $table->string('gender');
            $table->string('email');
            $table->string('state');
            $table->string('dist');
            $table->string('pass');
            $table->string('image');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
