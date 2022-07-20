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
        Schema::create('ca_mobile', function (Blueprint $table) {
            $table->increments('moblie_id');
            $table->string('mobile_name');
            $table->string('mobile_gia');
            $table->text('mobile_chucnang');
            $table->text('mobile_desc');
            $table->integer('mobile_status');
            $table->string('mobile_file')->nullable();
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
        Schema::dropIfExists('ca_mobile');
    }
};
