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
        Schema::create('comercios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // FK do usuário que cadastrou
            $table->string('name');
            $table->text('description');
            $table->string('service');
            $table->string('city');
            $table->string('neighborhood');
            $table->string('street');
            $table->string('street_number');
            $table->text('image'); // Caminho da imagem
            $table->string('cep');
            $table->string('telephone');
            $table->timestamps();

            // Relacionamento com a tabela users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comercios');
    }
};
