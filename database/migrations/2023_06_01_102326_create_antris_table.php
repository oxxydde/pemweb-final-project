<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('keperluan', function (Blueprint $table) {
            $table->increments('id_keperluan');
            $table->string('keperluan');
        });
        DB::table('keperluan')->insert(
            array(
                array("keperluan" => "Pembuatan NPWP Pribadi Baru"),
                array("keperluan" => "Pembuatan NPWP Perorangan Baru"),
                array("keperluan" => "Cetak Kartu NPWP Baru"),
                array("keperluan" => "Pembayaran Pajak eSPT"),
                array("keperluan" => "Lainnya"),
            )
        );

        Schema::create('status_antri', function (Blueprint $table) {
            $table->increments('id_status');
            $table->string('status');
        });
        DB::table('status_antri')->insert(
            array(
                array("status" => "Belum Dilayani"),
                array("status" => "Telah Dilayani"),
                array("status" => "Dilewati")
            )
        );

        Schema::create('antris', function (Blueprint $table) {
            $table->increments('id_antri');
            $table->string('nik', 16);
            $table->string('nama');
            $table->string('email', 100);
            $table->string('no_hp', 20);
            $table->unsignedInteger('keperluan');
            $table->foreign('keperluan')
                ->references('id_keperluan')
                ->on('keperluan');
            $table->timestamps();
            $table->unsignedInteger('status');
            $table->foreign('status')
                ->references('id_status')
                ->on('status_antri');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antris');
        Schema::dropIfExists('keperluan');
    }
};
