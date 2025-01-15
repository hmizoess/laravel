<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculer votre Retraite</title>
    <link rel="stylesheet" href="{{ asset('css/resultat.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Calcul de votre Retraite</h1>
        <form method="POST" action="{{route('resultat')}}"><!--route('resultat')!-->
            @csrf
            <div>
                <label for="age_actuel">Âge actuel</label>
                <input type="number" id="age_actuel" name="age_actuel" required>
            </div>

            <div>
                <label for="salaire_actuel">Salaire actuel (€)</label>
                <input type="number" id="salaire_actuel" name="salaire_actuel" required>
            </div>
            <div>
                <label for="annees_cotisation">Années de cotisation</label>
                <input type="number" id="annees_cotisation" name="annees_cotisation" required>
            </div>
            <div>
                <label for="age_retraite">Age Retraite</label>
                <input type="number"  name="age_retraite" required>
            </div>
            <div>
                <button type="submit">Calculer ma Retraite</button>
            </div>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Calculateur de Retraite. Tous droits réservés.</p>
    </footer>
</body>
</html>