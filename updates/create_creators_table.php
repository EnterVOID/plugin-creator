<?php namespace Void\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCreatorsTable extends Migration
{

    public function up()
    {
        Schema::create('creators', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('user_id');
            $table->string('creation_id');
            $table->string('creation_type');
        });
    }

    public function down()
    {
        Schema::dropIfExists('creators');
    }

}
