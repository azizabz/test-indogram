<?php namespace AbdulAziz\Indograms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbdulazizIndograms5 extends Migration
{
    public function up()
    {
        Schema::table('abdulaziz_indograms_', function($table)
        {
            $table->integer('user_id');
            $table->text('caption')->default('null')->change();
            $table->dropColumn('photo_name');
        });
    }
    
    public function down()
    {
        Schema::table('abdulaziz_indograms_', function($table)
        {
            $table->dropColumn('user_id');
            $table->text('caption')->default('NULL')->change();
            $table->string('photo_name', 255);
        });
    }
}
