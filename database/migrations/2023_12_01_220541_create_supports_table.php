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
        Schema::create('supports', function (Blueprint $table) {
            $table->bigIncrements('id');
            
$table->unsignedBigInteger('customer_id');
$table->foreign('customer_id')->references('id')->on('customers');

$table->string('numerosolicitud');

$table->unsignedBigInteger('type_id');
$table->foreign('type_id')->references('id')->on('supports_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supports');
    }
};
