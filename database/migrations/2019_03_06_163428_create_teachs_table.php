<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachs', function (Blueprint $table) {
            $table->collation = 'utf8mb4_unicode_ci';
            $table->bigIncrements('id');
            $table->integer('class_id');
            $table->integer('teacher_id');
            $table->date('teach_at');
            $table->text('status',500)->nullable()->collation = 'utf8mb4_unicode_ci';
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachs');
    }
}
