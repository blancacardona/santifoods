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
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 30)->unique();
            $table->string('slug', 30)->unique();
            $table->text('descripcion')->nullable();
            $table->time('tiempo', $precision = 0);
            $table->integer('raciones');
            $table->text('ingredientes');
            $table->text('elaboracion');
            $table->unsignedbigInteger('category_id');
            $table->char('principal', 2);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
