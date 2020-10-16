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
            $table->char('name_informant',100);
            $table->char('name_notifier',100);
            $table->char('name_responsible',100);
            $table->text('description')->nullable();
            $table->char('status',20);
            $table->char('tel',20);
            $table->timestamps();
        });

        $accepts = array(
            ['name_informant' => 'Achiraya', 'name_notifier' => 'Nattawat', 'name_responsible' => 'Parichad', 'description' => '123456abcd', 'status' => 'user', 'tel' => '02-xxxxxx']
        );
        foreach($accepts as $accept){
            accept::create($accept);
        }
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
