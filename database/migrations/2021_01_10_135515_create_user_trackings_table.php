<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_trackings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('site_log_id');
            $table->unsignedBigInteger('visits_count');
            $table->unsignedBigInteger('no_of_visits');
            $table->string('client_ip', 500);
            $table->string('user_agent', 500);
            $table->string('requested_url', 500);
            $table->string('referer_page', 500);
            $table->string('page_name', 500);
            $table->string('query_string', 500);
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
        Schema::dropIfExists('user_trackings');
    }
}
