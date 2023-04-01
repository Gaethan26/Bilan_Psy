@extends('layouts.template')        

@section('content')
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8 background-login">
        <h1 class="text-center text-white text-4xl font-bold">Bilan<span class="text-yellow">Psy</span></h1>
        <div>
        <h2 class="text-center text-2xl font-bold tracking-tight text-white">Créer ton <span class="text-yellow">compte !</span></h2>
        </div>
        <form class="mt-8 space-y-6" action="#" method="POST">
            <input type="hidden" name="remember" value="true">
            <div class="-space-y-px rounded-md shadow-sm">
                <p class="mt-2 ml-2 text-left text-yellow text-lg">
                    Informations personnelles
                </p>
                <div>
                    <input id="firstname" name="firstname" type="text" autocomplete="firstname" required class="relative block w-full rounded-md mt-2 border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 sm:text-sm" placeholder="Prénom">
                </div>
                <div>
                    <input id="lastname" name="lastname" type="text" autocomplete="lastname" required class="relative block w-full rounded-md mt-2 border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 sm:text-sm" placeholder="Nom">
                </div>
                <div>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full rounded-md mt-2 border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 sm:text-sm" placeholder="Email">
                </div>
                <div>
                    <input id="phone" name="phone" type="phone" autocomplete="phone" required class="relative block w-full rounded-md mt-2 border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 sm:text-sm" placeholder="N° Téléphone">
                </div>
                <br>
                <p class="mt-2 ml-2 text-left text-yellow text-lg">
                    Informations du compte
                </p>
                <div>
                    <input id="id" name="id" type="text" autocomplete="id" required class="relative block w-full rounded-md mt-2 border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 sm:text-sm" placeholder="Identifiant">
                </div>
                <div>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full rounded-md mt-2 border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 sm:text-sm" placeholder="Mot de passe">
                </div>
            </div>
            <div class="background-yellow rounded">
                <button type="submit" class="group relative flex w-full justify-center py-2 px-4 text-darkblue text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 btn-5">
                S'inscrire
                </button>
            </div>
        </form>
        <p class="mt-2 ml-2 text-left text-white text-lg">
        <a href="/" class="font-medium text-yellow">Retour à la page de connexion</a>
        </p>
    </div>
</div>
@endsection