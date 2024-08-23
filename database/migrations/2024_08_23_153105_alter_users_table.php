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
        Schema::table('users', function (Blueprint $table) {
            // Adicionando novos campos
            $table->string('nome_usuario')->unique()->after('name');
            $table->string('recuperar_email')->nullable()->after('email');
            $table->string('tel')->nullable()->after('recuperar_email');
            $table->string('cel')->nullable()->after('tel');
            $table->string('funcao')->nullable()->after('cel');
            $table->string('localidade')->nullable()->after('funcao');
            $table->enum('perfil_acesso', ['1', '2', '3'])->after('localidade');
            $table->boolean('enviar_email')->default(false)->after('perfil_acesso');
            $table->boolean('ativo')->default(true)->after('enviar_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Removendo os campos caso a migration seja revertida
            $table->dropColumn([
                'nome_usuario',
                'recuperar_email',
                'tel',
                'cel',
                'funcao',
                'localidade',
                'perfil_acesso',
                'enviar_email',
                'ativo'
            ]);
        });
    }
};
