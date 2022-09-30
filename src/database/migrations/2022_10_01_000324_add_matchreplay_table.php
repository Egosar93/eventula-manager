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
        Schema::table('matchreplay', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('matchmaking_id')->unsigned()->index();
            $table->timestamps();

            ## Foreign Keys
            $table->foreign('matchmaking_id')->references('id')->on('matchmaking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_tournaments', function (Blueprint $table) {
            $table->dropColumn('grand_finals_modifier');
        });
    }

};