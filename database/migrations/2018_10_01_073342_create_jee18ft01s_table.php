<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJee18ft01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jee18ft01s', function (Blueprint $table) {
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
        Schema::dropIfExists('jee18ft01s');
    }
}
