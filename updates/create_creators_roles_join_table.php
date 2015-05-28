<?php namespace Void\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCreatorsRolesJoinTable extends Migration
{

    public function up()
    {
        Schema::create('creators_roles', function($table)
        {
            $table->integer('creator_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->primary(['creator_id', 'role_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('creators_roles');
    }

}
