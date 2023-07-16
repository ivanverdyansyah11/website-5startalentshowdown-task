<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5 Star Talent Showdown | Talent Contest</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg py-3 position-absolute" style="width: 100%; z-index: 9999;">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="#home">
                <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" class="img-fluid" alt="Logo Brand">
            </a>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link py-2 py-lg-0 px-lg-3 active" href="">Home</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="">How to Participate</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="">About Us</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="">Judging Criteria</a>
                </div>
            </div>
            <a href="#" class="button-secondary d-none d-lg-flex align-items-center gap-2">
                Contact Us
                <div class="arrow-icon"></div>
            </a>
        </div>
    </nav>
    {{-- END NAVBAR --}}

    <main>
        {{-- HERO SECTION --}}
        <section class="hero" id="home">
            <div class="container position-relative" style="height: 100%">
                <div class="hero-content d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-xl-6 col-xxl-7 pe-xxl-5 pe-xxl-0">
                            <span class="subtitle d-inline-block" style="margin-bottom: 14px !important;">Showcasing
                                Talent, Inspiring
                                Creativity</span>
                            <h1 class="headline" style="margin-bottom: 26px !important; padding-right: 24px;">Unleash
                                Your Potential, Be the
                                Star You're
                                Meant to Be</h1>
                            <div class="wrapper-paragraph d-flex flex-column gap-2 pe-xxl-5"
                                style="margin-bottom: 36px !important;">
                                <p class="paragraph">Welcome to the 5 Star Talent Showdown, where dreams come to life
                                    and talents are celebrated. Join us for an extraordinary journey of self-expression,
                                    creativity, and unforgettable performances.</p>
                                <p class="paragraph">Showcase your unique skills and passion in front of a captivated
                                    audience, and let your talent take center stage. Are you ready to make your mark and
                                    leave a lasting impression? It's time to step into the spotlight and embrace your
                                    moment of glory at the 5 Star Talent Showdown!</p>
                            </div>
                            <div class="wrapper-button d-flex gap-2 align-items-md-center flex-column flex-md-row">
                                <a href="#" class="button-default">Introduce Showdown</a>
                                <a href="#" class="button-secondary d-flex align-items-center gap-2">
                                    Get Started
                                    <div class="arrow-icon"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-6 col-xxl-5 ps-lg-5 ps-xxl-0 d-none d-lg-flex justify-content-end">
                            <img src="{{ asset('assets/img/banner/hero-banner.svg') }}" class="img-fluid Hero Banner"
                                alt="Hero Banner">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END HERO SECTION --}}


        <div class="container">
            {{-- STEP SECTION --}}
            <section class="step section-gap" id="step">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <span class="subtitle d-inline-block" style="margin-bottom: 14px !important;">Step-by-Step Guide
                            to Showcasing Your Talent</span>
                        <h2 class="title" style="margin-bottom: 18px !important; padding-right: 24px;">Step into the
                            Spotlight, Show the World Your Talent</h2>
                        <p class="paragraph">Welcome to the How to Participate
                            section!
                            Here, we guide you through the
                            steps to showcase your extraordinary skills and be a part of our talent contest. From
                            auditions to submissions.</p>
                        <a href="#" class="button-default d-none d-lg-flex align-items-center gap-2"
                            style="margin-top: 36px !important;">
                            Get Started
                            <div class="arrow-icon">
                            </div>
                        </a>
                    </div>
                    <div class="offset-xl-1 col-lg-7 col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-default">
                                    <span class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 18px;">1</span>
                                    <h6 style="margin-bottom: 6px;">Register and Shine</h6>
                                    <p class="paragraph-small">Join Our Talent Contest and Showcase Your Skills!"
                                        Participate in our talent contest by registering online and get ready to
                                        showcase your unique talents to the world.</p>
                                </div>

                                <div class="card-default mt-4 mt-md-0 d-md-none">
                                    <span class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 18px;">2</span>
                                    <h6 style="margin-bottom: 6px;">Prepare, Perform, and Impress</h6>
                                    <p class="paragraph-small">Get ready to showcase your skills and talent in our
                                        exciting contest. Prepare your act, whether it's singing, dancing, magic, or any
                                        other talent.</p>
                                </div>

                                <div class="card-default mt-4">
                                    <span class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 18px;">3</span>
                                    <h6 style="margin-bottom: 6px;">Unleash Your Potential</h6>
                                    <p class="paragraph-small">Unleash your hidden potential and embark on a
                                        transformative journey in our talent contest. Discover new talents, develop your
                                        skills, and shine brightly on our stage.</p>
                                </div>


                                <div class="card-default mt-4 d-md-none">
                                    <span class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 18px;">4</span>
                                    <h6 style="margin-bottom: 6px;">Join the Spotlight</h6>
                                    <p class="paragraph-small">It's your time to shine! Participate in our talent
                                        contest and make your mark in the entertainment world. Showcase your unique
                                        talents, captivate the audience.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-default mt-4 mt-md-0 d-none d-md-inline-block">
                                    <span class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 18px;">2</span>
                                    <h6 style="margin-bottom: 6px;">Prepare, Perform, and Impress</h6>
                                    <p class="paragraph-small">Get ready to showcase your skills and talent in our
                                        exciting contest. Prepare your act, whether it's singing, dancing, magic, or any
                                        other talent.</p>
                                </div>

                                <div class="card-default mt-4 d-none d-md-inline-block">
                                    <span class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 18px;">4</span>
                                    <h6 style="margin-bottom: 6px;">Join the Spotlight</h6>
                                    <p class="paragraph-small">It's your time to shine! Participate in our talent
                                        contest and make your mark in the entertainment world. Showcase your unique
                                        talents, captivate the audience.</p>
                                </div>
                            </div>
                            <div class="col-12 d-lg-none">
                                <a href="#" class="button-default d-flex align-items-center gap-2"
                                    style="margin-top: 36px !important;">
                                    Get Started
                                    <div class="arrow-icon">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END STEP SECTION --}}


            {{-- STORIES SECTION --}}
            <section class="stories section-gap" id="stories">
                <div class="row">
                    <div class="col-lg-7 col-xl-6 order-2 order-lg-1">
                        <div class="wrapper">
                            <div class="swiper mySwiperStories">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-default">
                                            <img src="{{ asset('assets/img/stories/stories-1.svg') }}"
                                                class="img-fluid rounded-3" alt="Stories Image Profile">
                                            <h6 style="margin: 18px 0 2px;">Emma Johnson</h6>
                                            <p class="paragraph-primary" style="margin-bottom: 8px;">Singing Category
                                                Winner</p>
                                            <p class="paragraph-small">Join Our Talent Contest and Showcase Your
                                                Skills!"
                                                Participate in our talent contest by registering online and get ready to
                                                showcase your unique talents to the world.</p>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card-default">
                                            <img src="{{ asset('assets/img/stories/stories-2.svg') }}"
                                                class="img-fluid rounded-3" alt="Stories Image Profile">
                                            <h6 style="margin: 18px 0 2px;">David Thompson</h6>
                                            <p class="paragraph-primary" style="margin-bottom: 8px;">Dance Category
                                                Winner</p>
                                            <p class="paragraph-small">David's dynamic and innovative dance moves won
                                                the hearts of the judges and the audience alike.</p>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card-default">
                                            <img src="{{ asset('assets/img/stories/stories-1.svg') }}"
                                                class="img-fluid rounded-3" alt="Stories Image Profile">
                                            <h6 style="margin: 18px 0 2px;">Emma Johnson</h6>
                                            <p class="paragraph-primary" style="margin-bottom: 8px;">Singing Category
                                                Winner</p>
                                            <p class="paragraph-small">Join Our Talent Contest and Showcase Your
                                                Skills!"
                                                Participate in our talent contest by registering online and get ready to
                                                showcase your unique talents to the world.</p>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card-default">
                                            <img src="{{ asset('assets/img/stories/stories-2.svg') }}"
                                                class="img-fluid rounded-3" alt="Stories Image Profile">
                                            <h6 style="margin: 18px 0 2px;">David Thompson</h6>
                                            <p class="paragraph-primary" style="margin-bottom: 8px;">Dance Category
                                                Winner</p>
                                            <p class="paragraph-small">David's dynamic and innovative dance moves won
                                                the hearts of the judges and the audience alike.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination-stories"></div>
                        </div>
                    </div>

                    <div class="offset-xl-1 col-lg-5 mb-5 mb-lg-0 order-1 order-lg-2">
                        <span class="subtitle d-inline-block" style="margin-bottom: 14px !important;">Inspiring Paths
                            to Success</span>
                        <h2 class="title" style="margin-bottom: 18px !important; padding-right: 24px;">Stories of
                            Triumph and Inspiring Achievements</h2>
                        <p class="paragraph">Get inspired by the extraordinary journeys of our past winners. Through
                            their talent, resilience, and unwavering commitment, they have not only won the contest but
                            have also become role models for aspiring talents around the world.</p>
                    </div>
                </div>
            </section>
            {{-- END STORIES SECTION --}}


            {{-- ABOUT SECTION --}}
            <section class="about d-flex align-items-center section-gap pt-5 section-gap-top" id="about">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xl-6 col-xxl-5 pe-lg-5 pe-xxl-0 d-none d-lg-flex justify-content-start">
                        <img src="{{ asset('assets/img/banner/about-banner.svg') }}" class="img-fluid About Banner"
                            alt="Hero Banner">
                    </div>
                    <div class="col-lg-7 col-xl-6 col-xxl-7 ps-xxl-5 ps-xxl-0">
                        <span class="subtitle d-inline-block" style="margin-bottom: 14px !important;">Unleash Your
                            Creativity, Inspire the World</span>
                        <h2 class="title" style="padding-right: 24px;">Unleashing the
                            Power of Talent, A Platform for Dreamers to Shine and Inspire</h2>
                        <div class="wrapper-about d-flex gap-2" style="margin: 18px 0 20px !important;">
                            <button class="button-about active">Introduce</button>
                            <button class="button-about">Vision & Mission</button>
                            <button class="button-about">Our History</button>
                        </div>
                        <div class="wrapper-paragraph d-flex flex-column gap-2"
                            style="margin-bottom: 36px !important;">
                            <p class="paragraph">At our talent contest, we are committed to unleashing the power of
                                talent and providing a platform for dreamers to showcase their unique abilities. We
                                believe that everyone deserves a chance to be heard, seen, and celebrated for their
                                extraordinary gifts.</p>
                            <p class="paragraph">With a vibrant community of artists, mentors, and enthusiasts, we
                                foster an environment that sparks creativity, fosters growth, and inspires others to
                                pursue their passions. Join us on this incredible journey of talent discovery, where
                                dreams become reality and stars are born.</p>
                        </div>
                        <div class="wrapper-button d-flex gap-2 align-items-md-center">
                            <a href="#" class="button-default">Contact Us</a>
                            <a href="#" class="button-third d-flex align-items-center gap-2">
                                Check Criteria
                                <div class="arrow-icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END ABOUT SECTION --}}
        </div>
    </main>
    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        var swiper = new Swiper(".mySwiperStories", {
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            },
            pagination: {
                el: ".swiper-pagination-stories",
                clickable: true,
            },
        });
    </script>
    </main>

    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
