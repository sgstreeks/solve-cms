<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJipphy14tt03sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jipphy14tt03s', function (Blueprint $table) {
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
        Schema::dropIfExists('jipphy14tt03s');
    }
}
