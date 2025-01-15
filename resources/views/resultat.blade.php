<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de votre Retraite</title>
    <link rel="stylesheet" href="{{ asset('css/result.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('calculer.retraite') }}">Faire un autre calcul</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Votre retraite estimée</h1>
        <p>Montant estimé de votre retraite : {{ $retraiteEstimee }} dh</p>
        <p>Il vous reste {{ $anneesRestantes }} années avant votre retraite</p>
    </section>

    <footer>
        <p>&copy; 2024 Calculateur de Retraite. Tous droits réservés.</p>
    </footer>
</body>
</html>