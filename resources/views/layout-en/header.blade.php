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
                  <!-- <li class="nav-item">
                     <a class="nav-link" href="{{ route('advance-search') }}">Search <i
                             class="fa fa-search"></i></a>
                     </li> -->
                  <li class="nav-item">
                     <a class="nav-link" href="javascript:void(0);" id="search-btn">Search <i class="fa fa-search"></i></a>
                  </li>
                  <div class="search-container" id="search-container" style="display: none;">
                     <div class="search-wrap">
                        <div class="search-box">
                           <form action="" id="search-action" name="">
                              <input class="search-field" aria-label="Search for product overviews, FAQs, and more..." id="search-query" autocomplete="off" name="query" placeholder="Search for product overviews, FAQs, and more..." type="text" aria-required="true">
                              <button class="search-btn" aria-label="Search"></button>
                              <span class="search-clear"></span>
                           </form>
                        </div>
                        <!-- <button class="search-close" id="search-close-btn" aria-label="Close search">×</button> -->
                     </div>
                     <div class="search-overlay"></div>
                  </div>
                  <!-- <li class="nav-item">
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
                     </li> -->
                  <div class="js nav-link">
                     <!-- Language button -->
                     <button class="language-select" aria-haspopup="menu" aria-expanded="false" id="language-btn">
                     <img src="img/world.png" alt="World Icon" style="width: 20px; height: 20px; margin-right: 5px;">
                     EN
                     </button>
                     <!-- Language options dropdown -->
                     <ul id="language-dropdown" class="language-dropdown" style="display: none;" >
                        <!-- English Option -->
                        <li class="language-option" data-lang="en">English</li>
                        <!-- French Option -->
                        <li class="language-option" data-lang="fr">Français</li>
                     </ul>
                  </div>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</div>