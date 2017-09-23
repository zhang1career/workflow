<?php namespace Zhang1career\Workflow\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateWorkflowsTable extends Migration
{
    public function up()
    {
        Schema::create('zhang1career_workflow_workflows', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('ID');
            $table->uuid('uuid')->default('')->index()->comment('唯一标识');
            $table->string('name', 255)->default('')->comment('名称');
            $table->string('description', 500)->default('')->comment('描述');
            $table->integer('target_type')->unsigned()->default(0)->index()->comment('审批对象的类型');
            $table->uuid('target_uuid')->default('')->index()->comment('审批对象的唯一标识');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zhang1career_workflow_workflows');
    }
}
