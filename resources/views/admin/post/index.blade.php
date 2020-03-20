@extends('admin.dashboard')

@section('content')
    <div class="container" id="app">
            <p class="">
                <h2>La liste de Posts</h2>
                <a class="btn btn-success btn-new pull-right" href="{{ url('admin/post/create')}}">Nouveau Article</a>
                <a  href="{{url('admin/categorie/create')}}" class="btn btn-primary" >Ajouter Une Categorie</a>
            </p>
        </div>
    <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                  @if ($post->image)
                    <img class="bd-placeholder-img card-img-top" width="100%" height="200" src="{{asset('storage/'.$post->image)}}">
                  @endif
                <div class="card-header">
                    <h4>{{$post->title}}</h4>
                </div>
                <div class="card-body">
                  <p class="card-text">{{$post->description}} .</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <form action="{{ url('admin/post',[ 'id' => $post->id ])}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="{{url('admin/post/'. $post->id)}}" class="btn btn-sm btn-outline-primary">Afficher</a>
                        <a href="{{url('admin/post/'. $post->id .'/edit')}}" class="btn btn-sm btn-outline-warning">Modifier</a>

                      <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>

                    </form>
                    </div>
                    <small class="text-muted">{{$post->created_at->toDateString()}}</small>
                  </div>
                </div>
                <div class="card-body">
                        <form action="{{ url('admin/post/updatestatu/'.$post->id) }}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            <!-- Generer Token key erreur-->
                            {{ csrf_field() }}
                            <!------------------------------>
                            @if ($post->active==0)
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" role="button" name="active" onClick="this.form.submit()" class="custom-control-input" id="activecheck{{$post->id}}" value="1">
                                <label class="custom-control-label" for="activecheck{{$post->id}}">Desactiver</label>
                            </div>
                            @else
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="active" class="custom-control-input" onClick="this.form.submit()"  id="activecheck{{$post->id}}" value="0" checked>
                                <label class="custom-control-label" for="activecheck{{$post->id}}">Active</label>
                            </div>
                        @endif
                        </form>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Modal Ajouter Categorie popup-->
@endsection
