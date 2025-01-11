<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->dateTime('date');
            $table->integer('duration');
            $table->timestamps();
        });
    }
    

    
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
