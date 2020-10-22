<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\accept;
class CreateAcceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accepts', function (Blueprint $table) {
            $table->id();
            $table->char('informant',100);
            $table->char('position',100);
            $table->char('unit',100);
            $table->char('location',100);
            $table->char('owner',100);
            $table->text('topic');
            $table->char('status',50)->nullable();
            $table->char('responsible',100)->nullable();
            $table->char('groupissue',100)->nullable();
            $table->char('type',100)->nullable();
            $table->char('sapid',100)->nullable();
            $table->char('result',100)->nullable();
            $table->char('resultdetail',100)->nullable();
            $table->char('coworker',100)->nullable();
            $table->char('namecoworker',100)->nullable();
            $table->timestamps();
        });

        /*$accepts = array(
            ['name_informant' => 'Achiraya', 'name_notifier' => 'Nattawat', 'name_responsible' => 'Parichad', 'description' => '123456abcd', 'status' => 'user', 'tel' => '02-xxxxxx']
        );
        foreach($accepts as $accept){
            accept::create($accept);
        }*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accepts');
    }
}
