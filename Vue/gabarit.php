<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <base href="<?= $racineWeb ?>" >
        <link rel="stylesheet" href="Contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            <header>
               <h1 id="titreBlog">Administration</h1>
            </header>
            <section class="menu">
            <div>
                <a href="index.php">Employees</a>
            </div>
            <div>
                <a href="role/index">Role</a>
            </div>
            <div>
                <a href="emplacement/index">Emplacement</a>
            </div>
            </section>
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
            </footer>
        </div> <!-- #global -->
    </body>
</html>