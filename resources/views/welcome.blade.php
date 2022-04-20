@extends('layouts.front')
@section('title', 'Accueil de CinémActus')
@section('content')
    <h1 class="text-3xl text-blue-700 my-8">Bienvenue sur Cinémactus</h1>
    <p>Retrouvez tous les commentaires sur les films !</p>
        

<table class="tablepost">
<tbody>
<tr>
<td><h4 >Le dernier article</h4></td></tr>
<tr>
<td><h3 >{{ $post->title }}</h3></td></tr>
<tr>
<td> <p>{{ Str::limit($post->content, 10) }}</p></td></tr>
<tr>
<td><a href="{{ route('posts.show', $post) }}">Lire l'article</a></td></tr>
</tbody>
</tr>
</table>

@endsection