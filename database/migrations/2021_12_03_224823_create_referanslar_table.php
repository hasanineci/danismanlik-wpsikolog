<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferanslarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referanslar', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kurum');
            $table->string('telefon');
            $table->string('referans_yetki');
            $table->string('bulundugu_yer');
            $table->string('fotograf');
            $table->enum('durum', ['Aktif', 'Pasif'])->default('Pasif');
            $table->rememberToken();
            $table->timestamps();
        });

        $add = DB::table('referanslar')->insert([
            "name" => "Hasan İNECİ",
            "kurum" => "Şanlıurfa Eğitim ve Araştırma Hastanesi",
            "telefon" => "0541 444 55 55",
            "referans_yetki" => "Doktor",
            "bulundugu_yer" => "Şanlıurfa - Haliliye",
            "fotograf" => "Şanlıurfa - Haliliye",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referanslar');
    }
}
