<?php namespace AbdulAziz\Indograms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAbdulazizIndograms extends Migration
{
    public function up()
    {
        Schema::create('abdulaziz_indograms_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('photo_name');
            $table->text('caption')->nullable();
            $table->timestamp('created_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('abdulaziz_indograms_');
    }
}
