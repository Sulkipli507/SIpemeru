<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->char('nim',8)->unique();
            $table->string('name');
            $table->enum('prodi',['inf','spl','pwk']);
            $table->string('phone');
            $table->string('address');
            $table->string('program');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status',['belum','tidak','disetujui']);
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
        Schema::dropIfExists('loans');
    }
};
