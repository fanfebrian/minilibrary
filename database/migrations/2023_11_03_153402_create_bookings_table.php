<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('bookings', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('book_id');
    //         $table->foreignId('user_id');
    //         $table->string('status')->nullable();
    //         $table->timestamps();
    //     });
    // }

    // $table->id();
    // $table->string('name');
    // $table->string('profesi');
    // $table->string('title');
    // $table->string('publisher');
    // $table->integer('jumlah');
    // $table->string('status');
    // $table->timestamps();



    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('book_id');
            $table->foreignId('user_id');
            $table->timestamp('return_date')->nullable();
            $table->timestamp('expired_date')->nullable();
            $table->string('status')->nullable();
            $table->integer('isDenda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
