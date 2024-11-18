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

    #search-container {
        display: none;
        position: absolute;
        top: 50px;
        right: 0;
        z-index: 1000;
    }

    /* Display search container on hover */
    #search-btn:hover+#search-container,
    #search-container:hover {
        display: block;
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
                <div id="mainNav" class="collapse navbar-collapse tm-bg-white" >
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
                            <a class="nav-link"  id="advance-serch">Search <i
                                    class="fa fa-search"></i></a>
                        </li>
            
                        <div class="search-container" id="search-container" style="display: none;">
                            <div class="search-wrap" >
                                <form action="{{ url('advance-search') }}" class="tm-search-form tm-section-pad-2">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="text" name="keyword" id="keyword" class="form-control"
                                                placeholder="Search events by keyword or conference details" autofocus
                                                required />
                                        </div>
                                        <div class="col-md-2 sbtn">
                                            <button type="submit" id="submit" class="btn"
                                                value="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="search-overlay"></div>
                        </div>
                        {{-- <div class="js nav-link">
                            <button class="language-select" aria-haspopup="menu" aria-expanded="false"
                                id="language-btn">
                                <img src="img/world.png" alt="World Icon"
                                    style="width: 20px; height: 20px; margin-right: 5px;">
                                EN
                            </button>
                            <ul id="language-dropdown" class="language-dropdown" style="display: none;">
                                <li class="language-option" data-lang="en">English</li>
                                <li class="language-option" data-lang="fr">Français</li>
                            </ul>
                        </div> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
