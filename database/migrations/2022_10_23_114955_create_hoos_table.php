<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoos', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Foreign Key
            $table->foreignId('restaurant_id')->constrained()->ondelete('cascade');

            // Required
            $table->set('day', ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']);
            $table->time('open_time');
            $table->time('close_time');

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
        Schema::dropIfExists('hoos');
    }
};
