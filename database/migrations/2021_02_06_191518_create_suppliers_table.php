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
            $table->bigInteger('user_id')->unsigned();
            $table->string('status')->nullable();
            $table->string('name')->nullable();
            $table->integer('score')->nullable();
            $table->integer('econhunt_deal')->nullable();
            $table->text('link')->nullable();
            $table->text('sourcing')->nullable();
            $table->float('cost')->nullable();
            $table->text('processing')->nullable();
            $table->string('special_line')->nullable();
            $table->string('branding')->nullable();
            $table->text('couriers')->nullable();
            $table->text('support')->nullable();
            $table->string('return_policy')->nullable();
            $table->string('pod')->nullable();;
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
        Schema::dropIfExists('suppliers');
    }
}
