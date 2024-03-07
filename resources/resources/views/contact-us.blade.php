@extends('layout.main')
@section('content')
    <style>
        .wsmenu>.wsmenu-list>li>a {
            color: black !important;
        }
        .footer-contact{
            display: none !important;
        }

    </style>
    <div id="butter">
        <div id="about-page" class="page-hero-section division new-inner-banner"
            style="background-image: url({{asset("public/assets/images/new/contact-banner.jpg")}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="hero-txt text-center white-color">
                            <!-- Title -->
                            <h2 class="h2-sm color-white">Contact Us
                            </h2>
                        </div>
                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div>

        <section class="contact-section pt-20 pb-80 contact-page-section">
            <div class="container">
                <div class="section-title mb-20">
                    <!-- Title -->
                    <h2 class="h2-xs deepgrey-color">Need Help? Say Hello</h2>
                    <p>Our support team is ever ready to provide <span> answers </span> to all your questions! Let's tell
                        your
                        story to the world!</p>
                    <!-- Text -->
                </div>
                <form class="leadform lfcta" method="POST" data-source="popup" data-fid="go76FMp3ljTC2siP2R0leSuTEMil12T6IFd5vdiS" action="{{url('/application-process')}}">
                    {{csrf_field()}} 
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control c_field" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control c_field" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control c_field" name="phone" placeholder="Phone">
                        </div>
                        <div class="col-md-12">
                            <textarea name="meassage" id="" cols="30" rows="5" class="form-control c_field"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit"
                                class="c_btn btn_green lfbtn btn btn-tra-black theme-hover ">Submit</button>
                        </div>
                        <p class="success_msg lfmsg d-none">Your form has been submitted</p>
                    </div>
                </form>
                <div class="row bottom">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <!-- Title -->
                            <h2 class="h2-xs deepgrey-color">Location</h2>
                            <a href="javascript:;">
                                5415 SUGRALOAF PKWY STE 1108 LAWRENCEVILLE, GA 30043
                            </a>
                            <!-- Text -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <!-- Title -->
                            <h2 class="h2-xs deepgrey-color">Contact Info</h2>
                            <a href="tel:+14697887107">
                                Phone: <span> +1(470) 407-7571</span>
                            </a>
                            <a
                                href="mailto:info@scriptpublishers.com">
                                Email: <span class="info@scriptpublishers.com"
                                    data-cfemail="d0a3a5a0a0bfa2a490a5a3b7b8bfa3a4a7a2b9a4b9beb7feb3bfbd">info@scriptpublishers.com</span>
                            </a>
                            <!-- Text -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('layout.footer-contact')


    </div> <!-- END PAGE CONTENT -->
@endsection
