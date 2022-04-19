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
        Schema::create('residences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('squaremeters');
            $table->integer('rooms');
            //$table->integer('bathrooms');
            $table->integer('residents');
            $table->string('smoking')->default(false);
            $table->string('animals')->default(false);
            $table->string('partying')->default(false);
            $table->string('picture')->default("none");
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
        Schema::dropIfExists('residence');
    }
};
