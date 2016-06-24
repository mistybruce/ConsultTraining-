<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTableCreate=tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     Schema::create('tasks', function (Blueprint $table) {
            $table->string('tasks')->index();
            $table->string('name')->index();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
