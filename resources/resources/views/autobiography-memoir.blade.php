@extends('layout.main')
@section('content')
    <style>
        .wsmenu>.wsmenu-list>li>a {
            color: black !important;
        }

    </style>
    
<div id="butter">
    <section id="hero-6" class="hero-section division"
      style="background-image: url('{{asset('public/assets/images/educational-book-banner.jpg')}}');">
      <!-- HERO-6 CONTENT -->
      <div class="container">
        <div class="row d-flex align-items-center">


          <!-- HERO TEXT -->
          <div class="col-md-8">
            <div class="hero-6-txt white-color pc-20 mb-40 fadeInRight" data-wow-delay="0.4s">

              <!-- Title -->
              <h4>Autobiography Ghostwriter</h4>
              <h1 class="has-title">Bring your personal story to life and create an <span> inspirational
                  book </span>
              </h1>
              <!-- Text -->
              <p class="p-md">Autobiography writing services, ghostwriting, editing, and publishing a
                memoir/autobiography book that has
                the potential to impact lives
              </p>
              <!-- Buttons Group -->
              <div class="btns-group">
                <a href="javascript:;"
                  class="btn btn-tra-white theme-hover last-link chatOpen open_chat_btn mb-10">Talk to a writing
                  consultant
                </a>
              </div>
            </div>
          </div> <!-- END HERO TEXT -->

          <!-- HERO FORM -->
        </div> <!-- End row -->
      </div> <!-- END HERO-6 CONTENT -->


      <!-- SECTION OVERLAY -->
      <div class="bg-fixed white-overlay-top"></div>


    </section>

    <!-- INTRO
            ============================================= -->
    <section id="service-qualities">
      <div class="an-custom-container">

        <div class="fbox-6-wrapper fbox-6-hover mb-60">
          <div class="row">
            <div class="col-md-10 ">
              <div class="section-title text-center mb-60">
                <!-- Title -->
                <h2 class="h2-lg grey-color">Our memoir and <span> autobiography book </span> writing
                  service includes
                </h2>
              </div>
            </div>
          </div>
          <div class="row text-center">


            <!-- FEATURE BOX #1 -->
            <div class="col">
              <a href="#">
                <div class="serv-box">
                  <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/icon-1.png')}}" alt="">
                  <!-- Tra Digit -->
                  <!-- Text -->
                  <div class="fbox-6-txt">
                    <h5 class="h5-xs">Expert writers
                    </h5>
                    <p class="p-md grey-color">Ghostwriters with proven years of experience in the
                      niche are assigned the task of building the narrative and turning it into an
                      engaging story along with their teams.

                    </p>
                  </div>

                </div>
              </a>
            </div>


            <!-- FEATURE BOX #2 -->
            <div class="col">
              <a href="#">
                <div class="serv-box">
                  <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/icon-2.png')}}" alt="">
                  <!-- Tra Digit -->
                  <!-- Text -->
                  <div class="fbox-6-txt">
                    <h5 class="h5-xs">End-to-end Service
                    </h5>
                    <p class="p-md grey-color">Planning to get an autobiography or memoir book
                      ghostwritten by our ghostwriters? We can help you conceptualize, outline,
                      write, edit, publish and even market the book for you. Easy-peasy.

                    </p>
                  </div>

                </div>
              </a>
            </div>


            <!-- FEATURE BOX #3 -->
            <div class="col">
              <a href="#">
                <div class="serv-box">
                  <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/icon-3.png')}}" alt="">
                  <!-- Tra Digit -->
                  <!-- Text -->
                  <div class="fbox-6-txt">
                    <h5 class="h5-xs">Editor’s support
                    </h5>
                    <p class="p-md grey-color">An expert editing team will be assigned to your
                      memoir/autobiography book to provide an independent assessment of the book’s
                      content. We also recommend services to ensure all the facts about your life
                      are accurate and then further develop them into a fascinating book.

                    </p>
                  </div>

                </div>
              </a>
            </div>


            <!-- FEATURE BOX #4 -->
            <div class="col">
              <a href="#">
                <div class="serv-box">
                  <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/icon-4.png')}}" alt="">
                  <!-- Tra Digit -->
                  <!-- Text -->
                  <div class="fbox-6-txt">
                    <h5 class="h5-xs">Personalization
                    </h5>
                    <p class="p-md grey-color">The idea and subject matter of your book is unique;
                      hence we connect you to a ghostwriting team that not only understands your
                      life story but can also work closely to capture the essence of your life in
                      your own unique way.

                    </p>
                  </div>

                </div>
              </a>
            </div>
            <!-- FEATURE BOX #5 -->
            <div class="col">
              <a href="#">
                <div class="serv-box">
                  <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/icon-5.png')}}" alt="">
                  <!-- Tra Digit -->
                  <!-- Text -->
                  <div class="fbox-6-txt">
                    <h5 class="h5-xs">Publishing support

                    </h5>
                    <p class="p-md grey-color">Self-publishing a book has never been easier. We can
                      do it for you. Your book will hit online stores and your target audience.
                    </p>
                  </div>

                </div>
              </a>
            </div>
          </div> <!-- End row -->
        </div> <!-- END FEATURES-6 WRAPPER -->


      </div>
    </section>
    <section id="package-include" class="pt-100 pb-100 mb-40 content-section division bg-grey">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-5 col-lg-6">
            <div class="left-column ">
              <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/educational-book.png')}}"
                alt="content-image">
            </div>
          </div>
          <div class="col-md-7 col-lg-6">
            <div class="txt-block right-column pc-30  grey-color">

              <!-- Section ID -->
              <!-- Title -->
              <h2 class="h2-lg grey-color">Our ghostwriting package for autobiography and memoir books
                includes </h2>

              <!-- Text -->
              <ul>
                <li><img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Book Conceptualizing and
                  Outlining</li>
                <li><img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Ghostwriting and manuscript
                  preparation
                </li>
                <li><img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Editing and unlimited
                  revisions </li>

                <li><img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Adjusting the layout and
                  presentation for
                  the publishing standards</li>
                <li><img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> A dedicated team of expert
                  writers</li>
                <li><img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Beta Reader testing and
                  changes based on
                  data</li>

                <li><img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Complete copyrights</li>
                <li><img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Proofreading, and formatting
                </li>
                <li><img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> 100% Ownership Rights</li>
                <li><img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> 100% Content Copyrights</li>
              </ul>
              <b class="color-blue">** You can choose to have a package customized as per your ghost
                book writing
                requirements.
              </b>
            </div>
          </div> <!-- END TEXT BLOCK -->


        </div> <!-- End row -->
      </div> <!-- End container -->
    </section>
    <div class="features-13-title bg-scroll division  pb-100">
      <div class="container">
        <div class="row">
          <!-- TITLE -->
          <div class="col-lg-12">
            <div class="features-13-txt ">
              <!-- Section ID -->
              <!-- Title -->
              <h2 class="h2-lg grey-color">Do you want to tell a story about your <span> inspirational
                  life </span> and change
                peoples’ perspectives?

              </h2>
              <div class="features-13-txt ">
                <p class="p-lg">Until this point, your ghost book writing journey is like most
                  others;
                  however, you may require more products that can help your ghostwritten book
                  generate
                  more profit, reach a wider audience, and help create an impact on your target
                  reader.
                  Those are as follow:
                </p>
              </div>

            </div>
          </div>
          <!-- TEXT -->
        </div>
        <div class="row audio-video">
          <div class="col-lg-6">
            <div class="features-13-txt ">
              <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/children/audio-icon.png')}}" alt="">
              <div>
                <h4 class="h4-sm">Audio Books
                </h4>
                <p class="p-lg">Autobiography/memoir books are all about sharing your personal life –
                  the
                  ups and downs, the good and bad – with your readers. Creating audiobooks that can
                  literally talk to the listeners can create an impact your audience in a much better
                  way
                  that mere reading may not. Why make people with busy lives miss out on the
                  interesting
                  and unique lifestory that your ghostwritten book wants to put forth?
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="features-13-txt ">
              <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/children/video-icon.png')}}" alt="">
              <div>
                <h4 class="h4-sm">Video books/ Video Trailers
                </h4>
                <p class="p-lg">Books that are supported by soothing visuals or helpful videos can help
                  the
                  audience understand a person’s life and relate to it in a better manner. Moreover,
                  it
                  can touch people’s heart in a way that you can’t even imagine. Do you want your
                  autobiography/memoir book to just be another book that is forgotten in the pages of
                  history? Your idea can be created into a small video that your clients may purchase
                  via
                  a subscription or as a part of your ghostwritten eBook and audio/ video book package
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center mt-4">
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn">Talk
              to our
              Ghostwriting Strategists.</a>
          </div>
        </div>
      </div>
    </div>
    <section class="glimpse-section pt-80 pb-80">
      <div class="an-custom-container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="section-title text-center">
              <h4 class="h4-lg deepgrey-color">A glimpse into our ghostwriting projects
              </h4>
              <p>script publishers are all set to provide you with a more than satisfied customer experience.
                Among all
                things books, we have published numerous pieces of our clients that include journals, cookbooks,
                memoirs,
                and beautifully conjured fiction. We aim to produce content that is timeless.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Fiction" role="tab">Fiction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Non-Fiction" role="tab"> Non-Fiction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Biography" role="tab">Biography</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Health" role="tab">Mental Health
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Romance" role="tab">Romance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Children-Book" role="tab">Children Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Fantasy" role="tab">Fantasy</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="Fiction" role="tabpanel">
            <div class="new-book-slider swiper mySwiper">
              <div class="swiper-pagination"></div>
              <div class="swiper-wrapper">
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Fiction/Chanuka-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Chanuka</h3>
                        <p>Author’s:<b> Mathew Wayne </b></p>
                      </div>
                      <a data-fancybox data-src="#frictionpopup1" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>

                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Fiction/Echos-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Echos</h3>
                        <p>Author: <b> Andrew J. Kalaven</b>

                        </p>
                      </div>
                      <a data-fancybox data-src="#frictionpopup2" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Fiction/Reckoning-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Reckoning
                        </h3>
                        <p>Author: <b> Rosie Daykin
                          </b>
                        </p>
                      </div>
                      <a data-fancybox data-src="#frictionpopup3" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Fiction/The-idea-of-HIM-thumbnaill.jpg')}}"
                        alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>The idea of HIM</h3>
                        <p>Author: <b> Carla Muse
                          </b>
                        </p>
                      </div>
                      <a data-fancybox data-src="#frictionpopup4" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="Non-Fiction" role="tabpanel">
            <div class="new-book-slider swiper mySwiper">
              <div class="swiper-pagination"></div>
              <div class="swiper-wrapper">
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Non-Fiction/Communication---A-Phenomenon-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Communication - A Phenomenon</h3>
                        <p>Author: <b> Lisa P Whitle</b></p>
                      </div>
                      <a data-fancybox data-src="#non-frictionpopup1" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Non-Fiction/In-Search-of-the-Absolute-Truth-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>In Search of the Absolute Truth

                        </h3>
                        <p>Author: <b> Rosie Daykin</b></p>
                      </div>
                      <a data-fancybox data-src="#non-frictionpopup2" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Non-Fiction/The-Coffin-World-of-My-Closet-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>The Coffin World of My Closet
                        </h3>
                        <p>Author: <b> Rufus Brown</b></p>
                      </div>
                      <a data-fancybox data-src="#non-frictionpopup3" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Non-Fiction/The-Eleventh-Hour-Fight-against-America--thumbnaill.jpg')}}"
                        alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>The Eleventh Hour: Fight against America
                        </h3>
                        <p>Author: <b> Cassandra Collin</b></p>
                      </div>
                      <a data-fancybox data-src="#non-frictionpopup4" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <!-- <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Non-Fiction/A-life-with-in-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>A life with in</h3>
                        <p>Author: <b> Paulella Palmer
                          </b></p>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="Biography" role="tabpanel">
            <div class="new-book-slider swiper mySwiper">
              <div class="swiper-pagination"></div>
              <div class="swiper-wrapper">
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Biography/The-Coffin-World-of-My-Closet-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>The Coffin World of My Closet
                        </h3>
                        <p>Author: <b> Rufus Brown
                          </b></p>
                      </div>
                      <a data-fancybox data-src="#Biographypopup1" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Biography/Captive-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Captive</h3>
                        <p>Author: <b> Roseanne Cosme</b></p>
                      </div>
                      <a data-fancybox data-src="#Biographypopup2" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Biography/Mirage-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Mirage
                        </h3>
                        <p>Author: <b> Karla Ballard</b></p>
                      </div>
                      <a data-fancybox data-src="#Biographypopup3" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Biography/Numbness-and-Tingling-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Numbness and Tingling</h3>
                        <p>Author: <b> Rebecca Boronski
                          </b></p>
                      </div>
                      <a data-fancybox data-src="#Biographypopup4" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="Health" role="tabpanel">
            <div class="new-book-slider swiper mySwiper">
              <div class="swiper-pagination"></div>
              <div class="swiper-wrapper">
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Health/Understanding-Mental-Toughness-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Understanding Mental Toughness</h3>
                        <p>Author: <b> Edmond Mbiaka
                          </b></p>
                      </div>
                      <a data-fancybox data-src="#Healthpopup1" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Health/Self-awareness-thumbnaill.jpg')}}"
                        alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Self-awareness</h3>
                        <p>Author: <b> Kate Barkley</b></p>
                      </div>
                      <a data-fancybox data-src="#Healthpopup2" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Health/Thinking-Beyond-thumbnaill.jpg')}}"
                        alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Thinking Beyond</h3>
                        <p>Author: <b> Will A. Lee </b></p>
                      </div>
                      <a data-fancybox data-src="#Healthpopup3" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Health/Look-for-explanations,-not-excuses-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Look for explanations, not excuses
                        </h3>
                        <p>Author: <b> Chris Daigle
                          </b></p>
                      </div>
                      <a data-fancybox data-src="#Healthpopup4" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="Romance" role="tabpanel">
            <div class="new-book-slider swiper mySwiper">
              <div class="swiper-pagination"></div>
              <div class="swiper-wrapper">
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Romance/Seductive-love-Infidels-and-love-birds-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Seductive love: Infidels and love birds</h3>
                        <p>Author: <b> David C. Chang </b></p>
                      </div>
                      <a data-fancybox data-src="#Romancepopup1" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Romance/The-idea-of-HIM-thumbnaill.jpg')}}"
                        alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>The idea of HIM </h3>
                        <p>Author: <b> Carla Muse
                          </b></p>
                      </div>
                      <a data-fancybox data-src="#Romancepopup2" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Romance/THE-RELIGION-OF-LUST-HIM-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>The Religion of Lust</h3>
                        <p>Author: <b> Wesley Williams </b></p>
                      </div>
                      <a data-fancybox data-src="#Romancepopup3" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Romance/Unfathomable-Love.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Unfathomable Love</h3>
                        <p>Author: <b> Tiffany Blair Harrison </b></p>
                      </div>
                      <a data-fancybox data-src="#Romancepopup4" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="Children-Book" role="tabpanel">
            <div class="new-book-slider swiper mySwiper">
              <div class="swiper-pagination"></div>
              <div class="swiper-wrapper">
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Children/Cooker’s-War-On-Boogers-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Cooker’s War on Boogers
                        </h3>
                        <p>Author: <b> Sarah M. Forden</b></p>
                      </div>
                      <a data-fancybox data-src="#Children-Book-popup1" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Children/Amanda-and-Alena-go-on-an-Adventure-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Amanda and Alena go on an Adventure </h3>
                        <p>Author: <b> Marta Kristen
                          </b></p>
                      </div>
                      <a data-fancybox data-src="#Children-Book-popup2" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Children/A-bit-too-sweet-thumbnaill.jpg')}}"
                        alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>A bit too sweet
                        </h3>
                        <p>Author: <b> Jamie Davidson</b></p>
                      </div>
                      <a data-fancybox data-src="#Children-Book-popup3" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Children/Manners-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Manners
                        </h3>
                        <p>Author: <b> Andrew J Kalaven
                          </b></p>
                      </div>
                      <a data-fancybox data-src="#Children-Book-popup4" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="Fantasy" role="tabpanel">
            <div class="new-book-slider swiper mySwiper">
              <div class="swiper-pagination"></div>
              <div class="swiper-wrapper">
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}"
                        data-img="{{asset('public/assets/images/new/Fantasy/A-Serial-Killer-Explanation-thumbnaill.jpg')}}" alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>A Serial Killer Explanation

                        </h3>
                        <p>Author: <b> Victor Holt </b></p>
                      </div>
                      <a data-fancybox data-src="#Fantasy-popup1" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Fantasy/Capsule-Reality-thumbnaill.jpg')}}"
                        alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Capsule Reality
                        </h3>
                        <p>Author: <b> Mathew Wayne

                          </b></p>
                      </div>
                      <a data-fancybox data-src="#Fantasy-popup2" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Fantasy/Extra-terrestrial-thumbnaill.jpg')}}"
                        alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Extra-terrestrial
                        </h3>
                        <p>Author: <b>Carla Muse</b></p>
                      </div>
                      <a data-fancybox data-src="#Fantasy-popup3" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
                <div class="item swiper-slide">
                  <div>
                    <div class="front">
                      <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/Fantasy/Kill-with-a-Shot-thumbnaill.jpg')}}"
                        alt="">
                    </div>
                    <div class="back">
                      <div>
                        <h3>Kill with a Shot
                        </h3>
                        <p>Author: <b> Suzanne Bailey
                          </b></p>
                      </div>
                      <a data-fancybox data-src="#Fantasy-popup4" class="btn btn-tra-black theme-hover mb-10"
                        href="javascript:;">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-wrap-group text-center mt-4">
        <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
        </a>
        <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
        </a>
      </div>
    </section>
    <div class="bg-lightgrey">
      <section id="reviews-3" class="wide-100 reviews-section division">
        <div>
          <!-- SECTION TITLE -->
          <div class="row m-0">
            <div class="col-lg-10 offset-lg-1">
              <div class="section-title text-center mb-60">
                <!-- Title -->
                <h2 class="h2-xs deepgrey-color">Client Testimonials</h2>
                <!-- Text -->
                <p class="p-xl">See What Our Valuable Clients are Saying</p>
              </div>
            </div>
          </div>
          <!-- TESTIMONIALS CONTENT -->
          <div class="row">
            <div class="col-md-12">
              <div class="reviews-wrapper">
                <div class="review-3 radius-08">
                  <!-- Testimonial Text -->
                  <a>
                    <div class="review-3-txt">
                      <!-- Testimonial Author -->
                      <div class="quote">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">
                      </div>
                      <div class="app-rating ico-20 yellow-color">
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                      </div>
                      <!-- Text -->
                      <p class="p-md grey-color">“In the digital world, it is quite challenging to get people to
                        follow through all the things they promise to deliver. This is the most captivating quality of
                        U.S. Ghostwriting team – They always deliver what they promise, 99.9% response and
                        extraordinary quality of content. Thank you U.S. Ghostwriting team you guys made my dream come
                        true.”
                      </p>
                      <!-- App Rating -->
                      <h6 class="h6-sm deepgrey-color">Kris</h6>
                      <div class="leaf">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- END TESTIMONIAL #1 -->
                <!-- TESTIMONIAL #2 -->
                <div class="review-3 radius-08">
                  <!-- Testimonial Text -->
                  <a>
                    <div class="review-3-txt">
                      <!-- Testimonial Author -->
                      <div class="quote">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">
                      </div>
                      <div class="app-rating ico-20 yellow-color">
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                      </div>
                      <!-- Text -->
                      <p class="p-md grey-color">“My experience so far has been great as they have managed to compose
                        a bestseller under my name and that one book has made a major impact on my writing career. I
                        am looking forward toward two of my ongoing projects that will be published soon.”
                      </p>
                      <!-- App Rating -->
                      <h6 class="h6-sm deepgrey-color">Kane
                      </h6>
                      <div class="leaf">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- END TESTIMONIAL #2 -->
                <!-- TESTIMONIAL #3 -->
                <div class="review-3 radius-08">
                  <!-- Testimonial Text -->
                  <a>
                    <div class="review-3-txt">
                      <!-- Testimonial Author -->
                      <div class="quote">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">
                      </div>
                      <div class="app-rating ico-20 yellow-color">
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                      </div>
                      <!-- Text -->
                      <p class="p-md grey-color">“Working with U.S. Ghostwriting was just incredible. Loved their
                        professionalism and guided me in the best way possible. They let me know the rights and wrongs
                        of my book and successfully had it published in multiple platforms.” </p>
                      <!-- App Rating -->
                      <h6 class="h6-sm deepgrey-color">Nancy
                      </h6>
                      <div class="leaf">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- END TESTIMONIAL #3 -->
                <div class="review-3 radius-08">
                  <!-- Testimonial Text -->
                  <a>
                    <div class="review-3-txt">
                      <!-- Testimonial Author -->
                      <div class="quote">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">
                      </div>
                      <div class="app-rating ico-20 yellow-color">
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                      </div>

                      <!-- Text -->
                      <p class="p-md grey-color">“U.S. Ghostwriting have the most reliable, dependable and hardworking
                        writers. I love working with them: i will be using their service again and again and again!
                        Thank
                        you! Such a talented Team.”
                      </p>
                      <!-- App Rating -->
                      <h6 class="h6-sm deepgrey-color">Ethan Bailey</h6>
                      <div class="leaf">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- END TESTIMONIAL #1 -->
                <!-- TESTIMONIAL #2 -->
                <div class="review-3 radius-08">
                  <!-- Testimonial Text -->
                  <a>
                    <div class="review-3-txt">
                      <!-- Testimonial Author -->
                      <div class="quote">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">
                      </div>
                      <div class="app-rating ico-20 yellow-color">
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                      </div>

                      <!-- Text -->
                      <p class="p-md grey-color">“My Book was edited and proofread by U.S. Ghostwriting and it was
                        really
                        satisfying after seeing my published book. Their Customer support was awesome. I Highly
                        recommend
                        them to anyone who need proofread and editing help.”
                      </p>
                      <!-- App Rating -->
                      <h6 class="h6-sm deepgrey-color">Jeffrey Tran
                      </h6>
                      <div class="leaf">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- END TESTIMONIAL #2 -->
                <!-- TESTIMONIAL #3 -->
                <div class="review-3 radius-08">
                  <!-- Testimonial Text -->
                  <a>
                    <div class="review-3-txt">
                      <!-- Testimonial Author -->
                      <div class="quote">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">
                      </div>
                      <div class="app-rating ico-20 yellow-color">
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                      </div>

                      <!-- Text -->
                      <p class="p-md grey-color">“Our book came out absolutely perfect. I adore it so much! Thank you
                        so
                        much for all the hard work you did to put my students works into something parents can cherish
                        forever.” </p>
                      <!-- App Rating -->
                      <h6 class="h6-sm deepgrey-color">Harold Kim
                      </h6>
                      <div class="leaf">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- END TESTIMONIAL #3 -->
                <div class="review-3 radius-08">
                  <!-- Testimonial Text -->
                  <a>
                    <div class="review-3-txt">
                      <!-- Testimonial Author -->
                      <div class="quote">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">
                      </div>
                      <div class="app-rating ico-20 yellow-color">
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                      </div>
                      <!-- Text -->
                      <p class="p-md grey-color">“The books are amazing! My kids were really excited to receive their
                        books. They were even more proud of their work when they saw that it was published.” </p>
                      <!-- App Rating -->
                      <h6 class="h6-sm deepgrey-color">Jordan Bryant
                      </h6>
                      <div class="leaf">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <div class="review-3 radius-08">
                  <!-- Testimonial Text -->
                  <a>
                    <div class="review-3-txt">
                      <!-- Testimonial Author -->
                      <div class="quote">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">
                      </div>
                      <div class="app-rating ico-20 yellow-color">
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                        <span class="flaticon-star"></span>
                      </div>

                      <!-- Text -->
                      <p class="p-md grey-color">“The book was absolutely great! My parents and students really loved
                        the work that was done by your publishing company. They were happy with what they paid for and
                        the awesome work you put into the book. <br>
                        Thank you so much for the wonderful work with helping make our class book a great success.”
                      </p>
                      <!-- App Rating -->
                      <h6 class="h6-sm deepgrey-color">Jesse Parker
                      </h6>
                      <div class="leaf">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END TESTIMONIALS CONTENT -->
          <div class="row mt-3">
            <div class="col-12 text-center">
              <a target="_blank" href="https://www.trustpilot.com/review/script publishers.com">
                <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/trustpilot.png')}}" class="img-fluid" alt="">
              </a>
            </div>
          </div>
        </div>
        <!-- End container -->
      </section>
    </div>
  
@include('layout.footer-contact')

  </div> <!-- END PAGE CONTENT -->
  @endsection