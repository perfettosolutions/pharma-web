<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        R A Candra Pharma || @yield('title')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <style>
        *:before,
        *:after {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
        }

        .testimonials-section {
            background: #fff;
            height: 600px;
            position: relative;
            overflow: hidden;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-flow: row nowrap;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-align: end;
            -webkit-align-items: flex-end;
            -ms-flex-align: end;
            align-items: flex-end;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .slider__nav {
            width: 12px;
            height: 12px;
            margin: 80px 12px;
            border-radius: 0%;
            z-index: 10;
            outline: 6px solid #ccc;
            outline-offset: -6px;
            box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
            cursor: pointer;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .slider__nav:checked {
            -webkit-animation: check 0.4s linear forwards;
            animation: check 0.4s linear forwards;
        }

        .slider__nav:checked:nth-of-type(1)~.slider__inner {
            left: 0%;
        }

        .slider__nav:checked:nth-of-type(2)~.slider__inner {
            left: -100%;
        }

        .slider__nav:checked:nth-of-type(3)~.slider__inner {
            left: -200%;
        }

        .slider__nav:checked:nth-of-type(4)~.slider__inner {
            left: -300%;
        }

        .slider__nav:checked:nth-of-type(5)~.slider__inner {
            left: -400%;
        }

        .slider__inner {
            position: absolute;
            top: 80px;
            left: 0;
            width: 500%;
            height: auto;
            -webkit-transition: left 0.4s;
            transition: left 0.4s;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-flow: row nowrap;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
        }

        .slider__contents {
            height: 100%;
            text-align: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-flex-flow: column nowrap;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .slider__caption {
            font-size: 14px;
            color: #111;
            opacity: .5;
            font-family: 'Roboto';
            font-weight: bold;
        }

        .slider__txt {
            font-size: 22px;
            font-weight: bold;
            font-family: 'Roboto';
            line-height: 1.7;
            color: #111;
            margin-top: -20px;
            margin-bottom: 20px;
            max-width: 750px;
        }

        quote {
            font-family: 'Arial';
            font-weight: bold;
            font-size: 100px;
            color: #ec2027;
            margin-bottom: 0;
        }

        @-webkit-keyframes check {
            50% {
                outline-color: #333;
                box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
            }

            100% {
                outline-color: #333;
                box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
            }
        }

        @keyframes check {
            50% {
                outline-color: #333;
                box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
            }

            100% {
                outline-color: #333;
                box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
            }
        }

        /* Hide the promoting section on screens smaller than 768px */
        @media (max-width: 767px) {
            .promoting-section {
                display: none;
            }
        }
    </style>

</head>

<body>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/RA_CANDRA_PHARMA_LOGO.png" alt="" width="150">
                </div>
                <div class="col-md-6 promoting-section">
                    <h1>Promoting Healthy Lifestyle...</h1>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-danger text-white">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('production') }}">Production</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('product') }}">Product </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('profile') }}">Company profile</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                    </li> --}}

                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-4">
                    <h3>Ra Candra Pharma.</h3>
                    <p>Promoting Healthy Lifestyle...</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestias earum necessitatibus.
                        Veritatis dolores ratione vel et accusamus voluptas, eveniet, maiores exercitationem
                        voluptatem
                        quod consequatur culpa fugit? Porro, assumenda provident!</p>
                    <a href="#" class="more-about-us">More About Us</a>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>Production</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Quality management system</a></li>
                        <li><a href="#" class="text-white">QA/QC</a></li>
                        <li><a href="#" class="text-white">Manufacturing Facility</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Contact Us</h4>

                    <p>

                        marketing@racandrapharma.com

                    </p>
                    <p>
                        Address

                    </p>
                    <p>
                        10, XCELON INDUSTRIAL PARK-1,<br /> BEHIND INTAS PHARMA,<br /> VASNA-CHACHARWADI,
                        <br />AHMEDABAD - 382213
                    </p>

                </div>
            </div>

        </div>
        <div class="footer-bottom">
            <p>Copyright © {{ date('Y') }} All Rights Reserved | Develop by - <a
                    href="https://flipcodesolutions.com/" target="_blank" class="text-white">Flipcode
                    solutions</a>
            </p>
        </div>
    </footer>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        // Initialize the carousel
        const testimonialCarousel = new bootstrap.Carousel('#testimonialCarousel', {
            interval: 5000, // Slide every 5 seconds
            ride: 'carousel'
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
                keyboard: false
            });
            myModal.show();
        });
    </script>
</body>

</html>
