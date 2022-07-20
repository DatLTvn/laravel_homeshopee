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
        //
        Schema::create('tbl_all_custom', function (Blueprint $table) {
            $table->increments('custom_id');
            $table->string('custom_name');
            $table->text('custom_email');
            $table->text('custom_address');
            $table->integer('custom_phone');
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
        //
    }
};
