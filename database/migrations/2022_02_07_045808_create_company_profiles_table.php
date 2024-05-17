<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id('comp_id');
            $table->string('comp_name_en',100);
            $table->string('comp_name_ban',100);
            $table->text('comp_address');
            $table->string('comp_email1',50);
            $table->string('comp_email2',50)->nullable();
            $table->string('comp_twitter',100)->nullable();
            $table->string('comp_linkedin',100)->nullable();
            $table->string('comp_facebook',100)->nullable();
            $table->string('comp_skype',100)->nullable();
            $table->string('comp_whatsapp',20)->nullable();
            $table->string('comp_imo',20)->nullable();
            $table->string('comp_phone1',20);
            $table->string('comp_phone2',20)->nullable();
            $table->string('comp_mobile1',20);
            $table->string('comp_mobile2',20)->nullable();
            $table->string('comp_support_number',20)->nullable();
            $table->string('comp_hotline_number',20)->nullable();
            $table->longText('comp_description')->nullable();
            $table->longText('comp_mission')->nullable();
            $table->longText('comp_vission')->nullable();
            $table->string('comp_trade_licence',100)->nullable();
            $table->string('comp_tax_no')->nullable();
            $table->string('comp_tax_file',100) ->nullable();
            $table->string('comp_vat_no')->nullable();
            $table->string('comp_vat_file',100)->nullable();
            $table->string('com_logo',100);
            $table->string('com_QRcode',100)->nullable();
            $table->decimal('lat_value',10,6)->nullable();
            $table->decimal('long_value',10,6)->nullable();
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
        Schema::dropIfExists('company_profiles');
    }
}
