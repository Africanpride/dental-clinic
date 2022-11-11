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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->boolean('isAdmin')->default(false);
            $table->boolean('isActivated')->default(false);
            $table->boolean('isApproved')->default(false);
            $table->string('email')->unique();
            $table->boolean('acceptMarketing')->default(false);
            $table->timestamp('last_login_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->ipAddress('last_login_ip')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
