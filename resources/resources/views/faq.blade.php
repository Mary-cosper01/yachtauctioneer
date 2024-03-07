@extends('layout.main')
@section('content')
    <style>
        .wsmenu>.wsmenu-list>li>a {
            color: black !important;
        }

    </style>
<div id="butter">
    <div id="about-page" class="page-hero-section division" style="background-image: url({{asset('public/assets/images/pricing-banner.jpg')}});">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="hero-txt text-center white-color">
              <!-- Title -->
              <h2 class="h2-sm">Frequently Asked Questions</h2>
            </div>
          </div>
        </div> <!-- End row -->
      </div> <!-- End container -->
    </div>


    <section class="faq-section">
      <div class="container">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true"
                  aria-controls="faq1">
                  What is meant by ghostwriting?

                </button>
              </h5>
            </div>

            <div id="faq1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                Ghostwriting allows aspiring writers or authors who are too busy in their lives to turn
                their stories and creative ideas into full-fledged books, reflecting their inner voice
                and thoughts.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq2"
                  aria-expanded="false" aria-controls="faq2">
                  Why should you hire a ghostwriter?

                </button>
              </h5>
            </div>
            <div id="faq2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                Busy days and lesser time are the foremost reasons that the ghostwriting industry has
                boomed globally. An experienced ghostwriter knows what exactly a book would need to be
                attributed as one of the best pieces of writing. We aspire to make your manuscript one
                of those.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq3"
                  aria-expanded="false" aria-controls="faq3">
                  How long does a book, in general, take to complete?
                </button>
              </h5>
            </div>
            <div id="faq3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                A book may be completed anywhere between 1 to 6 months, depending on how responsive the
                client is and the number of pages they require.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq4"
                  aria-expanded="false" aria-controls="faq4">
                  Are the proofreaders and editors experienced?

                </button>
              </h5>
            </div>
            <div id="faq4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                We have a rigorous training program even for our most experienced resources, so they stay on top of
                their game. Rest assured.

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq5"
                  aria-expanded="false" aria-controls="faq5">
                  I cannot pay the entire amount upfront. Would I have any options?

                </button>
              </h5>
            </div>
            <div id="faq5" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                You can get in touch with our Sales Strategists to better guide you regarding partial payment options
                and discount coupons that are up and running.

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq6"
                  aria-expanded="false" aria-controls="faq6">
                  Will I be charged for revisions?

                </button>
              </h5>
            </div>
            <div id="faq6" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Until you have not signed the end of services agreement, we shall provide unlimited revisions.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq7"
                  aria-expanded="false" aria-controls="faq7">
                  Who has ownership of this work?
                </button>
              </h5>
            </div>
            <div id="faq7" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                You will have 100% ownership of your work.

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq8"
                  aria-expanded="false" aria-controls="faq8">
                  When should book marketing start?
                </button>
              </h5>
            </div>
            <div id="faq8" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Depending on your timeline, the book marketing will start 1 to 3 months prior to the book launch.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq9"
                  aria-expanded="false" aria-controls="faq9">
                  I already have a manuscript. What is the next step?

                </button>
              </h5>
            </div>
            <div id="faq9" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                If you have a manuscript ready, we provide editing, proofreading, publishing, and marketing services.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq10"
                  aria-expanded="false" aria-controls="faq10">
                  How can an author's website help me?

                </button>
              </h5>
            </div>
            <div id="faq10" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                These are the times that require an individual to have an online presence, especially if you have
                authored a book. Having an author's website allows you to brand yourself and introduce your book(s) to
                the world. Also, an author's website helps you in generating passive revenue.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq11"
                  aria-expanded="false" aria-controls="faq11">
                  Is ghostwriting a crime?
                </button>
              </h5>
            </div>
            <div id="faq11" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Ghostwriting is not a crime as it doesn't defy any laws. It's an acceptable practice as long as the
                ghostwriter does not plagiarize the client's work.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @include('layout.footer-contact')


  </div> <!-- END PAGE CONTENT -->
  @endsection