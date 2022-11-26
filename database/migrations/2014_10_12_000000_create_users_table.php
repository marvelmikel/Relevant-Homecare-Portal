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
            $table->increments('id');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('sdate')->nullable();
            $table->string('endate')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('nfhpd')->nullable();
            $table->string('ea')->nullable();

            //employee migration table
            $table->string('bgr')->nullable();
            $table->string('rsn')->nullable();
            $table->string('evvcn')->nullable();
            $table->string('ehr')->nullable();
            $table->string('ear')->nullable();
            $table->string('epi')->nullable();
            $table->string('ewwh')->nullable();
            $table->string('gbwp')->nullable();
            $table->string('get')->nullable();
            $table->string('ydgp')->nullable();
            $table->string('bp_ytd')->nullable();
            $table->string('ers')->nullable();
            $table->string('email')->unique();
            $table->string('role')->default(0);
            $table->string('status')->default("active")->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
