<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJip18ft06sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jip18ft06s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('question_data');
            $table->text('option1')->nullable();
            $table->text('option2')->nullable();
            $table->text('option3')->nullable();
            $table->text('option4')->nullable();
            $table->text('correct_ans');
            $table->text('difficulty');
            $table->text('ideal_time');
            $table->text('question_type');
            $table->text('subject');
            $table->longtext('solution')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jip18ft06s');
    }
}
