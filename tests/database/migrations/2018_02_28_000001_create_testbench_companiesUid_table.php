<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestbenchCompaniesUidTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('companiesUid', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('companiesUid');
    }
}
