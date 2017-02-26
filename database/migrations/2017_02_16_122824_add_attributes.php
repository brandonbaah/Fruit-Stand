<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fruits', function (Blueprint $table) {
            $table->string('name');
            $table->integer('price');
            $table->string('photo');
            $table->date('expiration_date');
            $table->boolean('confirmed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fruits', function (Blueprint $table) {
            //
        });
    }
}
