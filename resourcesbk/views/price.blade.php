@extends('layout.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="inner-cont" aos="fade-up" aos-duration="1000">
                <!--<h1>Lorem Ipsum is simply dummy text of the printing</h1>-->
                <!--<h2>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</h2>-->
                <!--<p>Lorem Ipsum is simply dummy text</p>-->
                <!--<button class="btn various" data-fancybox="" data-src="#popupform"><a href="javascript:;">Let's Get Started</a></button>-->
            </div>
        </div>
    </div>
</div>
</section>
<section class="writing-row">
<div class="container">
    <div class="writing-tabs-row">
        <h3 class="writing-head" aos="fade-up" aos-duration="1500">Our Services</h3>
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" aos="fade-right" aos-duration="1500">
                <button class="nav-link active" id="v-pills-ghost-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ghost" type="button" role="tab" aria-controls="v-pills-ghost" aria-selected="true">Ghostwriting</button>
                <button class="nav-link" id="v-pills-online-tab" data-bs-toggle="pill" data-bs-target="#v-pills-online" type="button" role="tab" aria-controls="v-pills-online" aria-selected="false">Online Book Publication</button>
                <button class="nav-link" id="v-pills-branding-tab" data-bs-toggle="pill" data-bs-target="#v-pills-branding  " type="button" role="tab" aria-controls="v-pills-branding" aria-selected="false">Branding and Publicity</button>
                <button class="nav-link" id="v-pills-video-tab" data-bs-toggle="pill" data-bs-target="#v-pills-video" type="button" role="tab" aria-controls="v-pills-video" aria-selected="false">Video Book Trailers</button>
                <button class="nav-link" id="v-pills-web-tab" data-bs-toggle="pill" data-bs-target="#v-pills-web" type="button" role="tab" aria-controls="v-pills-web" aria-selected="false">Web Design and SEO</button>
                <button class="nav-link" id="v-pills-audio-tab" data-bs-toggle="pill" data-bs-target="#v-pills-audio" type="button" role="tab" aria-controls="v-pills-audio" aria-selected="false">Audio Books</button>
                <button class="nav-link" id="v-pills-cover-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cover" type="button" role="tab" aria-controls="v-pills-cover" aria-selected="false">Cover Design and Typesetting</button>
                <button class="nav-link" id="v-pills-editing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-editing" type="button" role="tab" aria-controls="v-pills-editing" aria-selected="false">Editing</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent" aos="fade-left" aos-duration="1500">
            <div class="tab-pane fade show active" id="v-pills-ghost" role="tabpanel" aria-labelledby="v-pills-ghost-tab">
                <div class="writing-sec">
                    <h2>Ghostwriting Service</h2>
                    <p>Our podium of professional ghostwriting services offers you with an array of experienced ghostwriters, editors and publishing eccentrics who will together, transform your idea into a splendid yet commendable book.</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="writing-pkg">
                                <h3>Standard</h3>
                                <ul>
                                    <li>The chief ghostwriter will be a published author.</li>
                                    <li>Procedure includes a detailed strategy building and implementing session.</li>
                                    <li>The team will comprise of a chief editor who will provide editing and consultation throughout the planning and writing process.</li>
                                </ul>
                                <h4>$10,500 – $15,500</h4>
                                <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="writing-pkg">
                                <h3>Premium</h3>
                                <ul>
                                    <li>The chief ghostwriter will be a bestseller or an extensively published author.</li>
                                    <li>Procedure includes detailed strategy building and implementing session(s).</li>
                                    <li>The team will comprise of a chief editor who will provide editing, consultation and recommendations throughout the planning and writing process.</li>
                                </ul>
                                <h4>$15,000 – $20,000</h4>
                                <p>(Approx. $230/page)</p>
                                <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-online" role="tabpanel" aria-labelledby="v-pills-online-tab">
                <div class="writing-sec">
                    <h2>Online Book Publication</h2>
                    <p>Our e-book publication service assures to manage and tackle all the intricacies and complexities involved in publishing your book, ensuring that your book is easily and widely available to the readers around the globe</p>
                    <div class="writing-pkg">
                        <h3>Description</h3>
                        <ul>
                            <li>Our e-book publishing service will ensure to make your book accessible around the globe that hits the bestselling spots, bringing you in the potential bestselling author rankings.</li>
                            <li>We assure to publish your book on the most prominent and renowned platforms such as Amazon.com, CreateSpace and Amazon Kindle.</li>
                        </ul>
                        <h4>$750.00</h4>
                        <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-branding" role="tabpanel" aria-labelledby="v-pills-branding-tab">
                <div class="writing-sec">
                    <h2>Branding and Publicity Service</h2>
                    <p>Our branding and publicity service through digital marketing will use the most distinct, innovative and eye-catching strategies, ensuring that your book grabs a major chunk of the market. A unique, powerful yet an uncomplicated branding and publicity for your book will be guaranteed.</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="writing-pkg">
                                <h3>Standard</h3>
                                <ul>
                                    <li>Basic marketing strategies will be implemented.</li>
                                    <li>Promotion of your book on various social media platforms.</li>
                                </ul>
                                <h4>$7,000</h4>
                                <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="writing-pkg">
                                <h3>Premium</h3>
                                <ul>
                                    <li>Advanced strategic marketing methods will be implemented.</li>
                                    <li>Extensive branding, publicizing, wide digital exposure and promotion of social media platforms.</li>
                                </ul>
                                <h4>$13,000</h4>
                                <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-video" role="tabpanel" aria-labelledby="v-pills-video-tab">
                <div class="writing-sec">
                    <h2>Video Book Trailers Service</h2>
                    <p>Our podium of professional ghostwriting services offers you with an array of experienced ghostwriters, editors and publishing eccentrics who will together, transform your idea into a splendid yet commendable book.</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="writing-pkg">
                                <h3>Standard</h3>
                                <ul>
                                    <li>Designing, production and running of an engaging video book trailer.</li>
                                    <li>High quality images along with HD footage.</li>
                                </ul>
                                <h4>$1,999.00</h4>
                                <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="writing-pkg">
                                <h3>Premium</h3>
                                <ul>
                                    <li>Designing, production and adverting of a unique and appealing video book trailer.</li>
                                    <li>Trailer will be in HD footage completely.</li>
                                    <li>Consultation sessions with the client to produce and deliver optimum result.</li>
                                </ul>
                                <h4>$3,499.00</h4>
                                <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-web" role="tabpanel" aria-labelledby="v-pills-web-tab">
                <div class="writing-sec">
                    <h2>Web Design and SEO Service</h2>
                    <p>Our web-design and SEO team will work collaboratively to produce a website for your book that will draw and attract more users to visit the website. Easily navigable web-design, along with strategic placement of strong SEO into the web content, will improve the usability and ranking of your book’s website.</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="writing-pkg">
                                <h3>Standard</h3>
                                <ul>
                                    <li>Easily navigable web-design by expert web-designer.</li>
                                    <li>Strong placement of SEO into the web content.</li>
                                </ul>
                                <h4>$3,499 – $4,999</h4>
                                <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="writing-pkg">
                                <h3>Premium</h3>
                                <ul>
                                    <li>Easily navigable web-design with unique and attractive layout by specialist web-designer.</li>
                                    <li>Strong placement of SEO into the web content by expert SEO and web content writers.</li>
                                    <li>Ensuring high ranking on renowned search engines such as Google, Bing, Yahoo etc.</li>
                                </ul>
                                <h4>$19,500 – $25,500</h4>
                                <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-audio" role="tabpanel" aria-labelledby="v-pills-audio-tab">
                <div class="writing-sec">
                    <h2>Audio Book Service</h2>
                    <p>As there a drastic increase in the use of audio books, hence, our audio book service will make your book accessible, entertaining and engaging for the listeners. Despite the fact, that audio books are a mere choice of personal preference, they still allow the author to make hearty connections with the audience, forming heart-felt associations.</p>
                    <div class="writing-pkg">
                        <h3>Description</h3>
                        <ul>
                            <li>High quality audio book with thrilling and engaging sound effects.</li>
                            <li>Lacking any malfunctions or glitches.</li>
                            <li>Collaborative work of our team and client.</li>
                        </ul>
                        <h4>$4,499</h4>
                        <h5>Prices are subject to change, depending on the duration and use of sound effects.</h5>
                        <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                    </div>
                </div> 
            </div>
            <div class="tab-pane fade" id="v-pills-cover" role="tabpanel" aria-labelledby="v-pills-cover-tab">
                <div class="writing-sec">
                    <h2>Cover Design and Typesetting Service</h2>
                    <p>The importance of a good cover design can be explained by the fact that even before the reader opens the book, a cover design will make that choice easier. A good cover design will attract the reader to approach the book rack, therefore our team of designers works hard to achieve the utmost demand for your book by incorporating an attractive cover design and a beautifully arranged typesetting.</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="writing-pkg">
                                <h3>Standard</h3>
                                <ul>
                                    <li>Research by our team of creative designers’ to provide maximum different designs.</li>
                                    <li>Professional typesetting.</li>
                                    <li>Collaborative work of our team and client</li>
                                </ul>
                                <h4>$599.00</h4>
                                <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="writing-pkg">
                                <h3>Premium</h3>
                                <ul>
                                    <li>Extensive research by our team of creative designers’ to provide maximum different designs and concepts.</li>
                                    <li>Unique and pioneering cover design.</li>
                                    <li>Professional and organized typesetting, skillfully achieved result.</li>
                                    <li>Collaborative work of our team and client.</li>
                                </ul>
                                <h4>$999.00</h4>
                                <button class="btn various"  data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-editing" role="tabpanel" aria-labelledby="v-pills-editing-tab">
                <div class="writing-sec">
                    <h2>Editing</h2>
                    <p>A change of perspective is all it takes to bring a manuscript to life. You wouldn’t want to risk your first impression with bad grammar or poor sentence structures. Don’t worry; we are here to help. Our professional editors and proofreaders will check the grammar, verify the spellings and work on word choices, consistency, sentence structure, and style. Transform your draft from fine to flawless with us.</p>
                    <div class="writing-pkg">
                        <h4>$1,399.00</h4>
                        <h5>Prices may vary in-case of any hindrances during the copyrighting process or any changes in official fee structure.</h5>
                        <button class="btn various" data-fancybox="" data-src="#popupform"><a href="javascript:;">Request a Quote</a></button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection