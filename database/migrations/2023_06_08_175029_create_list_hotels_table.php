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
        Schema::create('list_hotels', function (Blueprint $table) {
            $table->id();
            $table->string('Ititle',30);
            $table->enum('Istar',['1','2','3','4','5']);
            $table->string('Ipais',25);
            $table->string('Iciu',25);
            $table->string('Idirec',30);
            $table->string('Itelf',9);
            $table->enum('Istate', ['A','I']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_hotels');
    }
};
