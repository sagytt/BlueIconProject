<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('name');
            $table->integer('score');
            $table->float('econhunt_deal');
            $table->text('link');
            $table->text('sourcing');
            $table->float('cost');
            $table->timestamps();
            $table->text('processing');
            $table->string('special_line');
            $table->string('branding');
            $table->text('couriers');
            $table->text('support');
            $table->string('return_policy');
            $table->string('pod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
