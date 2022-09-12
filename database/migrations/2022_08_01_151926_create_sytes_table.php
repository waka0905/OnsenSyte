<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSytesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sytes', function (Blueprint $table) {
           $table->increments('id');
            $table->string('name', 50);
            $table->string('sauna', 50);
            $table->string('ganban', 50);
            $table->string('tansan', 50);
            $table->string('restaurant', 50);
            $table->timestamps();
            $table->string('url', 2083)->nullable();
            $table->string('prefecture', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('nearest', 100)->nullable();
            $table->string('price', 100)->nullable();
            $table->string('time', 100)->nullable();
            $table->string('close', 100)->nullable();
            $table->string('bus', 100)->nullable();
            $table->string('direction', 100)->nullable();
            $table->string('review', 100)->nullable();
            $table->string('star', 100)->nullable();
            $table->string('img1', 100)->nullable();
            $table->string('img2', 100)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sytes');
    }
}
