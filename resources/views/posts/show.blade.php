@extends('layouts.front')
@section('title', 'Lire l\'article '.$post->title)
@section('content')
	<section >
	    

<table class="tablepost">
<tbody>
<tr>
<td><h1 >{{ $post->title}}</h1></td></tr>
<tr>
<td>  <p>{{ $post->content }}</p></td></tr>
<tr>
<td> </td></tr>
<tr>
<td></td></tr>
</tbody>
</tr>
</table>

{{-- <h1 class="text-3xl text-blue-700 my-8">{{ $post->title}}</h1>
	    <p>{{ $post->content }}</p> --}}
	</section>

<table class="tablepost">
<tbody>
<tr>
<td>	<h5 >Les commentaires</h5>
	@forelse($post->comments as $comment)</td></tr>
</tbody>
</tr>
</table>



		<section >

            <table class="tablepost">
<tbody>
<tr>
<td><h5 >{{ $comment->title }} par {{ $comment->author }}</h5>
		    @if($comment->reported)
		    	<p>Le message a été signalé</p>
		    @else
		    	<p>{{ $comment->content }}</p>
		    	<a  href="{{ route('comments.report', $comment) }}">Signaler le commentaire</a>
		    @endif
		    @if(Auth::check() and Auth::user()->admin)
		    	<a href="{{ route('comments.edit', $comment) }}">Editer le commentaire</a>
		    @endif</td></tr>
</tbody>
</tr>
</table>
		    
		</section>

        <table class="tablepost">
<tbody>
<tr>
<td>@empty
		<h5>Soyez le premier à laisser un commentaire ! </h5>
	@endforelse
    <form action="{{ route('comments.store') }}" method="POST" >
    	<h5>Laisser un commentaire</h5>
    	 @if(session('success'))
            <div >
                {{ session('success') }}
            </div>
        @endif
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div >
        	<div class="py-2">
                <label for="author" >Nom</label>
                <input type="text" name="author" id="author"  @auth value="{{ old('author', Auth::user()->name) }}" @else value="{{ old('author') }}" @endauth>
                @error('author')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="py-2">
                <label for="title" c>Titre du commentaire</label>
                <input type="text" name="title" id="title"  value="{{ old('title') }}">
                @error('title')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="py-2">
                <label for="content" >Contenu</label>
                <textarea id="content" name="content" rows="3" >{{ old('content') }}</textarea>
                @error('content')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="py-2">
                <input type="submit"  value="Créer">
            </div>
        </div>
    </form></td></tr>
<tr>
<td> </td></tr>
<tr>
<td> </td></tr>
<tr>
<td></td></tr>
</tbody>
</tr>
</table>


	
@endsection