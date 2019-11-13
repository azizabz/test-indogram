<?php namespace AbdulAziz\Indograms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbdulazizIndograms2 extends Migration
{
    public function up()
    {
        Schema::table('abdulaziz_indograms_', function($table)
        {
            $table->text('caption')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('abdulaziz_indograms_', function($table)
        {
            $table->text('caption')->default('NULL')->change();
        });
    }
}
