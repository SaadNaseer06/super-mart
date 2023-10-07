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
        Schema::create('orders', function (Blueprint $table) 
        {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('contact');
            $table->integer('fax');
            $table->string('company');
            $table->string('address');
            $table->string('postalcode');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
    
};
