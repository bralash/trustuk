<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('userInfo', function(Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('title');
            $table->string('dob');
            $table->string('gender');
            $table->string('address');
            $table->string('marital');
            $table->string('contact');
            $table->string('country');
            $table->string('id_type');
            $table->string('id_number');
            $table->string('spouse_fullname');
            $table->string('spouse_dob');
            $table->string('spouse_profession');
            $table->string('spouse_gender');
            $table->string('spouse_contact');
            $table->string('bene_fullname');
            $table->string('bene_dob');
            $table->string('bene_share');
            $table->string('kin_fullname');
            $table->string('kin_dob');
            $table->string('kin_relation');
            $table->string('kin_profession');
            $table->string('kin_contact');
            $table->string('kin_id_type');
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
        Schema::dropIfExists('userInfo');
    }
}
