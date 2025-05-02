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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->nullable(false);
            $table->string('username', 30)->nullable(false);
            $table->string('email')->nullable(false)->unique();
            $table->string('picture', 100)->nullable(true);
            $table->enum('role', [1, 2])->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('reset_password_token', 255)->nullable();
            $table->string('password', 100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
