<?php namespace Katana\Publications\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKatanaPublications extends Migration
{
    public function up()
    {
        Schema::table('katana_publications_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('katana_publications_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
