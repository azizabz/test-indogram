<?php namespace AbdulAziz\AzizIndogram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbdulazizAzizindogram extends Migration
{
    public function up()
    {
        Schema::table('abdulaziz_azizindogram_', function($table)
        {
            $table->text('caption')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('abdulaziz_azizindogram_', function($table)
        {
            $table->text('caption')->default('NULL')->change();
        });
    }
}
