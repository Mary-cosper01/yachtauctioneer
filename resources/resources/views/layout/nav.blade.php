<header id="header" class="home-menu header tra-menu navbar-light">
    <div class="topbar">
      <div class="an-custom-container">
        <a href="tel:+14697887107">(469) 788-7107</a>
        <a>|</a>
        <a href="mailto:info@scriptpublishers.com"><span
            class="info@scriptpublishers.com"
            data-cfemail="54272124243b2620142127333c3b272023263d203d3a337a373b39">info@scriptpublishers.com</span></a>

      </div>
    </div>
    <div class="header-wrapper">
      <!-- MOBILE HEADER -->
      <div class="wsmobileheader clearfix">
        <span class="smllogo"><img src="{{asset('public/assets/logo1.png')}}" data-src="{{asset('public/assets/logo1.png')}}" class="lazy"
            alt="mobile-logo" /></span>
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
      </div>
      <!-- NAVIGATION MENU -->
      <div class="wsmainfull menu clearfix">
        <div class="wsmainwp clearfix">
          <!-- MOBILE MENU -->
          <div class="mobile-menu">
            <nav class="wsmenu clearfix">
              <ul class="wsmenu-list nav-theme-hover">
                <li class="nl-simple active" aria-haspopup="true"><a href="{{route('home')}}">Home</a></li>
                <li class="nl-simple" aria-haspopup="true"><a href="about-us">About Us</a></li>
                <li aria-haspopup="true" ><a href="#">Servicessss <span class="wsarrow"></span></a>

                  <ul class="sub-menu">
                    <li>
                      <h3>Services</h3></li>
                    <li><a href="ghostwriting-services">Ghostwriting</a></li>
                    <li><a href="book-editing">Book editing</a></li>

                    <li><a href="book-publishing">Publishing</a></li>

                    <li><a href="book-marketing">Book Marketing</a></li>
                    <li><a href="audio-book">Audio Book</a></li>
                    <li><a href="book-video">Video Book Trailer</a></li>
                    <li><a href="book-cover-design">Cover designing </a></li>
                    <li><a href="author-website">Website</a></li>
                    <!--<h3>GENRE</h3>-->
                    <!--<li><a href="childrens-book">Children's Book</a></li>-->
                    <!--<li><a href="fiction-book">General fiction</a></li>-->

                    <!--<li><a href="non-fiction-book">General Non-Fiction</a></li>-->
                    <!--<li><a href="autobiography-memoir">Autobiography</a></li>-->
                    <!--<li><a href="business-book">Strategy, Management & Business Books</a></li>-->
                    <!--<li><a href="self-help-book">Self-help</a></li>-->
                    <!--<li><a href="medicine-it-computer-science-book">Medicine, IT &amp; Computer Science</a>-->
                    <!--</li>-->
                    <!--<li><a href="#">Detective </a></li>-->
                    <!--<li><a href="medicine-it-computer-science-book">Medicine and IT &amp; Computer-->
                    <!--    Science</a></li>-->
                    <!--<li><a href="mystery-thriller-crime-book">Mystery & Thriller </a></li>-->

                    <!--<li><a href="horror-comic-fantasy-adventure-book">Horror</a></li>-->
                    <!--<li><a href="horror-comic-fantasy-adventure-book">Comic</a></li>-->
                    <!--<li><a href="horror-comic-fantasy-adventure-book">Fantasy</a></li>-->
                    <!--<li><a href="horror-comic-fantasy-adventure-book">Adventure </a></li>-->
                    <!--<li><a href="cook-book">Cook Book</a></li>-->
                    <!--<li><a href="history-poetry-literary-writing-religion-book">History</a></li>-->
                    <!--<li><a href="history-poetry-literary-writing-religion-book">Poetry</a></li>-->

                    <!--<li><a href="history-poetry-literary-writing-religion-book">Religion</a></li>-->
                <!--</li>-->
              </ul>
              </li>
              <li class="nl-simple" aria-haspopup="true"><a href="#">Bundles <span class="wsarrow"></span></a>
               <ul class="sub-menu">
                   <li><a href="{{route('book-publishing-bundles')}}">Book Publishing Bundles</a></li>
                   <li><a href="{{route('ghostwriting-bundles')}}">Ghostwriting bundles</a></li>
               </ul>
              </li>
              <li class="nl-simple" aria-haspopup="true"><a href="author">Author</a>
              </li>
                <li class="nl-simple" aria-haspopup="true"><a href="{{route('prices')}}">Pricing</a>
              </li>

              <li class="nl-simple" aria-haspopup="true"><a href="contact-us">Contact Us</a>
              </li>
              </ul>
            </nav>
          </div>
          <!-- LEFT MENU -->
          <div class="desktoplogo"><a href="{{route('home')}}" class="logo-black">
              <picture>
                <img class="img-fluid" src="{{asset('public/assets/logo1.png')}}" data-src="{{asset('public/assets/logo1.png')}}" alt="header-logo">
              </picture>
            </a>
            <a href="{{route('home')}}" class="logo-white">
              <picture>
                @if (!request()->segment(count(request()->segments())))
                <img class="img-fluid" src="{{asset('public/assets/logo1.png')}}" data-src="{{asset('public/assets/logo1.png')}}"
                alt="header-logo">
                @else
                <img class="img-fluid" src="{{asset('public/assets/logo1.png')}}" data-src="{{asset('public/assets/logo1.png')}}" alt="header-logo">
                @endif
               
              </picture>
            </a>
          </div>
          <nav class="wsmenu clearfix left-menu">
            <ul class="wsmenu-list nav-theme-hover">
              <li class="nl-simple" aria-haspopup="true"><a href="{{route('home')}}">Home</a></li>
              <li class="nl-simple" aria-haspopup="true"><a href="about-us">About Us</a></li>
              <li aria-haspopup="true"><a href="#">Services <span class="wsarrow"></span></a>

                <ul class="sub-menu">
                  <div class="row">
                    <div class="col-lg-12">
                      <h3>Services</h3>
                      <li><a href="ghostwriting-services">Ghostwriting</a></li>
                      <li><a href="book-editing">Book editing</a></li>

                      <li><a href="book-publishing">Publishing</a></li>

                      <li><a href="book-marketing">Book Marketing</a></li>
                      <li><a href="audio-book">Audio Book</a></li>
                      <li><a href="book-video">Video Book Trailer</a></li>
                      <li><a href="book-cover-design">Cover designing </a></li>
                      <li><a href="author-website">Website</a></li>
                    </div>
                    <!--<div class="col-lg-9">-->
                    <!--  <div class="row">-->
                    <!--    <div class="col-lg-12">-->
                    <!--      <h3>GENRE</h3>-->
                    <!--    </div>-->
                    <!--    <div class="col-lg-6">-->
                    <!--      <li><a href="childrens-book">Children's Book</a></li>-->
                    <!--      <li><a href="fiction-book">General fiction</a></li>-->

                    <!--      <li><a href="non-fiction-book">General Non-Fiction</a></li>-->
                    <!--      <li><a href="autobiography-memoir">Autobiography</a></li>-->
                    <!--      <li><a href="business-book">Strategy, Management & Business Books</a></li>-->
                    <!--      <li><a href="self-help-book">Self-help</a></li>-->

                    <!--    </div>-->
                    <!--    <div class="col-lg-6">-->

                    <!--      <li><a href="medicine-it-computer-science-book">Medicine and IT &amp; Computer-->
                    <!--          Science</a></li>-->
                    <!--      <li><a href="mystery-thriller-crime-book">Mystery & Thriller </a></li>-->

                    <!--      <li><a href="horror-comic-fantasy-adventure-book">Comic, Fantasy & Adventure</a></li>-->
                    <!--      <li><a href="cook-book">Cook Book</a></li>-->
                    <!--      <li><a href="history-poetry-literary-writing-religion-book">History, Poetry &-->
                    <!--          Religion</a>-->
                    <!--      </li>-->
                    <!--    </div>-->
                    <!--  </div>-->
                    <!--</div>-->
                  </div>
                </ul>
              </li>
 <li class="nl-simple" aria-haspopup="true"><a href="#">Bundles <span class="wsarrow"></span></a>
               <ul class="sub-menu">
                   <li><a href="{{route('book-publishing-bundles')}}">Book Publishing Bundles</a></li>
                   <li><a href="{{route('ghostwriting-bundles')}}">Ghostwriting bundles</a></li>
               </ul>
              </li>
              <li class="nl-simple" aria-haspopup="true"><a href="author">Author</a>
              </li>
                 <li class="nl-simple" aria-haspopup="true"><a href="{{route('prices')}}">Pricing</a>
              </li>
              <li class="nl-simple" aria-haspopup="true"><a href="contact-us">Contact Us</a></li>
                <a href="javascript:;" class="an-btn quotePopup">Let's Get Started</a>
            </ul>
          </nav>
        
          <!-- END MAIN MENU -->
        </div>
      </div> <!-- END NAVIGATION MENU -->
    </div> <!-- End header-wrapper -->
    <div class="submenu-drop-box"></div>
  </header>