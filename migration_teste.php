<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('name'); // Nome
            $table->string('nome_usuario')->unique(); // Nome de usuário
            $table->string('email')->unique(); // E-mail
            $table->string('recuperar_email')->nullable(); // E-mail de recuperação de acesso
            $table->string('tel')->nullable(); // Telefone
            $table->string('cel')->nullable(); // Celular
            $table->string('funcao')->nullable(); // Função
            $table->string('localidade')->nullable(); // Localidade
            $table->enum('perfil_acesso', ['1', '2', '3']); // Perfil de acesso
            $table->string('senha'); // Senha
            $table->boolean('enviar_email')->default(false); // Enviar senha no e-mail
            $table->boolean('ativo')->default(true); // Ativo
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
