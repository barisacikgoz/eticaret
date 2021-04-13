<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('settings_appellation');
            $table->string('settings_form_mail');
            $table->string('settings_about_the_company');
            $table->string('settings_facebook');
            $table->string('settings_working_hours');
            $table->string('settings_twitter');
            $table->string('settings_address');
            $table->string('settings_instagram');
            $table->string('settings_phone_1');
            $table->string('settings_google');
            $table->string('settings_phone_2');
            $table->string('settings_linkedin');
            $table->string('settings_mail_1');
            $table->string('settings_maps');
            $table->string('settings_mail_2');
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
        Schema::dropIfExists('contacts');
    }
}
