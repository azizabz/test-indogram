<?php namespace AbdulAziz\AzizIndogram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAbdulazizAzizindogram extends Migration
{
    public function up()
    {
        Schema::dropIfExists('abdulaziz_azizindogram_');
    }
    
    public function down()
    {
        Schema::create('abdulaziz_azizindogram_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('photo_name', 255);
            $table->text('caption')->nullable()->default('NULL');
            $table->dateTime('posted_at');
        });
    }
}
