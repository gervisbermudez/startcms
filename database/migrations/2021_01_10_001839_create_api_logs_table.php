<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_logs', function (Blueprint $table) {
            $table->id();
            $table->string('uri');
            $table->string('method');
            $table->text('params');
            $table->string('api_key');
            $table->string('ip_address');
            $table->unsignedBigInteger('time');
            $table->float('rtime');
            $table->string('authorized');
            $table->unsignedBigInteger('response_code');
            $table->integer('status')->unsigned()->default("1");
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
        Schema::dropIfExists('api_logs');
    }
}
