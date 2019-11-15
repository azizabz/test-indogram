<?php namespace AbdulAziz\Indograms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAbdulazizIndogramsPostsUsers extends Migration
{
    public function up()
    {
        Schema::create('abdulaziz_indograms_posts_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('user_id');
            $table->primary(['post_id','user_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('abdulaziz_indograms_posts_users');
    }
}
