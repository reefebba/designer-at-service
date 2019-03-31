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
            $table->uuid('uuid')->index();
            $table->unsignedInteger('designer_id')->nullable();
            $table->enum('status', ['open', 'in-progress', 'finished', 'failed'])->default('open')->index();
            $table->string('size');
            $table->string('base_color')->default('terserah');
            $table->string('image')->nullable()->unique();
            $table->text('add_info')->nullable();
            $table->timestamps();

            # setting foreign key
            $table->foreign('designer_id')->references('id')->on('designers')->onDelete('set null');
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
