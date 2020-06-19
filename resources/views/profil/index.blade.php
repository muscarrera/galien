@extends('layouts.master')

@section('content')

<div class="container-fluid">
<div class="row">
<div class="col-md-12">

    <p></p>
<h2> La Listes de Profiles Pré-Incription</h2>

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
   {{  Session::get('success')  }}
  </div>
  @endif

<div class="pull-right">
<a href="{{ url('profils/create') }}" class="btn btn-success mb-1"><i class="zmdi zmdi-account-add"> Nouveau</i></a>
</div>
<table class="table table-striped">
    <head>
        <tr>

      
        <th> Nom </th>
        <th>Date de naissance</th>
        <th>Niveau d'etude</th>
        <th>1er Choix</th>
        <th>2er Choix</th>
        <th>Tél</th>
        <th>Email</th>
        <th> action </th>
        </tr>
    </head>
    <body>
        @foreach  ($profils as $prf)
        <tr>
        <td>{{ $prf-> prenom }} {{ $prf-> nom }}</td>
        <td>{{ $prf-> dateNaissance }}</td>
        <td>{{ $prf-> etudeNiveau }}</td>
        <td>{{ $prf-> choix1 }}</td>
        <td>{{ $prf-> choix2 }}</td>
        <td>{{ $prf-> tel }}</td> 
        <td>{{ $prf-> email }}</td>
        <td>
            <form action="{{ url('profils/'.$prf->id) }}"  method="post">
            @method('DELETE')
            {{ csrf_field() }}

            <a href="profils" class="btn btn-primary mr-1"><i class="zmdi zmdi-home "></i></a>
            <a href="{{ url('profils/'.$prf->id.'/edit') }}" class="btn btn-info mr-1"><i class="zmdi  zmdi-edit"></i></a>
            <button type="submit" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
       
            </form>
            
        </td>
        </tr>
         @endforeach
    </body>
</table>


</div>
</div>
</div>





@endsection