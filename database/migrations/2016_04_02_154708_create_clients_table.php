<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('gender');
                $table->date('dob');
                $table->string('rg');
                $table->string('phone');
                $table->boolean('legal_age');
                /* address */
                $table->char('cep');
                $table->char('street', 255);
                $table->string('number');
                $table->char('complement', 255);
                $table->char('neighborhood', 255);
                $table->char('city', 255);
                $table->char('state', 255);          
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
        Schema::drop('clients');
    }
}
