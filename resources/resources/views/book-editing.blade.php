@extends('layout.main')
@section('content')
    <style>
        .wsmenu>.wsmenu-list>li>a {
            color: black !important;
        }

    </style>
    <div id="butter">
        <section id="hero-6"
          class="hero-section division lazy new-inner-banner services-banner bookediting-banner color-white"
          data-src="{{asset('public/assets/images/new/book-editing/banner.jpg')}}">
          <div class="an-custom-container">
            <div class="row d-flex align-items-center">
              <div class="col-xl-6 col-lg-7">
                <div class="hero-6-txt white-color  mb-40 fadeInRight" data-wow-delay="0.4s">
                  <h1 class="has-title">Professional Book Editing Services
                  </h1>
                  <p>Behind every flawless manuscript is a proofreader <br> who has spectacular
                    attention to detail.</p>
                  <ul>
                    <li> <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Grammar</li>
                    <li> <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Punctuations</li>
                    <li> <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Sentence structures</li>
                    <li> <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/check.png')}}" alt=""> Transitions </li>
                  </ul>
                  <div class="btns-group mt-3">
                    <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact Us Now
                    </a>
                    <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk To Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom">
            <div class="container">
              <div class="brands-carousel">
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/2d2.svg')}}" alt="brand-logo">
                </div>
  
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/abebooks.svg')}}"
                    alt="brand-logo">
                </div>
  
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/alibris.svg')}}"
                    alt="brand-logo">
                </div>
  
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/barnesandoble.svg')}}"
                    alt="brand-logo">
                </div>
  
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/createspace.svg')}}"
                    alt="brand-logo">
                </div>
  
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/hachette.svg')}}"
                    alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/harpercollins.svg')}}"
                    alt="brand-logo">
                </div>
  
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/ibooks.svg')}}"
                    alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/ingramspark.svg')}}"
                    alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/kdp.svg')}}" alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/kobo.svg')}}" alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/lulu.svg')}}" alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/macmillan.svg')}}"
                    alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/penguin.svg')}}"
                    alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/scribd.svg')}}"
                    alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/scribe-smashwords.svg')}}"
                    alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/scribe-times.svg')}}"
                    alt="brand-logo">
                </div>
                <div class="brand-logo opacity-07">
                  <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/simon.svg')}}"
                    alt="brand-logo">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- INTRO
                ============================================= -->
  
        <!-- Title -->
        <section class="book-editing-section">
          <div class="container">
            <div class="row">
              <div class="col-md-10">
                <div class="section-title text-center mb-60">
                  <h2 class="h2-lg grey-color">Expert proofreaders to <span class="uppercase green"> hire </span>
                  </h2>
                  <p>Our proofreaders and editors have years of industry <span class="red"> experience </span> and
                    understand how a book
                    has to
                    be contextually <span class="red"> corrected </span> rather than “just” corrected.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="book-editing-step">
            <div class="tab-top">
              <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="book-editing-1" data-toggle="tab" href="#book-editing1"
                      role="tab">Developmental Editing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="book-editing-2" data-toggle="tab" href="#book-editing2" role="tab">Proofread
                      and Line Edit</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="book-editing-3" data-toggle="tab" href="#book-editing3" role="tab">Mechanical/
                      Copy Editing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="book-editing-4" data-toggle="tab" href="#book-editing4"
                      role="tab">Translation/ Bilingual Proofreading</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="container">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="book-editing1" role="tabpanel">
                  <div class="row">
                    <div class="col-lg-6">
                      <h4 class="h4-lg ">Developmental <br> editing</h4>
                      <p>Developmental editing entails a manuscript review by one of our editing experts who assess
                        if the content will need any value addition apart from what goes into line editing.
                        Value addition can be in the form of content arrangement, content addition, content
                        subtraction, and content modification.
                      </p>
                      <p>
                        Who needs this? Mostly, developmental editing is needed for budding authors who have
                        partly done scripts. A manuscript is evaluated on the following basis:
                      </p>
                      <ul class="check-50-li">
                        <li> <img src="{{asset('public/assets/images/check.png')}}" alt=""> Structure and Organization</li>
                        <li> <img src="{{asset('public/assets/images/check.png')}}" alt=""> Exposition</li>
                        <li> <img src="{{asset('public/assets/images/check.png')}}" alt=""> Pacing and flow</li>
                        <li> <img src="{{asset('public/assets/images/check.png')}}" alt=""> Characterization</li>
                        <li> <img src="{{asset('public/assets/images/check.png')}}" alt=""> Review of writing technique</li>
                        <li> <img src="{{asset('public/assets/images/check.png')}}" alt=""> Voice</li>
                        <li> <img src="{{asset('public/assets/images/check.png')}}" alt=""> Readership Profile</li>
                        <li> <img src="{{asset('public/assets/images/check.png')}}" alt=""> Everything that Line editing entails</li>
                      </ul>
                      <p>An evaluation report by an editing expert is sent along with a batch of edits to show what
                        we are trying to achieve based on the manuscript evaluation. Once approved, the editing
                        expert moves in the same direction.
                      </p>
                    </div>
                    <div class="col-lg-6">
                      <figure class="book-tab-img">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/new/book-editing/img-1.jpg')}}" alt="">
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="book-editing2" role="tabpanel">
                  <div class="row">
                    <div class="col-lg-6">
                      <h4 class="h4-lg ">Line editing
                      </h4>
                      <p>Line editing is usually required for completed manuscripts that just need to have the
                        content polished to perfection. They entail the following:
                      </p>
                      <ul class="check-50-li">
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Grammar</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Punctuations</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Sentence length</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Contextual Spellings</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Sentence structures </li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Transitions</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Eliminate cliché</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Eliminate contractions</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Text formatting (make sure that the text has a proper
                          introduction, main body, and a
                          conclusion. This holds true for all stories and all chapters)</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Eliminate weak writing (adjectives that increase
                          wordiness, words that add fluff,
                          dangling modifiers)</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Complete the dangling modifiers, add the subject/ object/
                          verb whatever is lacking
                        </li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Insert traits about the characters in case of fiction, or
                          facts about the topics for
                          non-fiction</li>
  
                      </ul>
                      <p>
                        The first set of dummy edits are sent to the customers in case of line edits to touch base
                        and understand what the client is looking forward to. All changes are shown to the customers
                        via tracks in the document, where they can also update what they would like to update in the
                        document.
                      </p>
                    </div>
                    <div class="col-lg-6">
                      <figure class="book-tab-img">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/Line-editing.jpg')}}" alt="">
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="book-editing3" role="tabpanel">
                  <div class="row">
                    <div class="col-lg-6">
                      <h4 class="h4-lg ">Mechanical Editing &amp; Copy Editing
                      </h4>
                      <p>Mechanical editing is specifically tailoring a script for a publishing platform or a
                        layout. Sometimes, clients want to submit scripts independently to a publisher or need
                        to get them in a specific style, for example, APA or MLA. In such a case, the entire
                        typeset is altered in line with the same. Copy-editing is oftentimes offered
                        complimentary with Mechanical editing. The usual changes apart from alteration of the
                        format and typesetting are as follow:
                      </p>
                      <ul class="check-50-li">
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Spell errors</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Grammar</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Punctuation</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Spacing</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Capitalization</li>
                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <figure class="book-tab-img">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/Mechanical-Editing-&amp;-Copy-Editing.jpg')}}"
                          alt="">
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="book-editing4" role="tabpanel">
                  <div class="row">
                    <div class="col-lg-6">
                      <h4 class="h4-lg ">Translation and Bilingual Proofreading
                      </h4>
                      <p>Many a time, the authors get their books translated into a specific language and may find
                        the vocabulary not in line with how locals of a specific region or their targeted
                        regions speak, the ghost editing expert tailors the content in line with how it would read
                        if the author was a local. Even the language that is used by a Dallas local would differ
                        from someone who lives in New York City. Have our ghost editing experts evaluate the
                        scripts for you, eliminate weak texts and replace them with something that instills life
                        into your text. Our experts can identify and correct grammatical conventions from the
                        source language being misapplied to the target language. A script publishers can make
                        your text pixel perfect.</p>
                      <p>
                        Such a script may also be analyzed based on the customer’s preference as per the
                        following parameters:
                      </p>
                      <ul class="check-50-li">
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Beta Reader testing</li>
                        <li><img src="{{asset('public/assets/images/check.png')}}" alt=""> Cultural accuracy reading</li>
                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <figure class="book-tab-img">
                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/Translation-and-Bilingual-Proofreading.jpg')}}"
                          alt="">
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="cta-section pt-60 pb-60 small">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h3>Let’s get started and </h3>
                <h2>share your innovative story</h2>
              </div>
              <div class="col-lg-6">
                <div class="text-right">
                  <a href="tel:+12022212733" class="btn btn-theme tra-black-hover ">Call Us <span>+1 (202) 221-2733</span>
                  </a>
                  <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn ">Live Chat with Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="glimpse-section pt-80 pb-80">
            <div class="an-custom-container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="section-title text-center">
                            <h4 class="h4-lg deepgrey-color">A glimpse into our ghostwriting projects
                            </h4>
                            <p>script publishers are all set to provide you with a more than satisfied customer experience.
                                Among all
                                things books, we have published numerous pieces of our clients that include journals,
                                cookbooks,
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
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Non-Fiction" role="tab">
                            Non-Fiction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Biography"
                            role="tab">Biography</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Health" role="tab">Mental
                            Health
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Romance" role="tab">Romance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Children-Book"
                            role="tab">Children
                            Book</a>
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
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Chanuka-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Chanuka</h3>
                                                <p>Author’s:<b> Mathew Wayne </b></p>
                                            </div>
                                            <a data-fancybox data-src="#frictionpopup1"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Echos-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Echos</h3>
                                                <p>Author: <b> Andrew J. Kalaven</b>

                                                </p>
                                            </div>
                                            <a data-fancybox data-src="#frictionpopup2"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Reckoning-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Reckoning
                                                </h3>
                                                <p>Author: <b> Rosie Daykin
                                                    </b>
                                                </p>
                                            </div>
                                            <a data-fancybox data-src="#frictionpopup3"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/The-idea-of-HIM-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>The idea of HIM</h3>
                                                <p>Author: <b> Carla Muse
                                                    </b>
                                                </p>
                                            </div>
                                            <a data-fancybox data-src="#frictionpopup4"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
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
                                                data-img="{{asset('public/assets/images/new/usgamerican/Communication---A-Phenomenon-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Communication - A Phenomenon</h3>
                                                <p>Author: <b> Lisa P Whitle</b></p>
                                            </div>
                                            <a data-fancybox data-src="#non-frictionpopup1"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/In-Search-of-the-Absolute-Truth-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>In Search of the Absolute Truth

                                                </h3>
                                                <p>Author: <b> Rosie Daykin</b></p>
                                            </div>
                                            <a data-fancybox data-src="#non-frictionpopup2"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/The-Coffin-World-of-My-Closet-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>The Coffin World of My Closet
                                                </h3>
                                                <p>Author: <b> Rufus Brown</b></p>
                                            </div>
                                            <a data-fancybox data-src="#non-frictionpopup3"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/The-Eleventh-Hour-Fight-against-America--thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>The Eleventh Hour: Fight against America
                                                </h3>
                                                <p>Author: <b> Cassandra Collin</b></p>
                                            </div>
                                            <a data-fancybox data-src="#non-frictionpopup4"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="item swiper-slide">
                      <div>
                        <div class="front">
                          <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/usgamerican/A-life-with-in-thumbnaill.jpg')}}" alt="">
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
                                                data-img="{{asset('public/assets/images/new/usgamerican/The-Coffin-World-of-My-Closet-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>The Coffin World of My Closet
                                                </h3>
                                                <p>Author: <b> Rufus Brown
                                                    </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Biographypopup1"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Captive-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Captive</h3>
                                                <p>Author: <b> Roseanne Cosme</b></p>
                                            </div>
                                            <a data-fancybox data-src="#Biographypopup2"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Mirage-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Mirage
                                                </h3>
                                                <p>Author: <b> Karla Ballard</b></p>
                                            </div>
                                            <a data-fancybox data-src="#Biographypopup3"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Numbness-and-Tingling-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Numbness and Tingling</h3>
                                                <p>Author: <b> Rebecca Boronski
                                                    </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Biographypopup4"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
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
                                                data-img="{{asset('public/assets/images/new/usgamerican/Understanding-Mental-Toughness-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Understanding Mental Toughness</h3>
                                                <p>Author: <b> Edmond Mbiaka
                                                    </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Healthpopup1"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Self-awareness-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Self-awareness</h3>
                                                <p>Author: <b> Kate Barkley</b></p>
                                            </div>
                                            <a data-fancybox data-src="#Healthpopup2"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Thinking-Beyond-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Thinking Beyond</h3>
                                                <p>Author: <b> Will A. Lee </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Healthpopup3"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Look-for-explanations,-not-excuses-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Look for explanations, not excuses
                                                </h3>
                                                <p>Author: <b> Chris Daigle
                                                    </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Healthpopup4"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
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
                                                data-img="{{asset('public/assets/images/new/usgamerican/Seductive-love-Infidels-and-love-birds-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Seductive love: Infidels and love birds</h3>
                                                <p>Author: <b> David C. Chang </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Romancepopup1"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/The-idea-of-HIM-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>The idea of HIM </h3>
                                                <p>Author: <b> Carla Muse
                                                    </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Romancepopup2"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/THE-RELIGION-OF-LUST-HIM-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>The Religion of Lust</h3>
                                                <p>Author: <b> Wesley Williams </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Romancepopup3"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Unfathomable-Love.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Unfathomable Love</h3>
                                                <p>Author: <b> Tiffany Blair Harrison </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Romancepopup4"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
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
                                                data-img="{{asset('public/assets/images/new/usgamerican/Cooker’s-War-On-Boogers-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Cooker’s War on Boogers
                                                </h3>
                                                <p>Author: <b> Sarah M. Forden</b></p>
                                            </div>
                                            <a data-fancybox data-src="#Children-Book-popup1"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Amanda-and-Alena-go-on-an-Adventure-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Amanda and Alena go on an Adventure </h3>
                                                <p>Author: <b> Marta Kristen
                                                    </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Children-Book-popup2"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/A-bit-too-sweet-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>A bit too sweet
                                                </h3>
                                                <p>Author: <b> Jamie Davidson</b></p>
                                            </div>
                                            <a data-fancybox data-src="#Children-Book-popup3"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Manners-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Manners
                                                </h3>
                                                <p>Author: <b> Andrew J Kalaven
                                                    </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Children-Book-popup4"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
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
                                                data-img="{{asset('public/assets/images/new/usgamerican/A-Serial-Killer-Explanation-thumbnaill.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>A Serial Killer Explanation

                                                </h3>
                                                <p>Author: <b> Victor Holt </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Fantasy-popup1"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Capsule-Reality-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Capsule Reality
                                                </h3>
                                                <p>Author: <b> Mathew Wayne

                                                    </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Fantasy-popup2"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Extra-terrestrial-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Extra-terrestrial
                                                </h3>
                                                <p>Author: <b>Carla Muse</b></p>
                                            </div>
                                            <a data-fancybox data-src="#Fantasy-popup3"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <div class="front">
                                            <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                data-img="{{asset('public/assets/images/new/usgamerican/Kill-with-a-Shot-thumbnaill.jpg')}}" alt="">
                                        </div>
                                        <div class="back">
                                            <div>
                                                <h3>Kill with a Shot
                                                </h3>
                                                <p>Author: <b> Suzanne Bailey
                                                    </b></p>
                                            </div>
                                            <a data-fancybox data-src="#Fantasy-popup4"
                                                class="btn btn-tra-black theme-hover mb-10" href="javascript:;">View
                                                More</a>
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
