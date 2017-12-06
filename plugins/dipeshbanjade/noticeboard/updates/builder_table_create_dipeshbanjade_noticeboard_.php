<?php namespace DipeshBanjade\Noticeboard\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDipeshbanjadeNoticeboard extends Migration
{
    public function up()
    {
        Schema::create('dipeshbanjade_noticeboard_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('noc_title')->nullable();
            $table->string('noc_desc')->nullable();
            $table->date('noc_end_date')->nullable();
            $table->text('noc_type');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dipeshbanjade_noticeboard_');
    }
}
