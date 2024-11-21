<style>
    @media screen and (max-width: 991px) {
        #mainNav {
            width: 200px;
            position: absolute;
            top: 84px;
            right: 15px;
            -webkit-box-shadow: 0 0 7px 0 #d6d6d6;
            -moz-box-shadow: 0 0 7px 0 #d6d6d6;
            box-shadow: 0 0 7px 0 #d6d6d6;
        }
    }

    .search-container {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
        display: none;
        /* Hidden by default */
        background: rgba(255, 255, 255, 0);
        /* No background opacity, keep it transparent */
    }

    .search-wrap {
        position: relative;
        padding: 20px;
        background: #fff;
        max-width: 70%;
        margin: 105px auto;
    }

    .search-wrap {
        position: relative;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: transparent;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }
</style>
<div class="tm-top-bar-bg"></div>
<div class="tm-top-bar">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg narbar-light">
                <a class="navbar-brand mr-auto" href="{{ route('home-fr') }}">
                    <img src="/img/logo-new.png" alt="Conference in Europe" style="width:100px;height:100px;">
                </a>
                <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse"
                    data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                    <ul class="navbar-nav ml-auto" style="padding-left: 0%;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home-fr') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-fr') }}">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add-event-fr') }}">Ajouter des événements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('subscribe-fr') }}">S’inscrire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq-fr') }}">Foire aux questions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact-fr') }}">Contactez-nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="advance-serch">Recherche <i class="fa fa-search"></i></a>
                        </li>

                        <div class="search-container" id="search-container" style="display: none;">
                            <div class="search-wrap">
                                <button id="close-search" class="close-btn"><i class="fa fa-times"></i></button>

                                <form action="{{ url('advance-search-fr') }}" class="tm-search-form tm-section-pad-2">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="text" name="keyword" id="keyword" class="form-control"
                                                placeholder="Rechercher des événements par mot-clé ou détails de la conférence" autofocus
                                                required />
                                        </div>
                                        <div class="col-md-2 sbtn">
                                            <button type="submit" id="submit" class="btn"
                                                value="submit">Soumettre</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="js nav-link">
                            <button class="language-select" aria-haspopup="menu" aria-expanded="false"
                                id="language-btn">
                                <img src="/img/world.png" alt="World Icon"
                                    style="width: 20px; height: 20px; margin-right: 5px;">
                                <span id="current-lang">{{ app()->getLocale() === 'en' ? 'EN' : 'FR' }}</span>
                            </button>
                            <ul id="language-dropdown" class="language-dropdown" style="display: none;">
                                <li class="language-option" data-lang="en">English</li>
                                <li class="language-option" data-lang="fr-fr">French</li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
