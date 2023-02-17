<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesTwitchembedChannel extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_twitchembed_channel', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('channel');
            $table->smallInteger('width');
            $table->smallInteger('height');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_twitchembed_channel');
    }
}
