<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->enum('status', ['open', 'in progress', 'finished'])->default('open')->index();
            $table->string('client');
            $table->string('client_phone');
            $table->string('size');
            $table->string('base_color')->nullable();
            $table->string('image')->nullable();
            $table->enum('type', [
                'kajian rutin', 'kajian tematik', 'tablig akbar', 'safari dakwah'
            ]);
            $table->string('audience');
            $table->string('title');
            $table->string('tagline')->nullable();
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
            $table->text('add_info')->nullable();
            $table->timestamps();

            # setting foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designs');
    }
}
