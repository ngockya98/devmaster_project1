<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->collation = 'utf8mb4_unicode_ci';
            $table->bigIncrements('id');
            $table->string('name',255)->collation = 'utf8mb4_unicode_ci';
            $table->string('phone',50);
            $table->string('email',100);
            $table->string('address',500)->collation = 'utf8mb4_unicode_ci';
            $table->integer('gender');
            $table->date('birthday');
            $table->text('status',500)->nullable()->colltion = 'utf8mb4_unicode_ci';
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
        Schema::dropIfExists('teachers');
    }
}
