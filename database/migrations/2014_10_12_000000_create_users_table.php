<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        $users = array(
            ['name' => 'Achiraya', 'email' => 'atnannat@gmail.com', 'password' => '1234'],
            ['name' => 'Nattawat', 'email' => 'step_ball@hotmail.com', 'password' => '1234'],
            ['name' => 'Parichad', 'email' => 'PP@hotmail.com', 'password' => '1234']
        );
        foreach($users as $user){
            User::create($user);
        }
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
