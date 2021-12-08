<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaillerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailler', function (Blueprint $table) {
            $table->id();
            $table->string('adi');
            $table->string('telefon');
            $table->string('email');
            $table->string('konu');
            $table->string('mesaj');
            $table->enum('durum', ['Okundu', 'Okunmadı'])->default('Okunmadı');
            $table->rememberToken();
            $table->timestamps();
        });

        $add = DB::table('mailler')->insert([
            "adi" => "Hasan ineci",
            "telefon" => "05412345678",
            "email" => "deneme@example.com",
            "konu" => "Terapi Almak İstiyorum",
            "mesaj" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo eius placeat quas esse! Rerum quidem magnam corrupti fuga.",
            "durum" => "okundu",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('mailler')->insert([
            "adi" => "Hasan ineci",
            "telefon" => "05412345678",
            "email" => "deneme@example.com",
            "konu" => "Terapi Almak İstiyorum",
            "mesaj" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo eius placeat quas esse! Rerum quidem magnam corrupti fuga.",
            "durum" => "okunmadı",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('mailler')->insert([
            "adi" => "Hasan ineci",
            "telefon" => "05412345678",
            "email" => "deneme@example.com",
            "konu" => "Terapi Almak İstiyorum",
            "mesaj" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo eius placeat quas esse! Rerum quidem magnam corrupti fuga.",
            "durum" => "okundu",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('mailler')->insert([
            "adi" => "Hasan ineci",
            "telefon" => "05412345678",
            "email" => "deneme@example.com",
            "konu" => "Terapi Almak İstiyorum",
            "mesaj" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo eius placeat quas esse! Rerum quidem magnam corrupti fuga.",
            "durum" => "okunmadı",
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
        Schema::dropIfExists('mailler');
    }
}
