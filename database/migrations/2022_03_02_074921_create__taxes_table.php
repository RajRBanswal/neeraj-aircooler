<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_taxes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('CGST');
            $table->integer('SGST');
            $table->integer('IGST');
            $table->string('GST');
            $table->string('incl_rate');
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
        Schema::dropIfExists('_taxes');
    }
}
