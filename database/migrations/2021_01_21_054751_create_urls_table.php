<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urls', function (Blueprint $table) {
            $table->id();
            $table->longText('original');
            $table->longText('shortened')->unique();
            $table->longText('full_url')->unique();
            $table->boolean('visible')->default(false);
            $table->dateTime('deleted_at')->default(\Illuminate\Support\Facades\DB::raw('DATE_ADD(NOW(), INTERVAL 1 DAY)'));
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
        Schema::dropIfExists('urls');
    }
}
