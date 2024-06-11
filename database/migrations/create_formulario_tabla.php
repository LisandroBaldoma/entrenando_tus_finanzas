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
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->string('email')->nullable();
            $table->string('celular')->nullable();
            $table->text('mensaje')->nullable();
            $table->string('asesor')->nullable();
            $table->string('membresia')->nullable();
            $table->string('experiencia')->nullable();
            $table->double('inversion')->nullable();
            $table->string('recomendacion')->nullable();
            $table->string('tipo');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->primary('id');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
