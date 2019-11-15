<?php namespace AbdulAziz\Indograms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbdulazizIndograms4 extends Migration
{
    public function up()
    {
        Schema::table('abdulaziz_indograms_', function($table)
        {
            $table->string('slug');
            $table->text('caption')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('abdulaziz_indograms_', function($table)
        {
            $table->dropColumn('slug');
            $table->text('caption')->default('NULL')->change();
        });
    }
}
