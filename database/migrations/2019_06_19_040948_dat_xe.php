<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_xe', function (Blueprint $table) {
           
            $table->date ('Ngay');

            $table->integer('Ma_khach_hang')->unsigned();
            $table->foreign('Ma_khach_hang')->references('Ma_khach_hang')->on('khach_hang');
            $table->integer('Ma_xe')->unsigned();
            $table->foreign('Ma_xe')->references('Ma_xe')->on('xe');

            $table->string('So_CMT',50);
            $table->string('Sdt',11);
            $table->string('Dia_chi',50);
            $table->string('So_TK',50);
            $table->string('Ngan_hang',50);
            $table->date('Ngay_lay');
            $table->date('Ngay_tra');
            
            $table->primary(['Ngay','Ma_khach_hang','Ma_xe']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_xe');
    }
}
