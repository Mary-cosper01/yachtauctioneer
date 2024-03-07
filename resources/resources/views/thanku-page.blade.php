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
            style="background-image: url({{url('/public/assets/images/contactpg-banner.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="hero-txt text-center white-color">
                            <!-- Title -->
                            <h2 class="h2-sm color-white">Thank You
                            </h2>
                            <p class="detail fs-large mtpx-10 fc-white pr-10 text-reset">Your contact details is saved. We will contact u soon.</p>
                        </div>
                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div>

    {{-- <section class="hero-banner d-table w-100 inner-banner" style="background-image:url({{url('/public/assets/images/contactpg-banner.jpg')}})">
        <div class="d-table-cell va-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <h1 class="title fc-white lh-normal">Thank You</h1>
						<p class="detail fs-large mtpx-10 fc-white pr-10">Your contact details is saved. We will contact u soon.</p>
                    </div>
                </div>
            </div>
        </div>
  
    </section> --}}
    @include('layout.footer-contact')
</div>
@endsection
