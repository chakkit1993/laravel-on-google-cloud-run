<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaderboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaderboards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->string('stage');
            $table->string('t1');
            $table->string('t2');
            $table->string('tResult');
            $table->boolean('pc1')->default(false);
            $table->boolean('pc2')->default(false);
            $table->boolean('pc3')->default(false);
            $table->boolean('pc4')->default(false);
            $table->boolean('pc5')->default(false);
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
        Schema::dropIfExists('leaderboards');
    }
}
