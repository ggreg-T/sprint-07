<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        

        <title>@yield('title', 'Blog')</title>

        <meta name="description" content="@yield('meta', 'Articles lunaires et articles heureux sur ce blog merveilleux')">

        <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ewert&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">

        <!-- Styles -->
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
            
             {{-- "{{URL::asset('/image/cinema-penguin.png')}}" --}}
            
             <link rel="stylesheet" href="{{URL::asset('css/app.css') }}">
        @yield('scripts')

        <!-- Scripts -->
        <script src="{{URL::asset('js/app.js') }}" defer></script>
        @yield('style')
    </head>
    <body class="font-sans antialiased">
        


        <div >
        
    <header >

         {{-- <header class="fixed top-0 left-0 w-full space-x-1 sm:h-12 bg-white flex items-center sm:space-x-5 sm:pl-8 flex-wrap"> --}}

                <div  class="banniere" id="gridbanniere">
<div class="imgping"><a href="/">
<img src="{{URL::asset('images/cinema-penguin.png')}}" alt="profile Pic" height=auto width="75px"></a></div>
   <div class="textcinemactus"><a href="/">CinémActus</a></div>
   <div class="buttonban"><a  href="{{ route('register') }}" >INSCRIPTION</a></div>
   <div class="buttonban">  @auth
                    <a  href="{{ route('users.edit', Auth::user()) }}">Profil</a></div><div class="buttonban" >
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button  type="submit" href="{{ route('logout') }}">Déconnexion</button>

                    </form></div><div class="buttonban">
                    @if(Auth::user()->admin)
                        <a  href="{{ route('dashboard') }}">Administration</a></div><div class="buttonban"> 
                         <a  href="{{ route('posts.create') }}">Nouveau film</a></div> 
                    @endif
                @else
                    <div class="buttonban"><a  href="{{ route('login') }}">Connexion</a>
                @endauth</div>

</div>
                {{-- <div class="text-blue-800  mr-8">Mon Super Blog</div> --}}
                {{-- <a href="/">Accueil</a> --}}
              
                {{-- @auth
                    <a href="{{ route('users.edit', Auth::user()) }}">Profil</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" href="{{ route('logout') }}">Déconnexion</button>
                    </form>
                    @if(Auth::user()->admin)
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    @endif
                @else
                    <a href="{{ route('login') }}">Connexion</a>
                @endauth --}}
            </header>


            <!-- Page Content -->
            {{-- <main class="mt-14 mx-2 sm:mx-8"> --}}
                    <main>
                       <table class="blueTable">
<tbody>
<tr>
<td>  <div class="titre"><a href="{{ route('posts.index') }}">Les films</a></div>
                @yield('content')</td></tr>
</tbody>
</tr>
</table>
               
                      
            </main>
        </div>
        <footer><div class="footer">Simplon DWWM 2021 - Sprint 07 - HOUSSEINE - TECHER - SUBIRATS</div></footer>
    </body>
</html>