<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruts', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->nullable();
            $table->string('name')->nullable();
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('depart')->nullable();
            $table->string('occupation')->nullable();
            $table->string('profession')->nullable();
            $table->string('birth')->nullable();
            $table->string('gender')->nullable();
            $table->text('distMode')->nullable();
            $table->string('docImg')->nullable();
            $table->string('rutImg')->nullable();
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
        Schema::dropIfExists('ruts');
    }
}
