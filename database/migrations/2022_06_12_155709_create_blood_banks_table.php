<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_banks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('national_id')->nullable();
            $table->string('address')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->bigInteger('age')->nullable();
            $table->bigInteger('weight')->nullable();
            $table->bigInteger('donornumber')->nullable();
            $table->string('hospital')->nullable();
            $table->string('type'); 
            $table->date('date');
            $table->time('timeSlots');
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('blood_banks');
    }
}
