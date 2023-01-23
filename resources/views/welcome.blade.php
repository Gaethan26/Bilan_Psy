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

    <body class="antialiased h-full" style="background-image: url('https://free4kwallpapers.com/uploads/originals/2022/04/20/rubiks-cube-digital-art-wallpaper.jpg'); background-repeat:no-repeat; background-size: cover; background-position: center;">
        <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8" style="background: rgba(10, 28, 42, .8); border-radius:2em; padding:2em;">
                <h1 class="text-center text-4xl font-bold" style="color:white;">Bilan<span style="color:#F2BC56;">Psy</span></h1>
                <div>
                <h2 class="text-center text-2xl font-bold tracking-tight text-white">Connecte toi à ton <span style="color: #F2BC56">compte</span></h2>
                <p class="mt-2 text-center text-sm text-white">
                    Ou
                    <a href="#" class="font-medium text-yellow hover:text-yellow">commence tes 14 jours d'essai</a>
                </p>
                </div>
                <form class="mt-8 space-y-6" action="#" method="POST">
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-yellow focus:outline-none focus:ring-yellow sm:text-sm" placeholder="Adresse email">
                    </div>
                    <div>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-yellow focus:outline-none focus:ring-yellow sm:text-sm" placeholder="Mot de passe">
                    </div>
                </div>
            
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-yellow text-yellow focus:ring-yellow">
                    <label for="remember-me" class="ml-2 block text-sm text-yellow">Se rappeler de moi</label>
                    </div>
            
                    <div class="text-sm">
                    <a href="#" class="font-medium text-yellow hover:text-yellow">Mot de passe oublié ?</a>
                    </div>
                </div>
            
                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent color-pink py-2 px-4 text-sm font-medium text-white hover:color-pink focus:outline-none focus:ring-2 focus:color-pink focus:ring-offset-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-yellow group-hover:text-yellow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Se connecter
                    </button>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>
