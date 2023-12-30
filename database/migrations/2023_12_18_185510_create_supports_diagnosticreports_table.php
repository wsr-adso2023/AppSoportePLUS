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
        Schema::create('supports_diagnosticreports', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            // Id de Solicitud
            $table->unsignedBigInteger('request_id');
            $table->foreign('request_id')->references('id')->on('supports');

            // Id de Detalle Solicitud
            $table->unsignedBigInteger('detail_id');
            $table->foreign('detail_id')->references('id')->on('supports_detail');

            // Id Servicio Requerido
            $table->unsignedBigInteger('servicerequired_id');
            $table->foreign('servicerequired_id')->references('id')->on('supports_servicerequired');

            // Id Producto 1
            $table->unsignedBigInteger('product1');
            $table->foreign('product1')->references('id')->on('products');

            // Id Producto 2
            $table->unsignedBigInteger('product2');
            $table->foreign('product2')->references('id')->on('products');

            // Id Producto 3
            $table->unsignedBigInteger('product3');
            $table->foreign('product3')->references('id')->on('products');

            // Id Producto 4
            $table->unsignedBigInteger('product4');
            $table->foreign('product4')->references('id')->on('products');

            // Id Producto 5
            $table->unsignedBigInteger('product5');
            $table->foreign('product5')->references('id')->on('products');

            // Id Producto 6
            $table->unsignedBigInteger('product6');
            $table->foreign('product6')->references('id')->on('products');

            // Id Producto 7
            $table->unsignedBigInteger('product7');
            $table->foreign('product7')->references('id')->on('products');

            // Id Producto 8
            $table->unsignedBigInteger('product8');
            $table->foreign('product8')->references('id')->on('products');

            // Reporte de diagnostico
            $table->string('reportdiagnostic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supports_diagnosticreports');
    }
};
