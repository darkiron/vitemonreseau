<?php define('UTIPS','https://www.utip.io/darkiron') ?>
<?php define('GITHUB','https://github.com/darkiron/vitemonreseau') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <section class="hero is-primary is-medium">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item">

                        </a>
                        <span class="navbar-burger" data-target="navbarMenuHeroA">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenuHeroA" class="navbar-menu">
                        <div class="navbar-end">
                            <a class="navbar-item is-active" href="<? echo UTIPS;?>">
                                Utips
                            </a>

                            <span class="navbar-item">
                              <a class="button is-primary is-inverted" href="<?php echo GITHUB;?>">
                                <span class="icon">
                                  <i class="fab fa-github"></i>
                                </span>
                                <span>Download</span>
                              </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    ViteMonReseau !
                </p>
                <p class="subtitle">
                    Une initiative <strong>citoyenne</strong>!
                </p>
            </div>
        </div>

    </section>
    <section class="section">
        <div class="container">
            <div class="box">
                <article class="media">

                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>Mon Ip : </strong>
                                <br>
                                <?php  echo $_SERVER['REMOTE_ADDR']; ?>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="box is-flex is-justify-content-center is-align-items-center">
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
            Soutenir le site : <a href="/"> via utips</a>
        </p>

    </div>
</footer>
</body>
</html>


