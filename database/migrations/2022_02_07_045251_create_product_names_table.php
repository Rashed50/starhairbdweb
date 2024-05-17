<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_names', function (Blueprint $table) {
            $table->id('product_name_id');
            $table->string('product_name');
            $table->string('code');
            $table->longText('description');
            $table->float('price');
            $table->Integer('quantity')->default(0);
            $table->string('imagePath')->nullable();
            $table->unsignedBigInteger('product_type_id');
            $table->boolean('is_active')->default(1);
            $table->timestamps();
            //  foreign key relation with service type and provider information
            $table->foreign('product_type_id')->references('product_type_id')->on('product_types');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_names');
    }
}
