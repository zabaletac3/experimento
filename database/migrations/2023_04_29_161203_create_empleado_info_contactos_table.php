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
        Schema::create('empleado_info_contactos', function (Blueprint $table) {
            $table->id();
            $table->string('telefono');
            $table->string('celular');
            $table->string('direccion');
            $table->string('email');

            // $table->unsignedBigInteger('empleado_id');

            // $table->foreign('empleado_id')
            //         ->references('id')
            //         ->on('empleados')
            //         ->onDelete('cascade')
            //         ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado_info_contactos');
    }
};
