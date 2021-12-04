<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnlasmaliKurumlarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anlasmali_kurumlar', function (Blueprint $table) {
            $table->id();
            $table->string('kurum_adi');
            $table->string('yetkili_adi');
            $table->string('telefon');
            $table->string('birim');
            $table->string('bulundugu_yer');
            $table->enum('durum', ['Aktif', 'Pasif'])->default('Pasif');
            $table->rememberToken();
            $table->timestamps();
        });

        $add = DB::table('anlasmali_kurumlar')->insert([
            "kurum_adi" => "Harran Üniversitesi Tıp Fakültesi",
            "yetkili_adi" => "Dr. Ayşe Barkın",
            "telefon" => "0541 444 55 55",
            "birim" => "Psikiyatri Doktoru",
            "bulundugu_yer" => "Şanlıurfa Osman Bey Kampüsü",
            "durum" => "Aktif",
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
        Schema::dropIfExists('anlasmali_kurumlar');
    }
}
