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
        <div class="w-full max-w-md space-y-6 background-login">
            <h2 class="text-left text-white text-2xl font-bold">Récupère ton <span class="text-yellow">compte !</span></h2>
                <div>
                    <div class="rounded-md shadow-sm">
                        <div>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 sm:text-sm" placeholder="Adresse email">
                        </div>
                    </div>
                    <div class="background-yellow rounded mt-2">
                        <button type="submit" class="group relative flex w-full justify-center py-2 px-4 text-darkblue text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 btn-5">
                        Envoyer
                        </button>
                    </div>
                    <p class="mt-2 ml-2 text-left text-white text-sm">
                        <i>Si tu as un compte associé à cette adresse mail, tu reçevras un email pour réinitaliser ton mot de passe.</i><br><br>
                        <a href="/" class="font-medium text-yellow">Retour à la page de connexion</a>
                    </p>
                </div>
        </div>
    </div>
</body>