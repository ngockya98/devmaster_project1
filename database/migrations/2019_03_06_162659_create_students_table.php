<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->collation = 'utf8mb4_unicode_ci';
            $table->bigIncrements('id');
            $table->string('name',255)->collation('utf8mb4_unicode_ci');
            $table->string('email',255);
            $table->string('cmnd',25);
            $table->char('phone',30);
            $table->text('address',500)->collation('utf8mb4_unicode_ci');
            $table->integer('gender');
            $table->date('birthday');
            $table->text('status',500)->nullable();
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
        Schema::dropIfExists('students');
    }
}
