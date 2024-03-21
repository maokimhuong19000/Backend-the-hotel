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
        Schema::create('tblrooms', function (Blueprint $table) {
            $table->id('room_id');
            $table->string('room_name');
            $table->double('room_price');
            $table->string('room_status'); // Add your specific data type
            $table->text('room_desc');
            $table->timestamp('created_date')->useCurrent();
            $table->timestamp('updated_date')->useCurrent();
            $table->timestamp('deleted_date')->nullable();
            $table->boolean('room_active');
            $table->unsignedBigInteger('room_type_id');
            $table->string('room_img')->nullable();
            $table->foreign('room_type_id')->references('room_type_id')->on('tblroomtypes')->onDelete('cascade');
            $table->timestamps(); // Laravel timestamp columns
            $table->softDeletes(); // Laravel soft delete column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblrooms');
    }
};
