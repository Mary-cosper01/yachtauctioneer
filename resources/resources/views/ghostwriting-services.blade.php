@extends('layout.main')
@section('content')
    <style>
        .wsmenu>.wsmenu-list>li>a {
            color: black !important;
        }

    </style>
    <div id="butter">
        <section id="hero-6"
            class="hero-section division lazy new-inner-banner services-banner ghostwritingservices-banner color-white"
            style="background:#cf4a8b">
            <div class="an-custom-container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-5 clo-lg-7">
                        <div class="hero-6-txt white-color  mb-40 fadeInRight" data-wow-delay="0.4s">
                            <h1 class="has-title">Professional <br> Ghostwriting Services
                            </h1>
                            <p>Do you have an <b class="green"> idea </b> that you’d like to fashion into words?
                                Have a <b class="yellow"> life story </b> to tell? Want to shed light on a specific
                                topic but do not have the
                                time to write it yourself?</p>
                            <strong>Let Script Publisher do all the writing for you.</strong>
                            <div class="btns-group mt-3">
                                <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact Us Now
                                </a>
                                <a href="javascript:;"
                                    class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk To Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('public/assets/images/new/ghostwriting-services/banner-img.png')}}" class="banner-img" alt="">
            <div class="bottom">
                <div class="container">
                    <div class="brands-carousel">
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/2d2.svg')}}"
                                alt="brand-logo" />
                        </div>

                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/abebooks.svg')}}"
                                alt="brand-logo" />
                        </div>

                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/alibris.svg')}}"
                                alt="brand-logo" />
                        </div>

                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                data-src="{{asset('public/assets/images/platforms/barnesandoble.svg')}}" alt="brand-logo" />
                        </div>

                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                data-src="{{asset('public/assets/images/platforms/createspace.svg')}}" alt="brand-logo">
                        </div>

                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/hachette.svg')}}"
                                alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                data-src="{{asset('public/assets/images/platforms/harpercollins.svg')}}" alt="brand-logo" />
                        </div>

                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/ibooks.svg')}}"
                                alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                data-src="{{asset('public/assets/images/platforms/ingramspark.svg')}}" alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/kdp.svg')}}"
                                alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/kobo.svg')}}"
                                alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/lulu.svg')}}"
                                alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/macmillan.svg')}}"
                                alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/penguin.svg')}}"
                                alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/scribd.svg')}}"
                                alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                data-src="{{asset('public/assets/images/platforms/scribe-smashwords.svg')}}" alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}"
                                data-src="{{asset('public/assets/images/platforms/scribe-times.svg')}}" alt="brand-logo" />
                        </div>
                        <div class="brand-logo opacity-07">
                            <img class="img-fluid" src="{{asset('public/assets/images/blank-img.png')}}" data-src="{{asset('public/assets/images/platforms/simon.svg')}}"
                                alt="brand-logo" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ghostwriting-service-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="section-title text-center ">
                            <h2 class="h2-lg grey-color">Ghostwriting
                            </h2>
                            <p>Here’s what our ghostwriting package offers:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Proficient Ghostwriting Team
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                            We have the best team of creative writers and accomplished editors, as well as
                                            marketing and
                                            publishing strategists, to make the entire ghostwriting process easy. Our
                                            reliable and friendly
                                            team will work with you at every step of the way, ensuring that the finished
                                            manuscript meets
                                            all your requirements.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Manuscript preparation & Book writing
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                            Having a manuscript completed is the first step towards conjuring your own book.
                                        </p>
                                        <p>
                                            Already have a manuscript completed? You may require ghost editing services. Let
                                            a ghost editing
                                            specialist give it a round of expert review, proofreading, and editing. A second
                                            read always
                                            helps identify nooks and corners that may require to be worked upon. Having
                                            written the script
                                            yourself, these may not be visible to you, but an expert editor can help
                                            identify those. Let us
                                            take care of the rest.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <strong class="note">
                            <span class="red"> Note: </span> All books need to mandatorily go through a round of
                            final edits in
                            order to be perfected. A 200-page book usually takes <= 90 natural days. However, if you have a
                                specific deadline, our representatives can facilitate you for that. </strong>
                    </div>
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-5">
                        <figure>
                            <img src="{{asset('public/assets/images/new/ghostwriting-services/img-1.png')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="ghostwriting-service-section-3">
            <div class="g-background">
                <div class="process-1 active"></div>
                <div class="process-2"></div>
                <div class="process-3"></div>
                <div class="process-4"></div>
                <div class="process-5"></div>
                <div class="process-6"></div>
                <div class="process-7"></div>
                <div class="process-8"></div>
                <div class="process-9"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ghostwriting-process-item active" data-background="process-1">
                            <div class="p-head">
                                <img src="{{asset('public/assets/images/new/ghostwriting-services/icon-1.png')}}" alt="">
                                Book writing & Manuscript preparation
                            </div>
                            <div class="p-body">
                                <p>Having a manuscript completed is the first step towards conjuring your own book.</p>
                                <p>Already have a manuscript completed? You may require ghost editing services. Let a ghost
                                    editing
                                    specialist give it a round of expert review, proofreading, and editing. A second read
                                    always helps
                                    identify nooks and corners that may require to be worked upon. Having written the script
                                    yourself,
                                    these may not be visible to you, but an expert editor can help identify those. Let us
                                    take care of
                                    the rest.</p>
                            </div>
                        </div>
                        <div class="ghostwriting-process-item" data-background="process-2">
                            <div class="p-head">
                                <img src="{{asset('public/assets/images/new/ghostwriting-services/icon-2.png')}}" alt="">
                                Cover Designing
                            </div>
                            <div class="p-body">
                                <p>Step 2 is to get a book cover designed. As soon as you have the scope of your book
                                    defined, you
                                    should put some thoughts into how the book cover should look. A book cover is of extreme
                                    importance.
                                    While they say that one should not judge a book by its cover, it is imperative that your
                                    book will
                                    stand out if it has a captivating cover, and people are bound to judge your book based
                                    on its cover.
                                </p>
                                <p>Get it designed by a cover designing expert.</p>
                            </div>
                        </div>
                        <div class="ghostwriting-process-item" data-background="process-3">
                            <div class="p-head">
                                <img src="{{asset('public/assets/images/new/ghostwriting-services/icon-3.png')}}" alt="">
                                ISBN
                            </div>
                            <div class="p-body">
                                <p>Your book will have a title. If you don’t have one, your ghostwriting expert will help
                                    you decide
                                    on one. All titles need to be secured against ISBNs. An ISBN is an international book
                                    number
                                    assigned to your book in order for it to be shipped and sold worldwide.</p>
                                <p>The ISBN and Book Cover are mandatory requirements to publish a book.</p>
                            </div>
                        </div>
                        <div class="ghostwriting-process-item" data-background="process-4">
                            <div class="p-head">
                                <img src="{{asset('public/assets/images/new/ghostwriting-services/icon-4.png')}}" alt="">
                                Book Publishing
                            </div>
                            <div class="p-body">
                                <p>Having a spectacular script and cover completed and the ISBNs registered now is the time
                                    to get
                                    your books published on platforms where they reach the intended audience. Even if it is
                                    a personal
                                    story that may be able to teach people a thing or two, or if it is a business book that
                                    you’d want
                                    to do literal business (winks), you would have to target publishing platforms where the
                                    clients may
                                    be able to get their hands on your books.</p>
                                <p>Want to know what the experts think about this?</p>
                                <p>
                                    Well, one should always have their personal websites to sell books, which would not just
                                    allow you
                                    to get the entire revenue in your bank account as soon as a purchase is made, it also
                                    helps you
                                    establish yourself as a digital creator, an author, and a celebrity in hindsight.
                                </p>
                                <p>
                                    But how does one keep getting sales from the audience that may not be too active to land
                                    on your
                                    personal websites? This can be done via Social Media Marketing and Publishing it on
                                    online book
                                    stores.
                                </p>

                            </div>
                        </div>
                        <div class="ghostwriting-process-item" data-background="process-5">
                            <div class="p-head">
                                <img src="{{asset('public/assets/images/new/ghostwriting-services/icon-5.png')}}" alt="">
                                Printed Copies
                            </div>
                            <div class="p-body">
                                <p>Is your script complete, and are you all set to get it published? You’ll need printed
                                    copies to
                                    ship those to anyone who orders your book. Don’t let any third-party platform dig too
                                    deep in your
                                    pockets to produce printed copies of your masterpiece. Let us do it at a discounted
                                    price.</p>
                                <p>You can get customized Hardcovers and Paperbacks. Ask our representatives for a quote.
                                </p>
                                <p>You can also sign up for a package that can help you avail of all services required from
                                    step 1
                                    until step 5 at a discounted price. Sign up for a publishing combo.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="ghostwriting-process-item" data-background="process-6">
                            <div class="p-head">
                                <img src="{{asset('public/assets/images/new/ghostwriting-services/icon-6.png')}}" alt="">
                                Book Audio & Narration
                            </div>
                            <div class="p-body">
                                <p>While it may look like an add-on, a lot of genres do require the books to be in audio
                                    formats. As
                                    soon as you have the basic book completed, you can have a professional narrate your book
                                    for you,
                                    which is sold in combos with eBooks, paperbacks, and hardcovers. Even when a client may
                                    not read
                                    your book, they will always want to listen to it when driving to work or during their
                                    leisure time.
                                    Audio Books combined with Videos have become the need of time, especially when kids are
                                    homeschooled, and people have become a bit too busy to take out time and actually read a
                                    book.</p>
                                <p>This is also a way to tap a wider audience who may not spend time reading a book but
                                    would love to
                                    listen to it. <br>

                                    How do you generate more sales on these?</p>
                            </div>
                        </div>
                        <div class="ghostwriting-process-item" data-background="process-7">
                            <div class="p-head">
                                <img src="{{asset('public/assets/images/new/ghostwriting-services/icon-7.png')}}" alt="">
                                Online Presence
                            </div>
                            <div class="p-body">
                                <p>Get your own Author’s website where your readers can get to know you and the latest
                                    happenings in
                                    your life. An author’s website helps you build community, interact with it, and above
                                    all, be able
                                    to control the revenue that you generate off your book(s) or any other product that you
                                    may want to
                                    sell.

                                </p>
                            </div>
                        </div>
                        <div class="ghostwriting-process-item" data-background="process-8">
                            <div class="p-head">
                                <img src="{{asset('public/assets/images/new/ghostwriting-services/icon-8.png')}}" alt="">
                                Book Marketing <span> (Pre-launch & Post Launch) </span>
                            </div>
                            <div class="p-body">
                                <p>If you are not already an established celebrity, you will have to get the word out about
                                    your
                                    masterpiece. Content is the king, and it can make you one as well. If you have not yet
                                    published
                                    your book, sign up for a book marketing package that covers pre and post-launch
                                    marketing that can
                                    give you a projected return that will help you recover your investment and do a
                                    full-fledged
                                    business out of it.</p>
                                <p>Talk to our representatives now and see what our marketing packages entail.</p>
                                <p>It is always recommended to have 1 month of pre-launch and 5 months of post-launch
                                    marketing
                                    campaign set up.
                                </p>
                            </div>
                        </div>
                        <div class="ghostwriting-process-item" data-background="process-9">
                            <div class="p-head">
                                <img src="{{asset('public/assets/images/new/ghostwriting-services/icon-9.png')}}" alt="">
                                Book Marketing (Post Launch)
                            </div>
                            <div class="p-body">
                                <p>If you are not already an established celebrity, you will have to get the word out about
                                    your
                                    masterpiece. Content is the king, and it can make you one as well. If you have not yet
                                    published
                                    your book, sign up for a book marketing package that covers pre and post-launch
                                    marketing that can
                                    give you a projected return that will help you recover your investment and do a
                                    full-fledged
                                    business out of it.</p>
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
                            <a href="tel:+12022212733" class="btn btn-theme tra-black-hover ">Call Us <span>+1 (844)
                                    200-1660</span>
                            </a>
                            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn ">Live Chat
                                with Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="without-bg-service">
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
                                                <p>Carefully chosen words to breathe life into a raw idea. Have a
                                                    ghostwriter write your story
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
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-1.png')}}"
                                                            alt="">
                                                        <div>
                                                            <h3>Ghostwriting</h3>
                                                            <p>Carefully chosen words to breathe life into a raw idea.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p>Do you have an idea that you’d like to fashion into words? Have a
                                                        life story to tell?
                                                        Want
                                                        to
                                                        shed light on a specific topic but do not have the time to write it
                                                        yourself?</p>
                                                    <a href="ghostwriting-services.html" class="outline-btn btn">Explore
                                                        More</a>
                                                    <div class="btn-wrap-group text-center">
                                                        <a href="javascript:;"
                                                            class="btn btn-theme tra-black-hover quotePopup ">Contact us
                                                            now
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                            to us
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                            data-img="{{asset('public/assets/images/services-popup/1.jpg')}}" alt="">
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
                                                    just perfect, but a second opinion can help you target problem areas you
                                                    did not know
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
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-1.png')}}"
                                                            alt="">
                                                        <div>
                                                            <h3>Ghost Editing</h3>
                                                            <p>Perfection is a myth, but we can bring your script very close
                                                                to it.

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p>Our proofreaders and editors have years of industry experience and
                                                        understand how a book
                                                        has to be contextually corrected rather than “just” corrected.</p>
                                                    <a href="book-editing.html" class="outline-btn btn">Explore More</a>
                                                    <div class="btn-wrap-group text-center">
                                                        <a href="javascript:;"
                                                            class="btn btn-theme tra-black-hover quotePopup ">Contact us
                                                            now
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                            to us
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                            data-img="{{asset('public/assets/images/services-popup/2.jpg')}}" alt="">
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
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-7.png')}}"
                                                            alt="">
                                                        <div>
                                                            <h3>Cover Designing</h3>
                                                            <p>People will judge a book by its cover.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p> You should have a good one. Let a ghost book cover
                                                        designer make your book a literal piece of art.</p>
                                                    <a href="book-cover-design.html" class="outline-btn btn">Explore
                                                        More</a>
                                                    <div class="btn-wrap-group text-center">
                                                        <a href="javascript:;"
                                                            class="btn btn-theme tra-black-hover quotePopup ">Contact us
                                                            now
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                            to us
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                            data-img="{{asset('public/assets/images/services-popup/3.jpg')}}" alt="">
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
                                                <p>How would people know about this masterpiece unless it is published?
                                                    Target virtual book
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
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-3.png')}}"
                                                            alt="">
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
                                                            class="btn btn-theme tra-black-hover quotePopup ">Contact us
                                                            now
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                            to us
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                            data-img="{{asset('public/assets/images/services-popup/4.jpg')}}" alt="">
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
                                                <p>How would someone buy your book if they do not know that such a
                                                    masterpiece has been
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
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-6.png')}}"
                                                            alt="">
                                                        <div>
                                                            <h3>Book Marketing</h3>
                                                            <p>How would someone buy your book if they do not know that such
                                                                a masterpiece
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p>has been published? Let us market it for you.
                                                        Take help from book marketing experts and launch your book as the
                                                        next big thing.</p>
                                                    <a href="book-marketing.html" class="outline-btn btn">Explore More</a>
                                                    <div class="btn-wrap-group text-center">
                                                        <a href="javascript:;"
                                                            class="btn btn-theme tra-black-hover quotePopup ">Contact us
                                                            now
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                            to us
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                            data-img="{{asset('public/assets/images/services-popup/5.jpg')}}" alt="">
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
                                                <p>Pictures speak louder than words. Let us bring the world in your
                                                    imagination to reality via
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
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-10.png')}}"
                                                            alt="">
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
                                                            class="btn btn-theme tra-black-hover quotePopup ">Contact us
                                                            now
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                            to us
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                            data-img="{{asset('public/assets/images/services-popup/6.jpg')}}" alt="">
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
                                                <p>We have an in-house team of native narrators whose voice is captivating
                                                    and in line with
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
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-5.png')}}"
                                                            alt="">
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
                                                            class="btn btn-theme tra-black-hover quotePopup ">Contact us
                                                            now
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                            to us
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                            data-img="{{asset('public/assets/images/services-popup/7.jpg')}}" alt="">
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
                                                <p> If you are not someone who would want to create a lot of video content,
                                                    you can go with a
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
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-8.png')}}"
                                                            alt="">
                                                        <div>
                                                            <h3>Video Book Trailer</h3>
                                                            <p>If you are not someone who would want to create a lot of
                                                                video content
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p>If you are not someone who would want to create a lot of video
                                                        content, you can go with a
                                                        book
                                                        trailer that is a glimpse of your book</p>
                                                    <a href="book-video.html" class="outline-btn btn">Explore More</a>
                                                    <div class="btn-wrap-group text-center">
                                                        <a href="javascript:;"
                                                            class="btn btn-theme tra-black-hover quotePopup ">Contact us
                                                            now
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                            to us
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                            data-img="{{asset('public/assets/images/services-popup/8.jpg')}}" alt="">
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
                                                    want to establish yourself as an author, reach your readers via a
                                                    website.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="services-item-hover-wrap">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="services-item-in">
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/new/s-4.png')}}"
                                                            alt="">
                                                        <div>
                                                            <h3>Website Design</h3>
                                                            <p>Someone who has a book to publish would also need a website
                                                                that is their virtual
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
                                                            class="btn btn-theme tra-black-hover quotePopup ">Contact us
                                                            now
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="btn btn-tra-black theme-hover last-link open_chat_btn ">Talk
                                                            to us
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="{{asset('public/assets/images/blank-img.png')}}"
                                                            data-img="{{asset('public/assets/images/services-popup/9.jpg')}}" alt="">
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
        </div>
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
                                            <p class="p-md grey-color">“In the digital world, it is quite challenging to
                                                get people to
                                                follow through all the things they promise to deliver. This is the most
                                                captivating quality of
                                                U.S. Ghostwriting team – They always deliver what they promise, 99.9%
                                                response and
                                                extraordinary quality of content. Thank you U.S. Ghostwriting team you guys
                                                made my dream come
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
                                            <p class="p-md grey-color">“My experience so far has been great as they have
                                                managed to compose
                                                a bestseller under my name and that one book has made a major impact on my
                                                writing career. I
                                                am looking forward toward two of my ongoing projects that will be published
                                                soon.”
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
                                            <p class="p-md grey-color">“Working with U.S. Ghostwriting was just incredible.
                                                Loved their
                                                professionalism and guided me in the best way possible. They let me know the
                                                rights and wrongs
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
                                            <p class="p-md grey-color">“U.S. Ghostwriting have the most reliable,
                                                dependable and hardworking
                                                writers. I love working with them: i will be using their service again and
                                                again and again!
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
                                            <p class="p-md grey-color">“My Book was edited and proofread by U.S.
                                                Ghostwriting and it was
                                                really
                                                satisfying after seeing my published book. Their Customer support was
                                                awesome. I Highly
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
                                            <p class="p-md grey-color">“Our book came out absolutely perfect. I adore it so
                                                much! Thank you
                                                so
                                                much for all the hard work you did to put my students works into something
                                                parents can cherish
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
                                            <p class="p-md grey-color">“The books are amazing! My kids were really excited
                                                to receive their
                                                books. They were even more proud of their work when they saw that it was
                                                published.” </p>
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
                                            <p class="p-md grey-color">“The book was absolutely great! My parents and
                                                students really loved
                                                the work that was done by your publishing company. They were happy with what
                                                they paid for and
                                                the awesome work you put into the book. <br>
                                                Thank you so much for the wonderful work with helping make our class book a
                                                great success.”
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
                            <a target="_blank" href="https://www.trustpilot.com/review/Script Publisher.com">
                                <img src="{{asset('public/assets/images/blank-img.png')}}" data-img="{{asset('public/assets/images/trustpilot.png')}}" class="img-fluid"
                                    alt="">
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
