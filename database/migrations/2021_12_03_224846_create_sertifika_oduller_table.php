<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifikaOdullerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifika_oduller', function (Blueprint $table) {
            $table->id();
            $table->string('belge_adi');
            $table->string('alindigi_yer');
            $table->string('alani');
            $table->string('egitim_suresi');
            $table->string('verildigi_yer');
            $table->string('belge_tarihi');
            $table->string('fotograf');
            $table->enum('durum', ['Aktif', 'Pasif'])->default('Pasif');
            $table->rememberToken();
            $table->timestamps();
        });

        $add = DB::table('sertifika_oduller')->insert([
            "belge_adi" => "Kurs Bitirme Belgesi",
            "alindigi_yer" => "Milli Eğitim Bakanlığı",
            "alani" => "Psiko Terapi",
            "egitim_suresi" => "100 saat",
            "verildigi_yer" => "Şanlıurfa - Haliliye",
            "fotograf" => "Şanlıurfa - Haliliye",
            "belge_tarihi" => "2020",
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
        Schema::dropIfExists('sertifika_oduller');
    }
}
