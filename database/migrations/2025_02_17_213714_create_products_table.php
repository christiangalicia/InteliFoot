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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', length: 60);
            $table->text('descripcion');
            $table->string('foto', length: 200);
            $table->enum('tallas', ['ch', 'md', 'gd']);
            $table->decimal('precio', total: 8, places: 2);
            $table->foreignId('catalog_id')->constrained('catalogs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
