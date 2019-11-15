<?php namespace AbdulAziz\Indograms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbdulazizIndogramsUsers extends Migration
{
    public function up()
    {
        Schema::rename('abdulaziz_indograms_posts_users', 'abdulaziz_indograms_users');
    }
    
    public function down()
    {
        Schema::rename('abdulaziz_indograms_users', 'abdulaziz_indograms_posts_users');
    }
}
