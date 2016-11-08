<?php namespace Dair\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDairOrders extends Migration
{
    public function up()
    {
        Schema::create('dair_orders_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('service');
            $table->text('time');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dair_orders_');
    }
}
