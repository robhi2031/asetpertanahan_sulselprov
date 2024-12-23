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
        Schema::create('site_info', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name');
            $table->string('description');
            $table->text('keyword');
            // $table->text('thumb');
            $table->text('login_bg');
            $table->text('login_logo');
            $table->text('head_logo');
            $table->text('head_logo');
            $table->text('head_logo_small');
            $table->text('copyright');
            $table->text('iframe_map')->nullable();
            $table->integer('user_updated')->nullable();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_info');
    }
};
