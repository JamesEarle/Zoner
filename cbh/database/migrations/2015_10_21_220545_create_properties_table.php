<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Add subscription for landlords later. Free, Silver, Gold. Use $table->enum('package', array('free', 'silver', 'gold'));
        Schema::create('properties', function(Blueprint $table){
            $table->string('id', 13)->unique();
            $table->boolean('vacant')->default(false);
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('price');
            $table->integer('area');
            $table->string('title', 60);
            $table->text('description');
            $table->text('address');
            $table->text('city');
            $table->text('province');
            $table->text('property_type');
            $table->text('features');
            $table->integer('rooms');
            $table->integer('baths');
            $table->double('distance_to_school');
            $table->double('time_to_bus');
            $table->string('featured-image');
            $table->string('image');
            $table->string('landlord-email');
            $table->timestamp('posted_at');
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
        Schema::drop('properties');
    }
}
