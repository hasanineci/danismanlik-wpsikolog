<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_team', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alani');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->rememberToken();
            $table->timestamps();
        });

        $add = DB::table('persons_team')->insert([
            "name" => "Ayşe Barkın",
            "email" => "info@wpsikoloji.com",
            "alani" => "Klinik Psikolog",
            "facebook" => "https://www.facebook.com/psikolog.psikoloji",
            "twitter" => "https://www.instagram.com/w_psikoloji/",
            "instagram" => "https://www.instagram.com/w_psikoloji/",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('persons_team')->insert([
            "name" => "İbrahim Halil Barkın",
            "email" => "info@wpsikoloji.com",
            "alani" => "Klinik Psikolog",
            "facebook" => "https://www.facebook.com/psikolog.psikoloji",
            "twitter" => "https://www.instagram.com/w_psikoloji/",
            "instagram" => "https://www.instagram.com/w_psikoloji/",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('persons_team')->insert([
            "name" => "Abdülselam Altıntaş",
            "email" => "info@wpsikoloji.com",
            "alani" => "Klinik Psikolog",
            "facebook" => "https://www.facebook.com/psikolog.psikoloji",
            "twitter" => "https://www.instagram.com/w_psikoloji/",
            "instagram" => "https://www.instagram.com/w_psikoloji/",
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
        Schema::dropIfExists('persons_team');
    }
}
