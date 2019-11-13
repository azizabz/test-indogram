<?php namespace AbdulAziz\AzizIndogram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAbdulazizAzizindogram extends Migration
{
    public function up()
    {
        Schema::create('abdulaziz_azizindogram_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('photo_name');
            $table->text('caption')->nullable();
            $table->dateTime('posted_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('abdulaziz_azizindogram_');
    }
}
