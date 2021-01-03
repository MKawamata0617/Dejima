<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('books')) {
        Schema::create('books', function (Blueprint $table) {
            $table->bigInrements('id');
            $table->string('name');
            $table->rememberToken();
            $table->timestamps();
            $table->string('job');
            $table->string('weapon');
            $table->string('technipue');
            $table->text('character');
        });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}