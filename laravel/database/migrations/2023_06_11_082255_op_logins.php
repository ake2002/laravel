<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OpLogins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('op_logins', function (Blueprint $table) {
            $table->increments('id')->PrimaryKey();
            $table->string('name');
            $table->text('op_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('op_place');
            $table->dateTime('last_login_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    
    {
        Schema::dropIfExists('op_logins');
        //
    }
}
