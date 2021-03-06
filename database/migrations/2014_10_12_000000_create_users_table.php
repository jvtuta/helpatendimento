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
            $table->id();
            $table->softDeletes();
            $table->string('name');
            $table->string('nome_usuario')->unique();
            $table->string('nivel_usuario',20)->default('atendente');
            $table->string('imagem_perfil_urn')->nullable();
            $table->boolean('active')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('administrador')->nullable();
            $table->boolean('autorizado')->default(false);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
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
