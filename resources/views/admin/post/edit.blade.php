@extends('admin.dashboard')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-8 border center_div">
            <h2>Article</h2>
        <form action="{{ url('admin/post/'.$post->id) }}" method="Post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
                <!-- Generer Token key erreur-->
                {{ csrf_field() }}
                <!------------------------------>
            <div class="form-group @if (count($errors->get('titre'))) has-error @endif">
                <label for="titre">Titre</label>
                <input type="text" name="titre" class="form-control" value="{{$post->title}}">
                @if (count($errors->get('titre')))
                    @foreach ($errors->get('titre') as $message)
                        <li class="text-danger">{{$message}}</li>
                    @endforeach
                @endif

            </div>
            <div class="form-group @if (count($errors->get('description'))) has-error @endif">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" >{{$post->description}}</textarea>
                @if (count($errors->get('description')))
                    @foreach ($errors->get('description') as $message)
                        <li class="text-danger">{{$message}}</li>
                    @endforeach
                @endif
            </div>
            <div class="form-group @if (count($errors->get('contenu'))) has-error @endif">
                    <label for="">Contenu</label>
                    <textarea name="contenu" class="form-control" >{{$post->content}}</textarea>
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
                        <option  value="{{$post->categorie->id}}" selected>{{$post->categorie->nom_cat}}</option>
                        @foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->nom_cat}}</option>
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
                @if (count($errors->get('image')))
                    @foreach ($errors->get('image') as $message)
                        <li class="text-danger">{{$message}}</li>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Modiffier">
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
