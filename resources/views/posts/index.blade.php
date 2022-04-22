@extends('layouts.front')
@section('title', 'La liste des posts de mon super blog')
@section('content')
<h1>Les films</h1>
<p>Tous les articles sont ici, profitez-en ;)</p>
@foreach($posts as $post)

<table class="tablepost">
    <tbody>
        <tr>
            <td>
                <h3>{{ $post->title }}</h3>
            </td>
        </tr>
        <tr>
            <td>
                <p>{{ Str::limit($post->content, 10) }}</p>
            </td>
        </tr>
        <tr>
            <td>
                <h5><a href="{{ route('posts.show', $post) }}">Lire l'article</a></h5>
            </td>
            <!-- Fais maison  -->
            @csrf
            @method('DELETE')
            <td><a href="{{ route('posts.destroy', $post) }}" class="text-red-600 hover:text-red-900">EFFACER</a></td>
        </tr>
        <tr>
            <td></td>
        </tr>
    </tbody>
    </tr>
</table>
@endforeach
@endsection