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
            $table->enum('prodi',['teknik informatika','teknik sipil','teknik perencanaan wilayah & kota']);
            $table->foreignId('room_id')->constrained('rooms')->onUpdate('cascade')->onDelete('cascade');
            $table->string('phone');
            $table->string('address');
            $table->string('program');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->enum('status',['belum disetujui','tidak disetujui','disetujui']);
            $table->string('letter');
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
