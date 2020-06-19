@extends('layouts.master')

@section('content')
<div class="page-wrapper bg-blue <p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">PRE-INSCRIPTION</h2>
                        @if (count($errors))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                               <ul>
                                @foreach ($errors->all() as $error)
                                  <li> {{ $error }}</li>  
                                @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>    
                     @endif

                    <form action="{{ url('profils') }}"   method="POST">

                    {{ csrf_field() }}

                    <div class="row row-space">
                            <div class="slct-col-2">
                                <div class="slct-input-group @if($errors->get('cin'))  slct-has-error  @endif">
                                <input class="input--style-1 " type="text" placeholder="CIN" name="cin" value="{{ old('cin') }}">
                                </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group  @if($errors->get('sexe'))  slct-has-error  @endif">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="sexe">
                                            <option disabled="disabled" selected="selected">Sexe</option>
                                            <option>Homme</option>
                                            <option>Femelle</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="slct-col-2">
                                <div class="slct-input-group  @if($errors->get('sexe'))  slct-has-error  @endif">
                                <input class="input--style-1" type="text" placeholder="Prénom" name="prenom" value="{{ old('prenom') }}">
                                </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group @if($errors->get('nom'))  slct-has-error  @endif">
                                <input class="input--style-1" type="text" placeholder="Nom" name="nom" value="{{ old('nom') }}">
                                </div>
                            </div>
                        </div>

                        <div class="slct-input-group @if($errors->get('adresse'))  slct-has-error  @endif">
                            <input class="input--style-1" type="text" placeholder="Adresse" name="adresse" value="{{ old('adresse') }}">
                        </div>

                        <div class="row row-space">
                            <div class="slct-col-2">
                                <div class="slct-input-group @if($errors->get('tel'))  slct-has-error  @endif">
                                <input class="input--style-1" type="text" placeholder="Tél" name="tel" value="{{ old('tel') }}">
                                 </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group @if($errors->get('email'))  slct-has-error  @endif">
                                <input class="input--style-1" type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="slct-col-2">
                                <div class="slct-input-group @if($errors->get('birthday'))  slct-has-error  @endif">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Date de Naissance" name="birthday" value="{{ old('birthday') }}">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group @if($errors->get('lieu'))  slct-has-error  @endif">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="lieu">
                                            <option disabled="disabled" selected="selected">Lieu</option>
                                            <option>Taghazout</option>
                                            <option>Aourir</option>
                                            <option>Anza</option>
                                            <option>Agadir Centre</option>
                                            <option>Dakhla</option>
                                            <option>Essalam</option>
                                            <option>Houda</option>
                                            <option>Bensergao</option>
                                            <option>Tikiouin</option>
                                            <option>Drarga</option>
                                            <option>Dcheira</option>
                                            <option>Inezgane</option>
                                            <option>Ait Melloul</option>
                                            <option>Quelia</option>

                                            <option disabled="disabled">Hors Agadir</option>
                                            <option>Chtouka ait baha</option>
                                            <option>Tiznit</option>
                                            <option>Guelmim</option>
                                            <option>Ouled Teima</option>
                                            <option>Taroudant</option>
                                            <option>Autre</option>

                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="slct-col-2">
                            <div class="slct-input-group @if($errors->get('etat'))  slct-has-error  @endif">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="etat">
                                            <option disabled="disabled" selected="selected">Etat matrimonial</option>
                                            <option>Célibataire</option>
                                            <option>Marié</option>
                                            <option>Divorcé</option>
                                            <option>Veuf (ve)</option>
                                            </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group @if($errors->get('etude'))  slct-has-error  @endif">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select id="etude" name="etude" onchange="etudeSelect_function()">
                                            <option disabled="disabled" selected="selected">Niveau d'Etude</option>
                                            <option>9 eme AF</option>
                                            <option>1er année Lycee</option>
                                            <option>1er année Bac</option>
                                            <option>Niveau Bac</option>
                                            <option>Bac Science</option>
                                            <option>Bac Science +</option>
                                            <option>Bac</option>
                                            <option>Bac+</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row row-space">
                        <div class="slct-col-2">
                        <div class="slct-input-group @if($errors->get('etudeEtablissement'))  slct-has-error  @endif">
                                <input class="input--style-1" type="text" placeholder="Dernier Etablissement" name="etudeEtablissement" value="{{ old('etudeEtablissement') }}">
                                 </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group @if($errors->get('etudeAnnee'))  slct-has-error  @endif">
                                <input class="input--style-1" type="text" placeholder="Année" name="etudeAnnee" value="{{ old('etudeAnnee') }}">
                                 </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group @if($errors->get('etudeLieu'))  slct-has-error  @endif">
                                <input class="input--style-1" type="text" placeholder="Lieu" name="etudeLieu"  value="{{ old('etudeLieu') }}">
                                 </div>
                            </div>
                        </div>

                        <h3 class="title">Filaires </h3>

                        <div class="row row-space">
                            <div class="slct-col-2">
                            <div class="slct-input-group @if($errors->get('choix_1'))  slct-has-error  @endif">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select id="choix_1" name="choix_1"><option disabled='disabled' selected='selected'>1er Choix</option></select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slct-col-2">
                                <div class="slct-input-group @if($errors->get('choix_2'))  slct-has-error  @endif">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select id="choix_2" name="choix_2"><option disabled='disabled' selected='selected'>2eme Choix</option></select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="title">Père</h3>

                        <div class="row row-space">
                        <div class="slct-col-2">
                        <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Nom du père" name="pereNom" value="{{ old('pereNom') }}">
                                 </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Tél" name="pereTel"  value="{{ old('pereTel') }}">
                                 </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Profession" name="pereProfession"  value="{{ old('pereProfession') }}">
                                 </div>
                            </div>
                        </div>

                        <h3 class="title">Mère</h3>

                        <div class="row row-space">
                        <div class="slct-col-2">
                        <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Nom de la mère" name="mereNom"  value="{{ old('mereNom') }}">
                                </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Tél" name="mereTel"  value="{{ old('mereTel') }}">
                                </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Profession" name="mereProfession"  value="{{ old('mereProfession') }}">
                                </div>
                            </div>
                        </div>
                        <h3 class="title">Tuteur (personne en charge du stagiaire)</h3>

                        <div class="row row-space">
                        <div class="slct-col-2">
                        <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Nom du tuteur" name="tuteurNom"  value="{{ old('tuteurNom') }}">
                                </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Tél" name="tuteurTel"  value="{{ old('tuteurTel') }}">
                                </div>
                            </div>
                            <div class="slct-col-4">
                                <div class="slct-input-group">
                                <input class="input--style-1" type="text" placeholder="Profession" name="tuteurProfession"  value="{{ old('tuteurProfession') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="slct-col-2">
                                <div class="slct-input-group">
                                       <p>Vous Parents ont-ils une assurance maladie:</p>    </div>
                                    </div>
                            <div class="slct-col-2">
                            <div class="slct-input-group @if($errors->get('parentAssurance'))  slct-has-error  @endif">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="parentAssurance">
                                            <option disabled="disabled" selected="selected">Assurance (Parents)</option>
                                            <option>Aucun</option>
                                            <option>CNSS</option>
                                            <option>CNOPS</option>
                                            <option>RAMED</option>
                                            <option>Autre</option>
                                            </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>








                        <div class="slct-input-group">

                        <p style="color:#BEBEBE; padding:15px;">
                           this tutorial we will be creating /n a basic responsive navigation menu with dropdown using only HTML and CSS. Many navigation menus (especially responsive ones) are created using a combination of HTML, CSS and Javascript. This simple CSS only method will demonstrate that Javascript isn't always necessary!
                           </p>
                        </div>


                        <div class="p-t-20">
                            <button class="slct-btn btn--radius btn--green" type="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
