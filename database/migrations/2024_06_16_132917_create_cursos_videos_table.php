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
        Schema::create('cursos_videos', function (Blueprint $table) {
            $table->id();
            $table->integer('curso_id');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('descripcion');
            $table->string('url');
            $table->integer('duracion');

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
        Schema::dropIfExists('cursos_videos');
    }
};
