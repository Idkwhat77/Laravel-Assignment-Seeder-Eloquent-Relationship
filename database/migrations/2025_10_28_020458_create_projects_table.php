<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('github_url')->nullable();
            $table->json('technologies')->nullable();
            $table->boolean('featured')->default(false);
            $table->enum('status', ['completed', 'in_progress', 'planned'])->default('completed');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};