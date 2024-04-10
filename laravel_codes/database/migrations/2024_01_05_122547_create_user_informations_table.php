<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_informations', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('domain')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();

            $table->string('skill_1')->nullable();
            $table->string('skill_2')->nullable();
            $table->string('skill_3')->nullable();
            $table->string('skill_4')->nullable();
            $table->string('skill_5')->nullable();
            $table->string('skill_6')->nullable();
            $table->string('skill_7')->nullable();

            $table->string('language_1')->nullable();
            $table->string('language_2')->nullable();
            $table->string('language_3')->nullable();

            $table->string('ug')->nullable();
            $table->string('ug_college_name')->nullable();
            $table->string('ug_year_passing')->nullable();

            $table->string('pg')->nullable();
            $table->string('pg_college_name')->nullable();
            $table->string('pg_year_passing')->nullable();
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
        Schema::dropIfExists('user_informations');
    }
}
