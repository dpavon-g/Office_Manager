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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('primer_apellido', 100);
            $table->string('segundo_apellido', 100);
            $table->enum('rol', ['administrador', 'empleado', 'gerente']); // Puedes modificar los roles
            $table->date('fecha_de_nacimiento');
            $table->string('DNI', 9)->unique();
            $table->string('email', 255)->unique();
            $table->unsignedBigInteger('oficina_id');
            $table->timestamps();

            $table->foreign('oficina_id')->references('id')->on('oficinas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
