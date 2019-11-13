<?php namespace AbdulAziz\Indograms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbdulazizIndograms3 extends Migration
{
    public function up()
    {
        Schema::table('abdulaziz_indograms_', function($table)
        {
            $table->text('caption')->default('null')->change();
            $table->renameColumn('upated_at', 'updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('abdulaziz_indograms_', function($table)
        {
            $table->text('caption')->default('NULL')->change();
            $table->renameColumn('updated_at', 'upated_at');
        });
    }
}
