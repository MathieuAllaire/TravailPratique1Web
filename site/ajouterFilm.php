<html>
    <head>
        <meta charset="utf-8">
        <link href="main.css" rel="stylesheet">
        <title>C'est pas un knockoff de Netflix!</title>
    </head>
    <body>
        <h1 id="Titre"><a href="index.html"><img href src="logo.jpg" alt="Logo du site">Netflix Bootleg</a></h1>
        <div id="Find">
            <form method="get" action="films.php">
                <input type="search" id="recherche" name="recherche" size="40" placeholder="Rechercher un film ou une série">
                <input type="submit" class="floatRight" value="&#x1F50D;">
        </form>
        </div>
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
            <h2>Ajouter un film ou une série</h2>
            <form method="get" action="">
                <ul>
                    <li><label for="non">Titre du film ou de la série</label><input type="input" id="nom" name="nom" size="40" placeholder="Titre"></li>
                    <li><label for="non">Description</label><input type="input" id="nom" name="nom" size="40" placeholder="Description"></li>
                    <li><label for="non">Date de sortie</label><input type="input" id="nom" name="nom" size="40" placeholder="Date de sortie"></li>
                    <li><label for="non">Acteurs</label><input type="input" id="nom" name="nom" size="40" placeholder="Acteurs"></li>      
                    <li><label for="non">Réalisateur</label><input type="input" id="nom" name="nom" size="40" placeholder="Réalisateurs"></li>
                    <li><label for="non">Nombre de saison (séries)</label><input type="input" id="nom" name="nom" size="40" placeholder="Nombre de saisons"></li>
                    <li><label for="non">Nombre d'épisode (séries)</label><input type="input" id="nom" name="nom" size="40" placeholder="Nombre d'épisodes"></li>                 
                </ul>
                <input class="boutonOk" type="submit" value=" Ajouter l'oeuvre ">
            </form>
            <h2>Suprrimer un film ou une série</h2>
            <form method="get" action="">
                <ul>
                    <li><label for="non">Titre du film ou de la série</label><input type="input" id="nom" name="nom" size="40" placeholder="Titre"></li>            
                </ul>
                <input class="boutonOk" type="submit" value=" Supprimer ">
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