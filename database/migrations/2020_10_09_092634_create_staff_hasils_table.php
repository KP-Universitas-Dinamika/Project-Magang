<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_hasil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('note');
            $table->string('pemberi');
            $table->string('penerima');
            $table->date('date');
            $table->string('gambar');
            $table->string('file');
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
        Schema::dropIfExists('staff_hasil');
    }
}
