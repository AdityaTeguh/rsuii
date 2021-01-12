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
        Schema::create('cr_user', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('user');
            $table->string('kunci');
            $table->string('user_aktif');            $table->string('peran_id')->id();
            $table->string('i_user')->nullable();
            $table->string('i_ip')->nullable();            
            $table->string('i_datetime')->nullable();
            $table->string('u_user')->nullable();
            $table->string('u_ip')->nullable();   
            $table->timestamp('datetime')->nullable();
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
        Schema::dropIfExists('cr_user');
    }
}
