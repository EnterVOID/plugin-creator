<?php namespace Void\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateRolesTable extends Migration
{

    public function up()
    {
        Schema::create('creator_roles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('creator_roles');
    }

}
