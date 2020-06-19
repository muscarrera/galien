@extends('layouts.master')

@section('content')
<div class="page-wrapper bg-blue <p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">PRE-INSCRIPTION</h2>
                    <form action="{{ url('profils/'.$prf->id) }}"   method="POST"  >
                    @method('PUT')
                    {{ csrf_field() }}

                    <div class="row row-space">
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="CIN" name="cin" value=" {{ $prf->cin }}">
                                </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="sexe">
                                            <option disabled="disabled" selected="selected">Sexe</option>
                                            <option  @if($prf->sexe === 'Homme') selected  @endif >Homme</option>
                                            <option @if($prf->sexe === 'Femelle') selected  @endif>Femelle</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Prénom" name="prenom" value=" {{ $prf->prenom }}">
                                </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Nom" name="nom" value=" {{ $prf->nom }}">
                                </div>
                            </div>
                        </div>

                        <div class="slct-input-group">
                            <input class="input--style-1" type="text" placeholder="Adresse" name="adresse" value=" {{ $prf->adresse }}">
                        </div>

                        <div class="row row-space">
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Tél" name="tel" value=" {{ $prf->tel }}">
                                 </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Email" name="email" value=" {{ $prf->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Date de Naissance" name="birthday" value=" {{ $prf->dateNaissance }}">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="lieu">
                                            <option disabled="disabled" selected="selected">Lieu</option>
                                            <option @if($prf->lieuNaissance === 'Taghazout') selected  @endif >Taghazout</option>
                                            <option @if($prf->lieuNaissance === 'Aourir') selected  @endif >Aourir</option>
                                            <option @if($prf->lieuNaissance === 'Anza') selected  @endif >Anza</option>
                                            <option @if($prf->lieuNaissance === 'Agadir Centre') selected  @endif >Agadir Centre</option>
                                            <option @if($prf->lieuNaissance === 'Dakhla') selected  @endif >Dakhla</option>
                                            <option @if($prf->lieuNaissance === 'Essalam') selected  @endif >Essalam</option>
                                            <option @if($prf->lieuNaissance === 'Houda') selected  @endif >Houda</option>
                                            <option @if($prf->lieuNaissance === 'Bensergao') selected  @endif >Bensergao</option>
                                            <option @if($prf->lieuNaissance === 'Tikiouin') selected  @endif >Tikiouin</option>
                                            <option @if($prf->lieuNaissance === 'Drarga') selected  @endif >Drarga</option>
                                            <option @if($prf->lieuNaissance === 'Dcheira') selected  @endif >Dcheira</option>
                                            <option @if($prf->lieuNaissance === 'Inezgane') selected  @endif >Inezgane</option>
                                            <option @if($prf->lieuNaissance === 'Ait Melloul') selected  @endif >Ait Melloul</option>
                                            <option @if($prf->lieuNaissance === 'Quelia') selected  @endif >Quelia</option>

                                            <option disabled="disabled">Hors Agadir</option>
                                            <option @if($prf->lieuNaissance === 'Chtouka ait baha') selected  @endif >Chtouka ait baha</option>
                                            <option @if($prf->lieuNaissance === 'Tiznit') selected  @endif >Tiznit</option>
                                            <option @if($prf->lieuNaissance === 'Guelmim') selected  @endif >Guelmim</option>
                                            <option @if($prf->lieuNaissance === 'HomOuled Teimame') selected  @endif >Ouled Teima</option>
                                            <option @if($prf->lieuNaissance === 'Taroudant') selected  @endif >Taroudant</option>
                                            <option @if($prf->lieuNaissance === 'Autre') selected  @endif >Autre</option>

                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="slct-col-2">
                            <div class="slct-input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="etat">
                                            <option disabled="disabled" selected="selected">Etat matrimonial</option>
                                            <option @if($prf->etat === 'Célibataire') selected  @endif >Célibataire</option>
                                            <option @if($prf->etat === 'Marié') selected  @endif >Marié</option>
                                            <option @if($prf->etat === 'Divorcé') selected  @endif >Divorcé</option>
                                            <option @if($prf->etat === 'Veuf (ve)') selected  @endif >Veuf (ve)</option>
                                            </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select id="etude" name="etude" onchange="etudeSelect_function()">
                                            <option disabled="disabled" selected="selected">Niveau d'Etude</option>
                                            <option @if($prf->etudeNiveau === '9 eme AF') selected  @endif >9 eme AF</option>
                                            <option @if($prf->etudeNiveau === '1er année Lycee') selected  @endif >1er année Lycee</option>
                                            <option @if($prf->etudeNiveau === '1er année Bac') selected  @endif >1er année Bac</option>
                                            <option @if($prf->etudeNiveau === 'Niveau Bac') selected  @endif >Niveau Bac</option>
                                            <option @if($prf->etudeNiveau === 'Bac Science') selected  @endif >Bac Science</option>
                                            <option @if($prf->etudeNiveau === 'Bac Science +') selected  @endif >Bac Science +</option>
                                            <option @if($prf->etudeNiveau === 'Bac') selected  @endif >Bac</option>
                                            <option @if($prf->etudeNiveau === 'Bac+') selected  @endif >Bac+</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row row-space">
                        <div class="slct-col-2">
                        <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Dernier Etablissement" name="etudeEtablissement" value=" {{ $prf->etudeEtablissement }}">
                                 </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group"> 
                                <input class="input--style-1" type="text" placeholder="Année" name="etudeAnnee" value=" {{ $prf->EtudeAnnee }}">
                                 </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Lieu" name="etudeLieu" value="{{ $prf->etudeLieu }}">
                                 </div>
                            </div>
                        </div>

                        <h3 class="title">Filaires </h3>

                        <div class="row row-space">
                            <div class="slct-col-2">
                            <div class="slct-input-group">
                                <input class="input--style-1" type="text" disabled placeholder="1er choix" name="choix_1" value="{{ $prf->choix1 }}">
                                <i class="zmdi zmdi-edit input-icon js-btn-choix1 "></i>   
                            </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                    <input class="input--style-1" type="text" disabled placeholder="2é choix" name="choix_2" value="{{ $prf->choix2 }}">
                                    <i class="zmdi zmdi-edit input-icon  "></i>
                                </div>
                            </div>
                        </div>

                        <h3 class="title">Père</h3>

                        <div class="row row-space">
                        <div class="slct-col-2">
                        <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Nom du père" name="pereNom" value="{{ $prf->pereNom }}">
                                 </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Tél" name="pereTel" value="{{ $prf->pereTel }}">
                                 </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Profession" name="pereProfession" value="{{ $prf->pereProfession }}">
                                 </div>
                            </div>
                        </div>

                        <h3 class="title">Mère</h3>

                        <div class="row row-space">
                        <div class="slct-col-2">
                        <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Nom de la mère" name="mereNom" value="{{ $prf->mereNom }}">
                                </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Tél" name="mereTel" value="{{ $prf->mereTel }}">
                                </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Profession" name="mereProfession" value="{{ $prf->mereProfession }}">
                                </div>
                            </div>
                        </div>
                        <h3 class="title">Tuteur (personne en charge du stagiaire)</h3>

                        <div class="row row-space">
                        <div class="slct-col-2">
                        <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Nom du tuteur" name="tuteurNom" value="{{ $prf->tuteurNom }}">
                            </div> </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Tél" name="tuteurTel" value="{{ $prf->tuteurTel }}">
                                </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Profession" name="tuteurProfession" value="{{ $prf->tuteurProfession }}">
                                </div>
                            </div>
                        </div>

                        <div class="slct-input-group">

                        <p style="color:#BEBEBE; padding:15px;">
                           this tutorial we will be creating /n a basic responsive navigation menu with dropdown using only HTML and CSS. Many navigation menus (especially responsive ones) are created using a combination of HTML, CSS and Javascript. This simple CSS only method will demonstrate that Javascript isn't always necessary!
                           </p>
                        </div>


                        <div class="p-t-20">
                            <button class="slct-btn btn--radius btn--green" type="submit">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
