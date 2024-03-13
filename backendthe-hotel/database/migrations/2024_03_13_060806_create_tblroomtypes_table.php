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
        Schema::create('tblroomtypes', function (Blueprint $table) {
            $table->id('room_type_id');
            $table->string('room_type_name');
            $table->text('room_type_desc');
            $table->timestamps(); // Laravel timestamp columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblroomtypes');
    }
};
