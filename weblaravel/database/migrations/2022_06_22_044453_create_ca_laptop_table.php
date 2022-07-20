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
        Schema::create('ca_laptop', function (Blueprint $table) {
            $table->increments('laptop_id');
            $table->string('laptop_name');
            $table->string('laptop_gia');
            $table->text('laptop_chucnang');
            $table->text('laptop_desc');
            $table->integer('laptop_status');
            $table->string('laptop_file')->nullable();
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
        Schema::dropIfExists('ca_laptop');
    }
};
