<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

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
            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isTermsChecked');
            $table->boolean('isVerified')->default(false);
            $table->boolean('isAdmin')->default(false);
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'fullName' => 'admin@crypto.com',
                'email' => 'admin@crypto.com',
                'password' => Hash::make('admin@crypto.com'),
                'isTermsChecked' => true,
                'isVerified' => true,
                'isAdmin' => true,
            )
        );
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
