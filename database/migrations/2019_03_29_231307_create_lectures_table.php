<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('design_id');
            $table->enum('type', [
                'kajian rutin', 'kajian tematik', 'tablig akbar', 'safari dakwah'
            ]);
            $table->string('audience');
            $table->string('title');
            $table->string('tag_line')->nullable();
            $table->string('lecturer');
            $table->string('book')->nullable();
            $table->text('place');
            $table->date('date');
            $table->time('time');
            $table->string('organizer');
            $table->string('contact');
            $table->string('donation')->nullable();
            $table->boolean('is_meal');
            $table->boolean('is_streaming');
            $table->timestamps();

            # setting foreign key
            $table->foreign('design_id')->references('id')->on('designs')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}
