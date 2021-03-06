<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use App\User;
use App\Http\Requests\profilReques;
use Illuminate\Support\Facades\Hash;
use App;
use PDF;
use \App\Mail\SendMail;
use App\Http\Resources\UserCollection;

class ProfilController extends Controller
{
    //get all
    public function index() {
        $profils =Profil::all();
        $this->authorize('view',Profil::class);

        return view('profil.index', ['profils'=> $profils]);

    }

       //get all api
       public function getactive() {
       // $profils =Profil::all();
        
       $profils = App\Profil::paginate(3);
       return  $profils;

    }
    //show add forme
    public function create() {
       return view('profil.create'); 
    }
    //save
    public function store(profilReques $request) {
      $profil = new Profil();

      $user = new User();
      $user->name =$request->input('cin');
      $user->password = Hash::make($request->input('cin'));
      $user->email =$request->input('email');
      $user->role = 0;

      $user->save();

      $profil->cin =$request->input('cin');
      $profil->nom =$request->input('nom');
      $profil->prenom =$request->input('prenom');
      $profil->sexe =$request->input('sexe');
      $profil->adresse =$request->input('adresse');
      $profil->tel =$request->input('tel');
      $profil->email =$request->input('email');
      //$profil->dateNaissance =$request->input('birthday');
      $profil->dateNaissance =date("Y-m-d", strtotime($request->input('birthday')));
      $profil->lieuNaissance =$request->input('lieu');
      $profil->etat =$request->input('etat');
      $profil->etudeNiveau =$request->input('etude');
      $profil->etudeEtablissement =$request->input('etudeEtablissement');
      $profil->EtudeAnnee =$request->input('etudeAnnee');
      $profil->etudeLieu =$request->input('etudeLieu');
      $profil->choix1 =$request->input('choix_1');
      $profil->choix2 =$request->input('choix_2');
      $profil->pereNom =$request->input('pereNom');
      $profil->pereTel =$request->input('pereTel');
      $profil->pereProfession =$request->input('pereProfession');
      $profil->mereNom =$request->input('mereNom');
      $profil->mereTel =$request->input('mereTel');
      $profil->mereProfession =$request->input('mereProfession');
      $profil->tuteurNom =$request->input('tuteurNom');
      $profil->tuteurTel =$request->input('tuteurTel');
      $profil->tuteurProfession =$request->input('tuteurProfession');
      $profil->parentAssurance =$request->input('parentAssurance');
      $profil->user_id = $user->id;
      $profil->isValid =false;
      $profil->isAdmis =false;

      $profil->save();
 
      session()->flash('success', 'votre Pré-inscription à été bien enregistre');
      return redirect('profils');
 
    }
    // show edit form
    public function edit($id) {
        $prf = Profil::find($id);

        $this->authorize('update', $prf);
        return view('profil.edit', ['prf'=>$prf]);
    
    }
    //save changes
    public function update(profilReques $request, $id) {
        $profil = Profil::find($id);

        $this->authorize('update', $profil);

        $profil->cin =$request->input('cin');
        $profil->nom =$request->input('nom');
        $profil->prenom =$request->input('prenom');
        $profil->sexe =$request->input('sexe');
        $profil->adresse =$request->input('adresse');
        $profil->tel =$request->input('tel');
        $profil->email =$request->input('email');
        $profil->dateNaissance =date("Y-m-d", strtotime($request->input('birthday')));
        $profil->lieuNaissance =$request->input('lieu');
        $profil->etat =$request->input('etat');
        $profil->etudeNiveau =$request->input('etude');
        $profil->etudeEtablissement =$request->input('etudeEtablissement');
        $profil->EtudeAnnee =$request->input('etudeAnnee');
        $profil->etudeLieu =$request->input('etudeLieu');
        $profil->pereNom =$request->input('pereNom');
        $profil->pereTel =$request->input('pereTel');
        $profil->pereProfession =$request->input('pereProfession');
        $profil->mereNom =$request->input('mereNom');
        $profil->mereTel =$request->input('mereTel');
        $profil->mereProfession =$request->input('mereProfession');
        $profil->tuteurNom =$request->input('tuteurNom');
        $profil->tuteurTel =$request->input('tuteurTel');
        $profil->tuteurProfession =$request->input('tuteurProfession');
     
        $profil->save();
  
        session()->flash('success', 'votre Pré-inscription à été bien modifier');
        return redirect('profils');
    }
    //delete 
    public function destroy(Request $request, $id) {
        $prf = Profil::find($id);
        $this->authorize('delete', $prf);

        $us = User::find($prf->user_id);
        $us->delete();
        $prf->delete();
        return redirect('profils');
    }

        //pdf 
        public function savepdf($id,$dt) {
          //$pdf = PDF::loadView('profil.create');
          //:return $pdf->download('invoice.pdf');

            //  $pdf = App::make('dompdf.wrapper');
            //   $pdf->loadHTML('<h1>Test</h1>');
            //   return $pdf->stream();

            $prf = Profil::find($id);

           // return view('profil.pdf',['prf'=>$prf]);

           $pdf = PDF::loadView('profil.pdf',['prf'=>$prf]);
          return $pdf->download('invoice.pdf');
        }

        public function mailsend($id)
        {
          $prf = Profil::find($id);

            $details = [
                'title' => 'Bulletin de preinscription',
                'body' => 'votre inscription online a bien été prise en compte, merci de bien vouloir télécharger et imprimer notre bulletin de preinscription' .
                          'http://127.0.0.1:8000/pre-inc/print/'. $prf->id .'/pdf/' . now()->timestamp
            ];
    
            \Mail::to('muscarrera@gmail.com')->send(new SendMail($details));
    
            //printpdf($prf);
            
            return view('emails.thanks');
          }
          
          public function printpdf($prf) 
          {
              $pdf = PDF::loadView('profil.pdf',['prf'=>$prf]);
              return $pdf->download('invoice.pdf');
          }
    

}
