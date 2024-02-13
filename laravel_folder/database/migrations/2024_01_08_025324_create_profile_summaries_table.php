<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_summaries', function (Blueprint $table) {
            $table->id();

            $table->string('user_id');
            $table->string('summary_1')->nullable();
            $table->string('summary_2')->nullable();
            $table->string('summary_3')->nullable();
            $table->string('summary_4')->nullable();

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
        Schema::dropIfExists('profile_summaries');
    }
}
