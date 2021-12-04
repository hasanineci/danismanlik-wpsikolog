<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIletisimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iletisim', function (Blueprint $table) {
            $table->id();
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('adres');
            $table->string('telefon');
            $table->rememberToken();
            $table->timestamps();
        });

        $add = DB::table('iletisim')->insert([
            "facebook" => "https://www.facebook.com/psikolog.psikoloji",
            "twitter" => "https://www.instagram.com/w_psikoloji/",
            "instagram" => "https://www.instagram.com/w_psikoloji/",
            "linkedin" => "https://www.instagram.com/w_psikoloji/",
            "adres" => "Bahçelievler Mah. 1020 Sok. Barkın Apt. No:12/1 Haliliye - Şanlıurfa",
            "telefon" => "+905415148515",
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
        Schema::dropIfExists('iletisim');
    }
}
