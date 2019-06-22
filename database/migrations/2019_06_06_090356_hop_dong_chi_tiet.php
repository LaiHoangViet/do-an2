<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HopDongChiTiet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hop_dong_chi_tiet', function (Blueprint $table) {
            $table->integer('Ma_hop_dong')->unsigned();
            $table->foreign('Ma_hop_dong')->references('Ma_hop_dong')->on('hop_dong');
            $table->integer('Ma_xe')->unsigned();
            $table->foreign('Ma_xe')->references('Ma_xe')->on('xe');
            $table->string ('Gia');
            $table->date('Ngay_nhan');
            $table->date('Ngay_tra');
            $table->primary(['Ma_hop_dong']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hop_dong_chi_tiet');
    }
}
