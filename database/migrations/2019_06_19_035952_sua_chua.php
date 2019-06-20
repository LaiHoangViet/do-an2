<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuaChua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('sua_chua', function (Blueprint $table) {
            
            $table->date('Ngay_sua');
            $table->integer('Ma_xe')->unsigned();
            $table->foreign('Ma_xe')->references('Ma_xe')->on('xe');
            $table->boolean('Tinh_trang');
            $table->date('Ngay_sua_xong');
            $table->float('Chi_phi');
            $table->primary(['Ngay_sua','Ma_xe']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sua_chua');
    }
}
