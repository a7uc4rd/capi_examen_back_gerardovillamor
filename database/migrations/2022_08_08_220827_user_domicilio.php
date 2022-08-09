<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDomicilio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('user_domicilio',function(Blueprint $table){
            $table->id();
            $table->integer('user_id');
            $table->text('domicilio');
            $table->string('numero_exterior');
            $table->string('colonia');
            $table->string('cp');
            $table->string('ciudad');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(
            'user_domicilio'
        );
    }
}
