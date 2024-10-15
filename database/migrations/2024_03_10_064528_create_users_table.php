<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name', 50);
            $table->string('last_name', 50);
            $table->unsignedInteger('telephone')->unique();
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('document_type', ['CC', 'TI', 'CE', 'PA']);
            $table->unsignedInteger('document_number')->unique();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('direction')->nullable();
            $table->string('references')->nullable();
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade')->onUpdate('cascade')->default(3); 
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
};
