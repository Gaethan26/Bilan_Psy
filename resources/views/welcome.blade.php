<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bilan Psy</title>

        <!-- Links -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="../css/app.css" rel="stylesheet">
    </head>

    <body class="antialiased h-full background">
        <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8 background-login">
                <h1 class="text-center text-white text-4xl font-bold">Bilan<span class="text-yellow">Psy</span></h1>
                <div>
                <h2 class="text-center text-2xl font-bold tracking-tight text-white">Connecte toi à ton <span class="text-yellow">compte</span></h2>
                <p class="mt-2 text-center text-sm text-white">
                    Ou
                    <a href="#" class="font-medium text-yellow">commence tes 14 jours d'essai !</a>
                </p>
                </div>
                <form class="mt-8 space-y-6" action="#" method="POST">
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 sm:text-sm" placeholder="Adresse email">
                    </div>
                    <div>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full rounded-md mt-2 border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 sm:text-sm" placeholder="Mot de passe">
                    </div>
                </div>
            
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-yellow text-yellow">
                    <label for="remember-me" class="ml-2 block text-sm text-yellow">Se rappeler de moi</label>
                    </div>
            
                    <div class="text-sm">
                    <a href="/reset-password" class="font-medium text-white">Mot de passe oublié ?</a>
                    </div>
                </div>
            
                <div class="background-yellow rounded">
                    <button type="submit" class="group relative flex w-full justify-center py-2 px-4 text-darkblue text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 btn-5">
                    Se connecter
                    </button>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>
