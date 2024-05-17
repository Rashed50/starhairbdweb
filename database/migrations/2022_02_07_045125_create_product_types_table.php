<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->id('product_type_id');
            $table->string('product_type_name');
            $table->string('product_type_photo',100)->nullable();
            $table->boolean('is_active');
            $table->unsignedBigInteger('service_type_id');
            $table->foreign('service_type_id')->references('service_type_id')->on('service_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_types');
    }
}
