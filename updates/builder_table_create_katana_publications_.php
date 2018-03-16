<?php namespace Katana\Publications\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKatanaPublications extends Migration
{
    public function up()
    {
        Schema::create('katana_publications_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->date('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('katana_publications_');
    }
}
