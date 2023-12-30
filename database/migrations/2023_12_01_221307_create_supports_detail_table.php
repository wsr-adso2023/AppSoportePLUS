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
        Schema::create('supports_detail', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('support_id');
            $table->foreign('support_id')->references('id')->on('supports');

            $table->string('description');
            $table->string('brand');
            $table->string('model');
            $table->string('serialnumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supports_detail');
    }
};
