<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYonetimAyarlariTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yonetim_ayarlari', function (Blueprint $table) {
            $table->id();
            $table->string('sifre_degistir');
            $table->string('calisma_gunleri');
            $table->rememberToken();
            $table->timestamps();
        });

        $add = DB::table('yonetim_ayarlari')->insert([
            "sifre_degistir" => "123456",
            "calisma_gunleri" => "Pazartesi - Cumartesi",
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
        Schema::dropIfExists('yonetim_ayarlari');
    }
}
