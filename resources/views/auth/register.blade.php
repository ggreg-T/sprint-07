  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        

        <title>@yield('title', 'Cinémactus')</title>

        <meta name="description" content="@yield('meta', 'Venez discuter de l&#039actu du cinémas')">

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
 
 
 <div  class="banniere" id="gridbanniere">
<div class="imgping"><a href="/">
<img src="{{URL::asset('images/cinema-penguin.png')}}" alt="profile Pic" height=auto width="75px"></a></div>
   <div class="textcinemactus"><a href="/">CinémActus</a></div></div>

<x-guest-layout>
    <x-auth-card>
        
        <x-slot name="logo">
            <a href="/">
                <x-application-logo  />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
