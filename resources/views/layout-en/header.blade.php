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
</style>

<div class="tm-top-bar-bg"></div>
<div class="tm-top-bar">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg narbar-light">
                <a class="navbar-brand mr-auto" href="{{ route('home') }}">
                    <img src="/img/logo-new.png" alt="Conference in Europe" style="width:100px;height:100px;">
                </a>
                <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse"
                    data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                    <ul class="navbar-nav ml-auto" style="padding-left: 0%;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add-event') }}">Add Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('subscribe') }}">Subscribe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('advance-search') }}">Search <i
                                    class="fa fa-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <div class="js nav-link">
                                <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
                                    <form action="" id="search_form" class="language-picker__form">
                                        <label for="language-picker-select">Select your language</label>
                                        <select name="language-picker-select" id="language-picker-select">
                                            <option lang="fr" value="francais">Français</option>
                                            <option lang="en" value="english" style="pointer-events: none;"
                                                selected>English</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
