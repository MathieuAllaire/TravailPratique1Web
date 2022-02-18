<html>
    <head>
        <meta charset="utf-8">
        <link href="main.css" rel="stylesheet">
        <title>C'est pas un knockoff de Netflix!</title>
    </head>
    <body>
        <h1 id="Titre"><a href="index.html"><img href src="logo.jpg" alt="Logo du site">Netflix Bootleg</a></h1>
        <div id="navigation">
            <ul>
                <li><a href="connexion.php">Se connecter</a></li>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="maListe.php">Ma liste</a></li>
                <li><a href="films.php">Nos films</a></li>
                <li><a href="series.html">Nos séries</a></li>
                <li><a href="ajouterFilm.php">Ajouter/supprimer un oeuvre</a></li>
                <li><a href="reference.html">Réferences</a></li>
            </ul>
        </div>
        <div id="main">
            <h2>S'inscrire</h2>
            <form method="get" action="index.html">
                <ul>
                    <li><label for="non">Nom d'utilisateur</label><input type="input" id="nom" name="nom" size="40" placeholder="Entrez votre nom d'utilisateur"></li>
                    <li><label for="mdp">Mot de passe</label><input type="password" id="mdp" name="mdp" size="40" placeholder="Mot de passe"></li>
                    <li><label for="mdp2">Confirmer le mot de passe</label><input type="password" id="mdp2" name="mdp2" size="40" placeholder="Mot de passe identique"></li>                 
                </ul>
                <input class="boutonOk" type="submit" value=" M'inscrire ">
            </form>
            <h2>Se connecter</h2>
            <form method="get" action="texte.html">
                <ul>
                    <li><label for="non">Nom d'utilisateur</label><input type="input" id="nom" name="nom" size="40" placeholder="Nom d'utilisation"></li>
                    <li><label for="mdp">Mot de passe</label><input type="password" id="mdp" name="mdp" size="40" placeholder="Mot de passe"></li>    
                    <a>Mot de passe oublié?</a>                    
                </ul>
                <input class="boutonOk" type="submit" value=" Se connecter ">
            </form>
        </div>
        <div id="pied">
            <dl>
                <dt>gravida vel libero</dt>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                
            </dl>
            <dl>
                <dt>magna sed ligula</dt>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                
            </dl>
            <dl>
                <dt>ut leo leo</dt>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                    <dd><a>venenatis</a></dd>
                
            </dl>
        </div>
    </body>
</html>