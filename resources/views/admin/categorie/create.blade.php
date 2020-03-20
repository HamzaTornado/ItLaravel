@extends('admin.dashboard')

@section('content')
<form class="form-signin" action="{{ url('admin/categorie') }}" method="post" enctype="multipart/form-data">
    <!-- Generer Token key erreur-->
    @csrf
    <!------------------------------>

    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Categories</h1>
      <p>Ajouter Une Categorie</p>
    </div>

    <div class="form-label-group">
      <input type="text" id="nom_cat" class="form-control" >
      <label for="nom_cat">Nom Catégorie</label>
        @if (count($errors->get('nom_cat')))
            @foreach ($errors->get('nom_cat') as $message)
                <li class="text-danger">{{$message}}</li>
            @endforeach
         @endif
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer</button>
  </form>
  <table class="table form-signin">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom Catégorie</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $categorie)
      <tr>
        <th scope="row">{{$categorie->id}}</th>
      <td>{{$categorie->nom_cat}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
