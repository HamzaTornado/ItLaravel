@extends('admin.dashboard')

@section('content')
<div class="container">
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->description}}</p>
            <p class="card-text">{{$post->content}}</p>
            <p class="card-text">
                Créé le  <small class="text-muted">{{$post->created_at->toDateString()}} </small>
                <br>
                Catégorie <span class=" badge badge-secondary"> {{ $post->categorie->nom_cat }}</span>
            </p>
        </div>
      </div>
</div>


@endsection
