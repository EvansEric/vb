<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->char('state', 2)->nullable();
            $table->char('city', 20)->nullable();
            $table->char('zip', 5)->nullable();
            $table->text('avatar')->nullable();
            //$table->text('');
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
        Schema::dropIfExists('profiles');
    }
}
