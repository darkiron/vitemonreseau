<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>vitemonreseau.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html, body {
            height: 100%;
        }
        main { height: 80%}
        footer { height: 20%}
    </style>
</head>
<body>
<main class="is-flex-direction-row is-align-content-center">
    <section class="section">
        <div class="container">
            <h1 class="title">
                ViteMonReseau !
            </h1>
            <p class="subtitle">
               Une initiative <strong>citoyenne</strong>!
            </p>
            <div class="box">
                <article class="media">

                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>Mon Ip : </strong>
                                <br>
                                <?php echo $_SERVER['REMOTE_ADDR']; ?>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="box is-justify-content-center is-align-items-center">
                <button class="button is-primary has-text-weight-bold"
                        onclick="window.location = 'https://dons.fondationdefrance.org/mono-affectation/~mon-don?_cv=1'">
                    Faire un don
                </button>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="content has-text-centered">
        <p>
            Une initiative <strong>citoyenne</strong>!
             - année <?php echo (new DateTime())->format('Y')?> -
            Site respectueux de la RGPD, sans cookie, ni tracking !
            Aucun lien d'intérêt.
        </p>
        <p> <img src="https://mirrors.creativecommons.org/presskit/buttons/88x31/svg/by.svg"/></p>
        <p>  Site  autohébergé (un chaton en France), directeur de publication <a href="https://twitter.com/darkironLyon">@darkironLyon</a>
            Soutenir le site : <a href="https://www.utip.io/darkiron/"> via utips</a>
        </p>

    </div>
</footer>
</body>
</html>


