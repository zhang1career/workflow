<?php namespace Zhang1career\Workflow\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateItemHasWorknodesTable extends Migration
{
    public function up()
    {
        Schema::create('zhang1career_workflow_item_has_worknodes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zhang1career_workflow_item_has_worknodes');
    }
}
