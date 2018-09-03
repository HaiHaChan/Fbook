<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('phone', 50)->nullable();
            $table->string('employee_code', 50)->unique();
            $table->string('position', 50);
            $table->integer('reputation_point')->default(0);
            $table->string('avatar')->nullable();
            $table->string('workspace', 50);
            $table->tinyInteger('office_id')->unsigned()->nullable();
            $table->string('chatwork_id', 50)->unique()->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
