<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();
            // $table->integer('user_id')->references('id')->on('users');
            $table->string('email',255)->unique();
            $table->string('age');
            $table->string('sexe');
            $table->bigInteger('nb_Foyer');
            $table->string('profession',255);
            $table->string('marque');
            $table->string('magasin');
            $table->string('casque');
            $table->bigInteger('nb_utilise_vr');
            $table->string('utilisations');
            $table->bigInteger('qualite');
            $table->bigInteger('confort');
            $table->bigInteger('connection');
            $table->bigInteger('qualite_graph');
            $table->bigInteger('qualiteAudio');
            $table->string('notifications');
            $table->string('invitation_session');
            $table->bigInteger('enregistrement');
            $table->bigInteger('jeux_exclusifs');
            $table->string('nouvelle_fonctionnalite',255);
            $table->ipAddress('visitor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaires');
    }
}
