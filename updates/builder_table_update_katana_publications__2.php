<?php namespace Katana\Publications\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKatanaPublications2 extends Migration
{
    public function up()
    {
        Schema::table('katana_publications_', function($table)
        {
            $table->text('link');
        });
    }
    
    public function down()
    {
        Schema::table('katana_publications_', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
