@extends('visitor.layouts.app')
@section('title', 'Home')
@section('content')
    <!-- model -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h2 class="modal-title text-white" id="modalLabel">SEND ENQUIRY</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-danger text-white">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer bg-danger text-white">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save </button>
                </div>
            </div>
        </div>
    </div>
    <!-- model -->
    <!-- slider -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/18.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/19.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/20.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slider -->
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6">
                <h2>About Ra candra </h2>
                <p class="fs-4 text-justify"> Ra candra has begun with a vision to lead the society to a Healthier
                    lifestyle. We have
                    covered a
                    wide range of
                    products in
                    various forms viz. Tablets, Capsules, Liquid – Syrup, Suspension and Drops, Protein Powder packed in
                    Sachets and tins.
                    We are particular about the cleanliness of our manufacturing area and therefore we strictly maintain
                    ISO and GMP
                    standards. With a facility of over 10000 sq ft, we are a visionary and ambitious manufacturing
                    company.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/24.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-4 pb-4">
                <div class="card card-approvals">
                    <div class="icon">🗸</div>
                    <div class="title">APPROVALS</div>
                    <a href="#" class="view-more">View More »</a>
                </div>
            </div>
            <div class="col-md-4 pb-4">
                <div class="card card-products">
                    <div class="icon">🌿</div>
                    <div class="title">PRODUCTS</div>
                    <a href="#" class="view-more">View More »</a>
                </div>
            </div>
            <div class="col-md-4 pb-4">
                <div class="card card-gallery">
                    <div class="icon">🖼️</div>
                    <div class="title">GALLERY</div>
                    <a href="#" class="view-more">View More »</a>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial -->
    <div class="testimonials-section">
        <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav" />
        <input type="radio" name="slider" title="slide2" class="slider__nav" />
        <input type="radio" name="slider" title="slide3" class="slider__nav" />
        <input type="radio" name="slider" title="slide4" class="slider__nav" />
        <input type="radio" name="slider" title="slide5" class="slider__nav" />
        <div class="slider__inner">
            <div class="slider__contents">
                <quote>&rdquo;</quote>
                <p class="slider__txt">We love you guys. It's easy to order, we get shipments quick and my rep solves
                    tough
                    problems the right way. We get answers that work.</p>
                <h2 class="slider__caption">Rhonda | NylonCraft</h2>
            </div>
            <div class="slider__contents">
                <quote>&rdquo;</quote>
                <p class="slider__txt">You all bend over backwards to get it done. Inside sales and the Account Managers
                    are
                    great! It's your service...you all know that it's not just about taking orders it's about service.
                    Why
                    do we choose you guys - your people, your prices, you're quick and you have a ton of technical
                    knowledge.</p>
                <h2 class="slider__caption">Jared | Rexam</h2>
            </div>
            <div class="slider__contents">
                <quote>&rdquo;</quote>
                <p class="slider__txt">It's the long-term relationship we have with Proheat that keeps me calling you
                    guys.
                    I trust you, you're quick, and everybody I've ever spoken to there are all great people. Our CEO,
                    Bill,
                    talks about building relationships. That's exactly what Proheat does, and I couldn't be happier.</p>
                <h2 class="slider__caption">Chris | C&M Fine Pack</h2>
            </div>
            <div class="slider__contents">
                <quote>&rdquo;</quote>
                <p class="slider__txt">You answer my questions, always takes care of problems, and I never have a
                    hassle.
                </p>
                <h2 class="slider__caption">Rex | LNP Engineering Plastics</h2>
            </div>
            <div class="slider__contents">
                <quote>&rdquo;</quote>
                <p class="slider__txt">Proheat's staff are all so friendly and everybody goes above and beyond. Everyone
                    is
                    courteous, everything is quick and you get us what we need. I have to shop around for everything and
                    we
                    ALWAYS come back to Proheat.</p>
                <h2 class="slider__caption">Darlene | Russel Stover</h2>
            </div>
        </div>
    </div>
    <!-- testimonial -->
@endsection
