<?php namespace DigitalArtisan\Studio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigitalartisanStudioStatuts extends Migration
{
    public function up()
    {
        Schema::create('digitalartisan_studio_statuts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('abrege', 15)->nullable();
            $table->text('complement')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digitalartisan_studio_statuts');
    }
}