@extends('layout.main')
@section('content')
    <div id="butter">
        <section id="hero-9" class="bg-scroll hero-section division lazy" data-src="{{asset('public/assets/images/new/home-banner.jpg')}}">
            <div class="an-custom-container">
                <!-- HERO TEXT -->
                <div class="row top">
                    <div class="col-lg-6">
                        <div class="hero-9-txt text-left wow fadeInRight">
                            <!-- Title -->
                            <h4>BRING YOUR DREAM OF</h4>
                            <h2 class="h2-sm white-color">becoming a <br>book author To Life...</h2>
                            <!-- Text -->
                            <p class="p-xl white-color">Let our ghostwriters do the book writing for you and translate your
                                thoughts
                                into captivating stories.</p>
                            <div class="btn-wrap"><a class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us
                                    now </a> <a class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to
                                    us </a></div>
                            <div class="t-img"><img src="{{asset('public/assets/images/blank-img.png')}}" alt=""
                                    data-src="{{asset('public/assets/images/new/t-1.png')}}"> <img src="{{asset('public/assets/images/blank-img.png')}}" alt=""
                                    data-src="{{asset('public/assets/images/new/t-2.png')}}"> <img src="{{asset('public/assets/images/blank-img.png')}}" alt=""
                                    data-src="{{asset('public/assets/images/blank-img.png')}}"></div>
                        </div>
                    </div>
                    <div class="col-lg-1">&nbsp;</div>
                    <div class="col-lg-5">
                        <div class="banner-book-slider swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="item swiper-slide">
                                    <div>
                                        <picture>
                                            <source srcset="{{asset('public/assets/images/c1.jpg')}}" type="image/webp">
                                            <source srcset="{{asset('public/assets/images/c2.webp')}}" type="image/webp"> <img
                                                src="{{asset('public/assets/images/113.jpg')}}">
                                        </picture>
                                        <h4>The Best You</h4>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <picture>
                                            <source srcset="{{asset('public/assets/images/c2.webp')}}" type="image/webp">
                                            <source srcset="{{asset('public/assets/images/new/banner-book-2.webp')}}" type="image/jpg"> <img
                                                src="{{asset('public/assets/images/new/banner-book-2.webp')}}">
                                        </picture>
                                        <h4>The Rose</h4>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div>
                                        <picture>
                                            <source srcset="{{asset('public/assets/images/julie-kagawa-eternity-cure-book-cover.jpg')}}" type="image/webp">
                                            <source srcset="{{asset('public/assets/images/new/banner-book-3.webp')}}" type="image/jpg"> <img
                                                src="{{asset('public/assets/images/new/banner-book-3.webp')}}">
                                        </picture>
                                        <h4>Tess of the Road</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HERO TEXT -->
                <div class="bottom">
                    <div class="container">
                        <div class="brands-carousel">
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/2d2.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/abebooks.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/alibris.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/barnesandoble.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/createspace.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/hachette.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/harpercollins.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/ibooks.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/ingramspark.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/kdp.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/kobo.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/lulu.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/macmillan.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/penguin.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/scribd.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/scribe-smashwords.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/scribe-times.jpg')}}"></div>
                            <div class="brand-logo opacity-07"><img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                    alt="brand-logo" data-src="{{asset('public/assets/images/platforms/simon.jpg')}}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End container -->
        </section>
        <!-- END HERO-9 -->
        <section class="why-choose-us pt-80 pb-60">
            <div class="an-custom-container">
                <div class="container">
                    <div class="section-title text-center mb-60">
                        <!-- Section ID -->
                        <div class="section-id ">Why Choose Us</div>
                        <!-- Title -->
                        <h4 class="h4-lg color-red">Have an upbeat idea but not the time to pen it down? <br>Let us do that
                            for
                            you.</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 ">
                        <div class="why-choose-box"><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/w-1.png')}}">
                            <h5>Content Curation</h5>
                            <p>The key to thought-provoking content is gathering the right kind of information and data.
                                Thorough
                                research to curate a meaningful script is what we aim to deliver.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="why-choose-box"><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/w-2.png')}}">
                            <h5>Document Development</h5>
                            <p>Once our team of proficient ghostwriters and editors have prepared a rough draft, we make
                                sure to
                                consult with you to make the process smooth until the manuscript reaches completion.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="why-choose-box"><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/w-3.png')}}">
                            <h5>Proofreading to Perfection</h5>
                            <p>The flow and fluency of a book can majorly impact the readers&rsquo; experience. Proofreading
                                the
                                entire manuscript will help enhance just that, making the book a breeze to read.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="why-choose-box"><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/w-4.png')}}">
                            <h5>Focus on formatting</h5>
                            <p>Our focus on formatting ensures that your book is reader-friendly and printing is not a
                                problem for
                                publishing houses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <p>
        <section class="cta-section pt-60 pb-60">
            <div class="an-custom-container">
                <div class="row">
                    <div class="col-lg-7">
                        <h3>Let’s get started and </h3>
                        <h2>share your innovative story</h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-right">
                            <a href="tel:+12022212733" class="btn btn-theme tra-black-hover ">Call Us <span>+1 (202)
                                    221-2733</span>
                            </a>
                            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn ">Live Chat
                                with
                                Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services-section pt-80 pb-80 lazy" data-src="{{asset('public/assets/images/new/service-bg.jpg')}}">
            <div class="an-custom-container">
                <div class="section-title text-center mb-40">
                    <!-- Section ID -->
                    <h1 class="section-id ">Book Writing Services</h1>
                    <!-- Title -->
                    <h4 class="h4-lg deepgrey-color">Your one-stop for all things books and beyond
                    </h4>
                </div>
                <div class="services-wrapper">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="services-item-wrap one">
                                <a href="ghostwriting-services.html">
                                    <div class="services-item">
                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-1.png')}}" alt="">
                                        <div>
                                            <h3>Ghostwriting</h3>
                                            <p>Carefully chosen words to breathe life into a raw idea. Have a ghostwriter
                                                write your story
                                                with the right choice of words and expressions.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div class="services-item-hover-wrap">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="services-item-in">
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-1.png')}}" alt="">
                                                    <div>
                                                        <h3>Ghostwriting</h3>
                                                        <p>Carefully chosen words to breathe life into a raw idea.
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>Do you have an idea that you’d like to fashion into words? Have a life
                                                    story to tell?
                                                    Want
                                                    to
                                                    shed light on a specific topic but do not have the time to write it
                                                    yourself?</p>
                                                <a href="ghostwriting-services.html" class="outline-btn btn">Explore
                                                    More</a>
                                                <div class="btn-wrap-group text-center">
                                                    <a href="javascript:;"
                                                        class="btn btn-theme tra-black-hover quotePopup ">Contact us now
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                        to us
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <figure>
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/1.jpg')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="services-item-wrap two">
                                <a href="book-editing.html">
                                    <div class="services-item">
                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-1.png')}}" alt="">
                                        <div>
                                            <h3>Ghost Editing</h3>
                                            <p>Perfection is a myth, but we can bring your script very close to it. Your
                                                script might look
                                                just perfect, but a second opinion can help you target problem areas you did
                                                not know
                                                existed.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div class="services-item-hover-wrap">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="services-item-in">
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-1.png')}}" alt="">
                                                    <div>
                                                        <h3>Ghost Editing</h3>
                                                        <p>Perfection is a myth, but we can bring your script very close to
                                                            it.

                                                        </p>
                                                    </div>
                                                </div>
                                                <p>Our proofreaders and editors have years of industry experience and
                                                    understand how a book
                                                    has to be contextually corrected rather than “just” corrected.</p>
                                                <a href="book-editing.html" class="outline-btn btn">Explore More</a>
                                                <div class="btn-wrap-group text-center">
                                                    <a href="javascript:;"
                                                        class="btn btn-theme tra-black-hover quotePopup ">Contact us now
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                        to us
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <figure>
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/2.jpg')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="services-item-wrap three">
                                <a href="book-cover-design.html">
                                    <div class="services-item">
                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-7.png')}}" alt="">
                                        <div>
                                            <h3>Cover Designing</h3>
                                            <p>People will judge a book by its cover. You should have a good one. Let a
                                                ghost book cover
                                                designer make your book a literal piece of art.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div class="services-item-hover-wrap">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="services-item-in">
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-7.png')}}" alt="">
                                                    <div>
                                                        <h3>Cover Designing</h3>
                                                        <p>People will judge a book by its cover.
                                                        </p>
                                                    </div>
                                                </div>
                                                <p> You should have a good one. Let a ghost book cover
                                                    designer make your book a literal piece of art.</p>
                                                <a href="book-cover-design.html" class="outline-btn btn">Explore More</a>
                                                <div class="btn-wrap-group text-center">
                                                    <a href="javascript:;"
                                                        class="btn btn-theme tra-black-hover quotePopup ">Contact us now
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                        to us
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <figure>
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/3.jpg')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="services-item-wrap four">
                                <a href="book-publishing.html">
                                    <div class="services-item">
                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-3.png')}}" alt="">
                                        <div>
                                            <h3>Publishing</h3>
                                            <p>How would people know about this masterpiece unless it is published? Target
                                                virtual book
                                                stores
                                                to tap an audience you did not know would read your book(s).
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div class="services-item-hover-wrap">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="services-item-in">
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-3.png')}}" alt="">
                                                    <div>
                                                        <h3>Publishing</h3>
                                                        <p>How would people know about this masterpiece unless it is
                                                            published?
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>Target virtual book stores
                                                    to tap an audience you did not know would read your book(s).</p>
                                                <a href="book-publishing.html" class="outline-btn btn">Explore More</a>
                                                <div class="btn-wrap-group text-center">
                                                    <a href="javascript:;"
                                                        class="btn btn-theme tra-black-hover quotePopup ">Contact us now
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                        to us
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <figure>
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/4.jpg')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="services-item-wrap five">
                                <a href="book-marketing.html">
                                    <div class="services-item">
                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-6.png')}}" alt="">
                                        <div>
                                            <h3>Book Marketing</h3>
                                            <p>How would someone buy your book if they do not know that such a masterpiece
                                                has been
                                                published?
                                                Let us market it for you.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div class="services-item-hover-wrap">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="services-item-in">
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-6.png')}}" alt="">
                                                    <div>
                                                        <h3>Book Marketing</h3>
                                                        <p>How would someone buy your book if they do not know that such a
                                                            masterpiece
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>has been published? Let us market it for you.
                                                    Take help from book marketing experts and launch your book as the next
                                                    big thing.</p>
                                                <a href="book-marketing.html" class="outline-btn btn">Explore More</a>
                                                <div class="btn-wrap-group text-center">
                                                    <a href="javascript:;"
                                                        class="btn btn-theme tra-black-hover quotePopup ">Contact us now
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                        to us
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <figure>
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/5.jpg')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="services-item-wrap six">
                                <a href="book-illustration-design.html">
                                    <div class="services-item">
                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-10.png')}}" alt="">
                                        <div>
                                            <h3>Illustration Design</h3>
                                            <p>Pictures speak louder than words. Let us bring the world in your imagination
                                                to reality via
                                                our
                                                custom illustration services.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="services-item-hover-wrap">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="services-item-in">
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-10.png')}}" alt="">
                                                    <div>
                                                        <h3>Illustration Design</h3>
                                                        <p>Pictures speak louder than words.
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>Let us bring the world in your imagination to reality via our custom
                                                    illustration
                                                    services.
                                                </p>
                                                <a href="book-illustration-design.html" class="outline-btn btn">Explore
                                                    More</a>
                                                <div class="btn-wrap-group text-center">
                                                    <a href="javascript:;"
                                                        class="btn btn-theme tra-black-hover quotePopup ">Contact us now
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                        to us
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <figure>
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/6.jpg')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="services-item-wrap seven">
                                <a href="audio-book.html">
                                    <div class="services-item">
                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-5.png')}}" alt="">
                                        <div>
                                            <h3>Audio Book</h3>
                                            <p>We have an in-house team of native narrators whose voice is captivating and
                                                in line with
                                                what
                                                the
                                                target audience would want to hear. </p>
                                        </div>
                                    </div>
                                </a>
                                <div class="services-item-hover-wrap">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="services-item-in">
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-5.png')}}" alt="">
                                                    <div>
                                                        <h3>Audio Book</h3>
                                                        <p>We have an in-house team of native narrators
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>whose voice is captivating and in line with what
                                                    the
                                                    target audience would want to hear. </p>
                                                <a href="audio-book.html" class="outline-btn btn">Explore More</a>
                                                <div class="btn-wrap-group text-center">
                                                    <a href="javascript:;"
                                                        class="btn btn-theme tra-black-hover quotePopup ">Contact us now
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                        to us
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <figure>
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/7.jpg')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="services-item-wrap eight">
                                <a href="book-video.html">
                                    <div class="services-item">
                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-8.png')}}" alt="">
                                        <div>
                                            <h3>Video Book Trailer</h3>
                                            <p> If you are not someone who would want to create a lot of video content, you
                                                can go with a
                                                book
                                                trailer that is a glimpse of your book</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="services-item-hover-wrap">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="services-item-in">
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-8.png')}}" alt="">
                                                    <div>
                                                        <h3>Video Book Trailer</h3>
                                                        <p>If you are not someone who would want to create a lot of video
                                                            content
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>If you are not someone who would want to create a lot of video content,
                                                    you can go with a
                                                    book
                                                    trailer that is a glimpse of your book</p>
                                                <a href="book-video.html" class="outline-btn btn">Explore More</a>
                                                <div class="btn-wrap-group text-center">
                                                    <a href="javascript:;"
                                                        class="btn btn-theme tra-black-hover quotePopup ">Contact us now
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                        to us
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <figure>
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/8.jpg')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="services-item-wrap nine">
                                <a href="author-website.html">
                                    <div class="services-item">
                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-4.png')}}" alt="">
                                        <div>
                                            <h3>Website Design</h3>
                                            <p>Someone who has a book to publish would also need a website that is their
                                                virtual abode. If
                                                you
                                                want to establish yourself as an author, reach your readers via a website.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <div class="services-item-hover-wrap">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="services-item-in">
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-4.png')}}" alt="">
                                                    <div>
                                                        <h3>Website Design</h3>
                                                        <p>Someone who has a book to publish would also need a website that
                                                            is their virtual
                                                            abode
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>If you
                                                    want to establish yourself as an author, reach your readers via a
                                                    website.</p>
                                                <a href="author-website.html" class="outline-btn btn">Explore More</a>
                                                <div class="btn-wrap-group text-center">
                                                    <a href="javascript:;"
                                                        class="btn btn-theme tra-black-hover quotePopup ">Contact us now
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                        to us
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <figure>
                                                    <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/9.jpg')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <p>Script Publisher are all set to provide you with a more than satisfied customer experience.
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
        </p>
        <section class="process-section pt-80 pb-80">
            <div class="an-custom-container">
                <div class="section-title text-center ">
                    <!-- Section ID -->
                    <div class="section-id ">Our Seamless</div>
                    <!-- Title -->
                    <h4 class="h4-lg deepgrey-color">Ghostwriting Process</h4>
                </div>
                <div class="process-wrapper">
                    <div class="process-item">
                        <h3>Sign Up for <br>Our Services</h3>
                        <div><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-1.png')}}"> <img class="p-img"
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img-top.png')}}"> <img
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img.png')}}"> <img src="{{asset('public/assets/images/blank-img.png')}}"
                                alt="" data-img="{{asset('public/assets/images/new/p-img1.png')}}"></div>
                    </div>
                    <div class="process-item">
                        <h3>Answer a Few <br>Questions</h3>
                        <div><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-2.png')}}"> <img class="p-img"
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img-bottom.png')}}"> <img
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img.png')}}"> <img src="{{asset('public/assets/images/blank-img.png')}}"
                                alt="" data-img="{{asset('public/assets/images/new/p-img1.png')}}"></div>
                    </div>
                    <div class="process-item">
                        <h3>Talk To Our <br>Writing Team</h3>
                        <div><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-3.png')}}"> <img class="p-img"
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img-top.png')}}"> <img
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img.png')}}"> <img src="{{asset('public/assets/images/blank-img.png')}}"
                                alt="" data-img="{{asset('public/assets/images/new/p-img1.png')}}"></div>
                    </div>
                    <div class="process-item active">
                        <h3>Receive Your <br>Book Outline</h3>
                        <div><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-4.png')}}"> <img class="p-img"
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img-bottom.png')}}"> <img
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img.png')}}"> <img src="{{asset('public/assets/images/blank-img.png')}}"
                                alt="" data-img="{{asset('public/assets/images/new/p-img1.png')}}"></div>
                    </div>
                    <div class="process-item">
                        <h3>Review Your Book <br>Chapter by Chapter</h3>
                        <div><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-5.png')}}"> <img class="p-img"
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img-top.png')}}"> <img
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img.png')}}"> <img src="{{asset('public/assets/images/blank-img.png')}}"
                                alt="" data-img="{{asset('public/assets/images/new/p-img1.png')}}"></div>
                    </div>
                    <div class="process-item">
                        <h3>Get Your Book <br>Compiled</h3>
                        <div><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-6.png')}}"> <img class="p-img"
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img-bottom.png')}}"> <img
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img.png')}}"> <img src="{{asset('public/assets/images/blank-img.png')}}"
                                alt="" data-img="{{asset('public/assets/images/new/p-img1.png')}}"></div>
                    </div>
                    <div class="process-item">
                        <h3>Get <br>Published</h3>
                        <div><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-7.png')}}"> <img class="p-img"
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img-top.png')}}"> <img
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img.png')}}"> <img src="{{asset('public/assets/images/blank-img.png')}}"
                                alt="" data-img="{{asset('public/assets/images/new/p-img1.png')}}"></div>
                    </div>
                    <div class="process-item">
                        <h3>Become a <br>Bestselling Author</h3>
                        <div><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-8.png')}}"> <img class="p-img"
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img-bottom.png')}}"> <img
                                src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/p-img.png')}}"> <img src="{{asset('public/assets/images/blank-img.png')}}"
                                alt="" data-img="{{asset('public/assets/images/new/p-img1.png')}}"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us-section lazy" style="background-image:none" data-src="{{asset('public/assets/images/new/about-bg.jpg')}}">
            <div class="an-custom-container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-title">
                            <!-- Section ID -->
                            <div class="section-id color-white">About Us</div>
                            <!-- Title -->
                            <h4 class="h4-lg color-white">With the aim to provide remarkable book writing services,</h4>
                            <p>Script Publisher takes pride in the proficient and talented team of writers that are onboard.
                                If you
                                are stuck in the rut of your busy daily routine and are unable to translate your thoughts
                                into words,
                                imaginative thinkers and professional ebook ghostwriters at Script Publisher will do the job
                                for you.
                            </p>
                            <a class="btn btn-tra-black theme-hover mt-4" href="about-us.html">Why Script Publisher</a>
                        </div>
                    </div>
                    <div class="col-lg-7"><img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/about-img.png')}}"></div>
                </div>
            </div>
        </section>
        <!--<div class="bg-lightgrey">-->
        <!--    <section id="reviews-3" class="wide-100 reviews-section division">-->
        <!--        <div>-->
                    <!-- SECTION TITLE -->
        <!--            <div class="row m-0">-->
        <!--                <div class="col-lg-10 offset-lg-1">-->
        <!--                    <div class="section-title text-center mb-60">-->
                                <!-- Title -->
        <!--                        <h2 class="h2-xs deepgrey-color">Client Testimonials</h2>-->
                                <!-- Text -->
        <!--                        <p class="p-xl">See What Our Valuable Clients are Saying</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
                    <!-- TESTIMONIALS CONTENT -->
        <!--            <div class="row">-->
        <!--                <div class="col-md-12">-->
        <!--                    <div class="reviews-wrapper">-->
        <!--                        <div class="review-3 radius-08">-->
                                    <!-- Testimonial Text -->
        <!--                            <a>-->
        <!--                                <div class="review-3-txt">-->
                                            <!-- Testimonial Author -->
        <!--                                    <div class="quote">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                    <div class="app-rating ico-20 yellow-color">-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                    </div>-->
                                            <!-- Text -->
        <!--                                    <p class="p-md grey-color">“In the digital world, it is quite challenging to-->
        <!--                                        get people to-->
        <!--                                        follow through all the things they promise to deliver. This is the most-->
        <!--                                        captivating quality of-->
        <!--                                        U.S. Ghostwriting team – They always deliver what they promise, 99.9%-->
        <!--                                        response and-->
        <!--                                        extraordinary quality of content. Thank you U.S. Ghostwriting team you guys-->
        <!--                                        made my dream come-->
        <!--                                        true.”-->
        <!--                                    </p>-->
                                            <!-- App Rating -->
        <!--                                    <h6 class="h6-sm deepgrey-color">Kris</h6>-->
        <!--                                    <div class="leaf">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </div>-->
                                <!-- END TESTIMONIAL #1 -->
                                <!-- TESTIMONIAL #2 -->
        <!--                        <div class="review-3 radius-08">-->
                                    <!-- Testimonial Text -->
        <!--                            <a>-->
        <!--                                <div class="review-3-txt">-->
                                            <!-- Testimonial Author -->
        <!--                                    <div class="quote">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                    <div class="app-rating ico-20 yellow-color">-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                    </div>-->
                                            <!-- Text -->
        <!--                                    <p class="p-md grey-color">“My experience so far has been great as they have-->
        <!--                                        managed to compose-->
        <!--                                        a bestseller under my name and that one book has made a major impact on my-->
        <!--                                        writing career. I-->
        <!--                                        am looking forward toward two of my ongoing projects that will be published-->
        <!--                                        soon.”-->
        <!--                                    </p>-->
                                            <!-- App Rating -->
        <!--                                    <h6 class="h6-sm deepgrey-color">Kane-->
        <!--                                    </h6>-->
        <!--                                    <div class="leaf">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </div>-->
                                <!-- END TESTIMONIAL #2 -->
                                <!-- TESTIMONIAL #3 -->
        <!--                        <div class="review-3 radius-08">-->
                                    <!-- Testimonial Text -->
        <!--                            <a>-->
        <!--                                <div class="review-3-txt">-->
                                            <!-- Testimonial Author -->
        <!--                                    <div class="quote">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                    <div class="app-rating ico-20 yellow-color">-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                    </div>-->
                                            <!-- Text -->
        <!--                                    <p class="p-md grey-color">“Working with U.S. Ghostwriting was just incredible.-->
        <!--                                        Loved their-->
        <!--                                        professionalism and guided me in the best way possible. They let me know the-->
        <!--                                        rights and wrongs-->
        <!--                                        of my book and successfully had it published in multiple platforms.” </p>-->
                                            <!-- App Rating -->
        <!--                                    <h6 class="h6-sm deepgrey-color">Nancy-->
        <!--                                    </h6>-->
        <!--                                    <div class="leaf">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </div>-->
                                <!-- END TESTIMONIAL #3 -->
        <!--                        <div class="review-3 radius-08">-->
                                    <!-- Testimonial Text -->
        <!--                            <a>-->
        <!--                                <div class="review-3-txt">-->
                                            <!-- Testimonial Author -->
        <!--                                    <div class="quote">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                    <div class="app-rating ico-20 yellow-color">-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                    </div>-->

                                            <!-- Text -->
        <!--                                    <p class="p-md grey-color">“U.S. Ghostwriting have the most reliable,-->
        <!--                                        dependable and hardworking-->
        <!--                                        writers. I love working with them: i will be using their service again and-->
        <!--                                        again and again!-->
        <!--                                        Thank-->
        <!--                                        you! Such a talented Team.”-->
        <!--                                    </p>-->
                                            <!-- App Rating -->
        <!--                                    <h6 class="h6-sm deepgrey-color">Ethan Bailey</h6>-->
        <!--                                    <div class="leaf">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </div>-->
                                <!-- END TESTIMONIAL #1 -->
                                <!-- TESTIMONIAL #2 -->
        <!--                        <div class="review-3 radius-08">-->
                                    <!-- Testimonial Text -->
        <!--                            <a>-->
        <!--                                <div class="review-3-txt">-->
                                            <!-- Testimonial Author -->
        <!--                                    <div class="quote">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                    <div class="app-rating ico-20 yellow-color">-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                    </div>-->

                                            <!-- Text -->
        <!--                                    <p class="p-md grey-color">“My Book was edited and proofread by U.S.-->
        <!--                                        Ghostwriting and it was-->
        <!--                                        really-->
        <!--                                        satisfying after seeing my published book. Their Customer support was-->
        <!--                                        awesome. I Highly-->
        <!--                                        recommend-->
        <!--                                        them to anyone who need proofread and editing help.”-->
        <!--                                    </p>-->
                                            <!-- App Rating -->
        <!--                                    <h6 class="h6-sm deepgrey-color">Jeffrey Tran-->
        <!--                                    </h6>-->
        <!--                                    <div class="leaf">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </div>-->
                                <!-- END TESTIMONIAL #2 -->
                                <!-- TESTIMONIAL #3 -->
        <!--                        <div class="review-3 radius-08">-->
                                    <!-- Testimonial Text -->
        <!--                            <a>-->
        <!--                                <div class="review-3-txt">-->
                                            <!-- Testimonial Author -->
        <!--                                    <div class="quote">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                    <div class="app-rating ico-20 yellow-color">-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                    </div>-->

                                            <!-- Text -->
        <!--                                    <p class="p-md grey-color">“Our book came out absolutely perfect. I adore it so-->
        <!--                                        much! Thank you-->
        <!--                                        so-->
        <!--                                        much for all the hard work you did to put my students works into something-->
        <!--                                        parents can cherish-->
        <!--                                        forever.” </p>-->
                                            <!-- App Rating -->
        <!--                                    <h6 class="h6-sm deepgrey-color">Harold Kim-->
        <!--                                    </h6>-->
        <!--                                    <div class="leaf">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </div>-->
                                <!-- END TESTIMONIAL #3 -->
        <!--                        <div class="review-3 radius-08">-->
                                    <!-- Testimonial Text -->
        <!--                            <a>-->
        <!--                                <div class="review-3-txt">-->
                                            <!-- Testimonial Author -->
        <!--                                    <div class="quote">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                    <div class="app-rating ico-20 yellow-color">-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                    </div>-->
                                            <!-- Text -->
        <!--                                    <p class="p-md grey-color">“The books are amazing! My kids were really excited-->
        <!--                                        to receive their-->
        <!--                                        books. They were even more proud of their work when they saw that it was-->
        <!--                                        published.” </p>-->
                                            <!-- App Rating -->
        <!--                                    <h6 class="h6-sm deepgrey-color">Jordan Bryant-->
        <!--                                    </h6>-->
        <!--                                    <div class="leaf">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </div>-->
        <!--                        <div class="review-3 radius-08">-->
                                    <!-- Testimonial Text -->
        <!--                            <a>-->
        <!--                                <div class="review-3-txt">-->
                                            <!-- Testimonial Author -->
        <!--                                    <div class="quote">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/quote-blue.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                    <div class="app-rating ico-20 yellow-color">-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                        <span class="flaticon-star"></span>-->
        <!--                                    </div>-->

                                            <!-- Text -->
        <!--                                    <p class="p-md grey-color">“The book was absolutely great! My parents and-->
        <!--                                        students really loved-->
        <!--                                        the work that was done by your publishing company. They were happy with what-->
        <!--                                        they paid for and-->
        <!--                                        the awesome work you put into the book. <br>-->
        <!--                                        Thank you so much for the wonderful work with helping make our class book a-->
        <!--                                        great success.”-->
        <!--                                    </p>-->
                                            <!-- App Rating -->
        <!--                                    <h6 class="h6-sm deepgrey-color">Jesse Parker-->
        <!--                                    </h6>-->
        <!--                                    <div class="leaf">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-1.png')}}" alt="">-->
        <!--                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/leaf-2.png')}}" alt="">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
                    <!-- END TESTIMONIALS CONTENT -->
        <!--            <div class="row mt-3">-->
        <!--                <div class="col-12 text-center">-->
        <!--                    <a target="_blank" href="https://www.trustpilot.com/review/Script Publisher.com">-->
        <!--                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/trustpilot.png')}}" class="img-fluid"-->
        <!--                            alt="">-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
                <!-- End container -->
        <!--    </section>-->
        <!--</div>-->
        <section class="cta-section second-cta pt-60 pb-60 text-center">
            <div class="an-custom-container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Let’s get started and </h3>
                        <h2>share your innovative story</h2>
                    </div>
                    <div class="col-lg-12">
                        <div>
                            <a href="tel:+14697887107" class="btn btn-theme tra-black-hover ">Call Us <span>(469) 788-7107</span>
                            </a>
                            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn ">Live Chat
                                with Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layout.footer-contact')


    </div> <!-- END PAGE CONTENT -->
@endsection
