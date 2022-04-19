@extends('layouts.front')
@section('title', 'Accueil de CinémActus')
@section('content')
    <h1 class="text-3xl text-blue-700 my-8">Bienvenue sur Cinémactus</h1>
    <p>Retrouvez tous les commentaires sur les films !</p>
    <h4 >Le dernier article</h4>
    <div class="bg-white shadow w-full sm:w-1/2">
        <h3 >{{ $post->title }}</h3>
        <p>{{ Str::limit($post->content, 10) }}</p>
        <a href="{{ route('posts.show', $post) }}">Lire l'article</a>
    </div>
@endsection