<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing UNSIGNED BIGINT (primary key) column
            $table->string('description'); // Creates a VARCHAR column with a default length of 255
            $table->timestamp('completed_at')->nullable(); // Creates a nullable TIMESTAMP column
            $table->timestamps(); // Creates 'created_at' and 'updated_at' TIMESTAMP columns
            $table->softDeletes(); // Creates a 'deleted_at' TIMESTAMP column for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
