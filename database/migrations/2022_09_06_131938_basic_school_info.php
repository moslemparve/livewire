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
        Schema::create('basic_school_infos', function (Blueprint $table) {
        $table->id();
        $table->string('school_name');
        $table->string('school_phone');
        $table->string('email')->unique();
        $table->string('facebook_link');
        $table->string('website_link');
        $table->string('linked_in_link');
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
        //
    }
};
