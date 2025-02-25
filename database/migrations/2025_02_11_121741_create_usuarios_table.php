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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50)->nullable(false);
            $table->string('email', 80)->unique()->nullable(false);
            $table->string('celular', 11)->nullable(false);
            $table->string('estado_civil', 25)->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->string('cidade', 80)->nullable(false);
            $table->string('estado', 30)->nullable(false);
            $table->string('endereco', 40)->nullable(false);
            $table->string('cep')->nullable(false);
            $table->string('password', 8)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
