@extends('admin.dashboard')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 border center_div">
            <h2>Article</h2>
        <form action="{{ url('admin/post') }}" method="post" enctype="multipart/form-data">
            <!-- Generer Token key erreur--->
            @csrf
            <!------------------------------>
            <div class="form-group @if (count($errors->get('titre'))) has-error @endif">
                <label for="titre">Titre</label>
                <input type="text" name="titre" class="form-control" value="{{old('titre')}}">
                @if (count($errors->get('titre')))
                    @foreach ($errors->get('titre') as $message)
                        <li class="text-danger">{{$message}}</li>
                    @endforeach
                @endif

            </div>
            <div class="form-group @if (count($errors->get('description'))) has-error @endif">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" >{{old('description')}}</textarea>
                @if (count($errors->get('description')))
                    @foreach ($errors->get('description') as $message)
                        <li class="text-danger">{{$message}}</li>
                    @endforeach
                @endif
            </div>
            <div class="form-group @if (count($errors->get('contenu'))) has-error @endif">
                    <label for="">Contenu</label>
                    <textarea name="contenu" class="form-control" >{{old('contenu')}}</textarea>
                @if (count($errors->get('contenu')))
                    @foreach ($errors->get('contenu') as $message)
                        <li class="text-danger">{{$message}}</li>
                    @endforeach
                @endif
            </div>
                <div class="form-row @if (count($errors->get('categorie'))) has-error @endif">
                <div class="col">
                    <label for="">Categorie</label>
                    <select name="categorie" class="browser-default custom-select">
                        <option value=""selected>-----Selectionner-----</option>
                        @foreach ($categories as $categorie)
                        <option  value="{{$categorie->id}}">{{$categorie->nom_cat}}</option>
                        @endforeach
                    </select>
                    @if (count($errors->get('categorie')))
                    @foreach ($errors->get('categorie') as $message)
                        <li class="text-danger">{{$message}}</li>
                    @endforeach
                    @endif

                    </div>
                <div class="col">
                        <label for="">Date</label>
                        <div class="input-group mb-3 @if (count($errors->get('date'))) has-error @endif" >
                            <input name="date" type="text" class="form-control" id='datepicker'>
                            <div class="input-group-append">
                              <span class="input-group-text" ><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        @if (count($errors->get('date')))
                        @foreach ($errors->get('date') as $message)
                            <li class="text-danger">{{$message}}</li>
                        @endforeach
                @endif
                </div>
            </div>
            <div class="form-group">
                    <label for="">Image</label>
                    <input class="form-control"  type="file" name="image">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
        </form>
        </div>
    </div>
</div >

@endsection
