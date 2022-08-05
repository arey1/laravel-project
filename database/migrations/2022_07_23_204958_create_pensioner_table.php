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
        Schema::create('pensioner', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no',12);
            $table->string('pensioner_name',80);
            $table->date('pensioner_dob',);
            $table->string('pensioner_address',80);
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
        Schema::dropIfExists('pensioner');
    }
};
