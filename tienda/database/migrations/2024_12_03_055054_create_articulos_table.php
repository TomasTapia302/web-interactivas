<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{

    Schema::create('articulos', function (Blueprint $table) {
        $table->id();
        $table->string('Nom_articulo');
        $table->text('descripcion');
        $table->decimal('precio', 8, 2);
        $table->integer('inventario');
        $table->string('tipo');
        $table->foreignId('id_vendedor')->constrained('users');  // Relación con la tabla 'users'
        $table->string('url_imagen');
        $table->timestamps();  // Agrega estas líneas para created_at y updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
