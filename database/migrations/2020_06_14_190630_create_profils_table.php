<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('cin',20);
            $table->string('nom',50);
            $table->string('prenom',50);
            $table->string('sexe',20);
            $table->string('adresse');
            $table->string('tel',50);
            $table->string('email');
            $table->date('dateNaissance');
            $table->string('lieuNaissance',150)->nullable();
            $table->string('etat',20)->nullable();;
            $table->string('etudeNiveau',20);
            $table->string('etudeEtablissement',150);
            $table->string('EtudeAnnee',20);
            $table->string('etudeLieu',50);
            $table->string('choix1',50);
            $table->string('choix2',50);
            $table->string('pereNom',150)->nullable();
            $table->string('pereTel',50)->nullable();
            $table->string('pereProfession',50)->nullable();
            $table->string('mereNom',150)->nullable();
            $table->string('mereTel',50)->nullable();
            $table->string('mereProfession',50)->nullable();
            $table->string('tuteurNom',150)->nullable();
            $table->string('tuteurTel',50)->nullable();
            $table->string('tuteurProfession',50)->nullable();
            $table->string('parentAssurance',50)->nullable();
            $table->boolean('isValid');
            $table->boolean('isAdmis');
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
        Schema::dropIfExists('profils');
    }
}
