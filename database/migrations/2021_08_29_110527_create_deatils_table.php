<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeatilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deatils', function (Blueprint $table) {
            $table->id();

            $table->string('About_titleAR')->nullable();
            $table->string('About_titleEN')->nullable();
            $table->text('About_bodyAR')->nullable();
            $table->text('About_bodyEN')->nullable();
            $table->string('image')->nullable();

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
        Schema::dropIfExists('deatils');
    }
}
