<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRandevularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('randevular', function (Blueprint $table) {
            $table->id();
            $table->string('adi');
            $table->string('telefon');
            $table->string('email');
            $table->string('randevu_tarihi');
            $table->string('randevu_saati');
            $table->enum('durum', ['Okundu', 'Okunmadı'])->default('Okunmadı');
            $table->string('istedigi_psikolog');
            $table->string('sikayeti');
            $table->rememberToken();
            $table->timestamps();
        });

        $add = DB::table('randevular')->insert([
            "adi" => "Hasan ineci",
            "telefon" => "05412345678",
            "email" => "deneme@example.com",
            "randevu_tarihi" => "12/12/2021",
            "randevu_saati" => "14:20",
            "durum" => "okundu",
            "istedigi_psikolog" => "Dr. Abdülselam Altuntaş",
            "sikayeti" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo eius placeat quas esse! Rerum quidem magnam corrupti fuga.",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('randevular')->insert([
            "adi" => "Hasan ineci",
            "telefon" => "05412345678",
            "email" => "deneme@example.com",
            "randevu_tarihi" => "12/12/2021",
            "randevu_saati" => "14:20",
            "durum" => "okunmadı",
            "istedigi_psikolog" => "Dr. Abdülselam Altuntaş",
            "sikayeti" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo eius placeat quas esse! Rerum quidem magnam corrupti fuga.",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('randevular')->insert([
            "adi" => "Hasan ineci",
            "telefon" => "05412345678",
            "email" => "deneme@example.com",
            "randevu_tarihi" => "12/12/2021",
            "randevu_saati" => "14:20",
            "durum" => "okundu",
            "istedigi_psikolog" => "Dr. Abdülselam Altuntaş",
            "sikayeti" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo eius placeat quas esse! Rerum quidem magnam corrupti fuga.",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('randevular')->insert([
            "adi" => "Hasan ineci",
            "telefon" => "05412345678",
            "email" => "deneme@example.com",
            "randevu_tarihi" => "12/12/2021",
            "randevu_saati" => "14:20",
            "durum" => "okunmadı",
            "istedigi_psikolog" => "Dr. Abdülselam Altuntaş",
            "sikayeti" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo eius placeat quas esse! Rerum quidem magnam corrupti fuga.",
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
        Schema::dropIfExists('randevular');
    }
}
