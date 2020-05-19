<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('type',100);
            $table->date('dob');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('biteyness');
            $table->bigInteger('owner_id')->unsigned();
            $table->timestamps();

            $table->foreign("owner_id")->references("id")->on("owners")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
