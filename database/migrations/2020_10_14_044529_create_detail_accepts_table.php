<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\detail_accept;
class CreateDetailAcceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_accepts', function (Blueprint $table) {
            $table->id();
            $table->integer('accept_id');
            $table->text('description');
            $table->date('service_date');
            $table->timestamps();
        });
        $d_accepts = array(
            ['accept_id' => '1', 'description' => 'test1', 'service_date' => '2020-10-16'],
            ['accept_id' => '1', 'description' => 'test2', 'service_date' => '2020-10-16']
        );
        foreach($d_accepts as $d_accept){
            detail_accept::create($d_accept);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_accepts');
    }
}
