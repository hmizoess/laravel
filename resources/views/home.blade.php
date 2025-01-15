<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculateur de Retraite Personnalisé</title>
    <link rel="stylesheet" href="{{ asset('css/retraite.css') }}">
</head>
<body>
    <header>
        <div>
            @if(session()->has('success'))
                {{session('success')}}
            @endif
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{route('calculer.retraite')}}">Calculer votre Retraite</a></li>
                <li><a href="{{ route('logout') }}">Deconnexion</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Bienvenue sur notre Calculateur de Retraite Personnalisé</h1>
        <p>Estimez le montant de votre retraite selon vos critères personnels.</p>
        <a href="{{route('calculer.retraite')}}" class="btn-primary">Commencer le calcul</a><!--route('calculer.retraite')!-->
    </section>

    <footer>
        <p>&copy; 2024 Calculateur de Retraite. Tous droits réservés.</p>
    </footer>
</body>
</html>