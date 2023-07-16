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


            {{-- GALLERY SECTION --}}
            <section class="gallery section-gap" id="gallery">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <span class="subtitle d-inline-block" style="margin-bottom: 14px !important;">Moments of
                            Brilliance and Creativity</span>
                        <h2 class="title" style="margin-bottom: 18px !important; padding-right: 24px;">Capturing
                            Moments of Talent and Inspiration</h2>
                        <p class="paragraph">Explore our gallery showcasing captivating moments from previous talent
                            contests, where talented individuals from various disciplines took the stage, unleashing
                            their creativity and leaving a lasting impact.</p>
                    </div>
                    <div class="offset-xl-1 col-lg-7 col-xl-6">
                        <div class="wrapper">
                            <div class="swiper mySwiperGallery">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="wrapper-image">
                                            <img src="{{ asset('assets/img/gallery/gallery-1.svg') }}"
                                                class="img-fluid w-100" alt="Gallery Image">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wrapper-image">
                                            <img src="{{ asset('assets/img/gallery/gallery-2.svg') }}"
                                                class="img-fluid w-100" alt="Gallery Image">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wrapper-image">
                                            <img src="{{ asset('assets/img/gallery/gallery-3.svg') }}"
                                                class="img-fluid w-100" alt="Gallery Image">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wrapper-image">
                                            <img src="{{ asset('assets/img/gallery/gallery-1.svg') }}"
                                                class="img-fluid w-100" alt="Gallery Image">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wrapper-image">
                                            <img src="{{ asset('assets/img/gallery/gallery-2.svg') }}"
                                                class="img-fluid w-100" alt="Gallery Image">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wrapper-image">
                                            <img src="{{ asset('assets/img/gallery/gallery-3.svg') }}"
                                                class="img-fluid w-100" alt="Gallery Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination-gallery"></div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END GALLERY SECTION --}}


            {{-- CRITERIA SECTION --}}
            <section class="criteria section-gap" id="criteria">
                <div class="row">
                    <div class="col-lg-7 col-xl-6 order-2 order-lg-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-default">
                                    <div class="wrapper d-flex justify-content-between align-items-center"
                                        style="margin-bottom: 6px;">
                                        <h6>Technical Skill</h6>
                                        <p class="paragraph-primary">40 poin</p>
                                    </div>
                                    <p class="paragraph-small" style="margin-bottom: 18px;">Assessing the contestant's
                                        proficiency and execution of
                                        their talent, including technique, precision, and mastery.</p>
                                    <progress value="40" max="100"></progress>
                                </div>

                                <div class="card-default mt-4">
                                    <div class="wrapper d-flex justify-content-between align-items-center"
                                        style="margin-bottom: 6px;">
                                        <h6>Stage Presence</h6>
                                        <p class="paragraph-primary">20 poin</p>
                                    </div>
                                    <p class="paragraph-small" style="margin-bottom: 18px;">Considering the
                                        contestant's charisma, confidence, and evaluating their overall stage presence
                                        and performance quality.</p>
                                    <progress value="20" max="100"></progress>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-default mt-4 mt-md-0">
                                    <div class="wrapper d-flex justify-content-between align-items-center"
                                        style="margin-bottom: 6px;">
                                        <h6>Creativity and Originality</h6>
                                        <p class="paragraph-primary">30 poin</p>
                                    </div>
                                    <p class="paragraph-small" style="margin-bottom: 18px;">Evaluating the uniqueness
                                        and innovation demonstrated in the performance, and bring fresh ideas to their
                                        talent.</p>
                                    <progress value="30" max="100"></progress>
                                </div>

                                <div class="card-default mt-4">
                                    <div class="wrapper d-flex justify-content-between align-items-center"
                                        style="margin-bottom: 6px;">
                                        <h6>Overall Impact</h6>
                                        <p class="paragraph-primary">10 poin</p>
                                    </div>
                                    <p class="paragraph-small" style="margin-bottom: 18px;">Examining the overall
                                        impact and impression created by the contestant's talent, and lasting impression
                                        on the judges and audience.</p>
                                    <progress value="10" max="100"></progress>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="offset-xl-1 col-lg-5 mb-5 mb-lg-0 order-1 order-lg-2">
                        <span class="subtitle d-inline-block" style="margin-bottom: 14px !important;">Skill and
                            Technique Assessment</span>
                        <h2 class="title" style="margin-bottom: 18px !important; padding-right: 24px;">Our Judging
                            Criteria for Talent Contest</h2>
                        <p class="paragraph">In our talent contest, we uphold fairness and transparency through our
                            carefully crafted judging criteria. Our panel of expert judges evaluates performances based
                            on a set of criteria that encompasses skill, creativity, stage presence, originality, and
                            audience engagement.</p>
                        <div class="wrapper-criteria">
                            <div class="row">
                                <div class="col-6 d-flex flex-column gap-3">
                                    <div class="criteria-item d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/img/icon/checklist.svg') }}" class="img-fluid"
                                            alt="Checklist Icon">
                                        <p class="paragraph-small">Broad Audience Reach</p>
                                    </div>
                                    <div class="criteria-item d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/img/icon/checklist.svg') }}" class="img-fluid"
                                            alt="Checklist Icon">
                                        <p class="paragraph-small">Prizes and Rewards</p>
                                    </div>
                                </div>
                                <div class="col-6 d-flex flex-column gap-3">
                                    <div class="criteria-item d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/img/icon/checklist.svg') }}" class="img-fluid"
                                            alt="Checklist Icon">
                                        <p class="paragraph-small">Valuable Feedback</p>
                                    </div>
                                    <div class="criteria-item d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/img/icon/checklist.svg') }}" class="img-fluid"
                                            alt="Checklist Icon">
                                        <p class="paragraph-small">Personal Growth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END CRITERIA SECTION --}}


            {{-- FAQ SECTION --}}
            <section class="faq d-flex align-items-center section-gap pt-5 section-gap-top" id="faq">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xl-6 col-xxl-7 pe-xxl-5 pe-xxl-0">
                        <span class="subtitle d-inline-block" style="margin-bottom: 14px !important;">Find answers to
                            your queries</span>
                        <h2 class="title" style="padding-right: 24px;">Frequently Asked Questions, Your Guide to
                            Success</h2>
                        <p class="paragraph" style="margin-bottom: 36px !important;">Discover answers to commonly
                            asked questions about the talent contest,
                            eligibility, submission guidelines, and more. We're here to provide clarity and support to
                            ensure your journey is smooth.</p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <h6>How do I submit my entry for the talent contest?</h6>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">To submit your entry, simply visit our
                                            website and follow the instructions on the submission page.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                        aria-controls="collapseTwo">
                                        <h6>Is there an age limit for participating in the talent contest?</h6>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">JumpZone is suitable for all ages, but
                                            children
                                            under 6 years old must be accompanied by a paying adult for safety
                                            purposes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="true" aria-controls="collapseThree">
                                        <h6>Can I submit multiple entries for the talent contest?</h6>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">JumpZone is suitable for all ages, but
                                            children
                                            under 6 years old must be accompanied by a paying adult for safety
                                            purposes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-6 col-xxl-5 ps-lg-5 ps-xxl-0 d-none d-lg-flex justify-content-end">
                        <img src="{{ asset('assets/img/banner/faq-banner.svg') }}" class="img-fluid FAQ Banner"
                            alt="Hero Banner">
                    </div>
                </div>
            </section>
            {{-- END FAQ SECTION --}}
        </div>

        {{-- CTA --}}
        <div class="container position-relative">
            <section class="cta position-relative">
                <div class="row justify-content-center position-relative" style="z-index: 9999;">
                    <div
                        class="col-11 col-md-9 col-lg-8 col-xl-7 col-xxl-6 text-md-center d-md-flex flex-md-column align-items-md-center">
                        <h2 class="title" style="padding-right: 24px;">Embrace the Spotlight, Showcase Your
                            Excellence!</h2>
                        <p class="paragraph" style="margin-bottom: 36px !important;">Are you ready to showcase your
                            skills and make a name for yourself? Don't miss this opportunity to be a part of our talent
                            contest and unlock doors to exciting possibilities. Join us now and let your talent shine on
                            the grand stage. Sign up today and take your talent to the next level!</p>
                        <div class="wrapper-button d-flex gap-2 align-items-md-center flex-column flex-md-row">
                            <a href="#" class="button-secondary">Explore Website</a>
                            <a href="#" class="button-third d-flex align-items-center gap-2">
                                Register Now
                                <div class="arrow-icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="box-1 position-absolute d-none d-md-inline-block"></div>
            <div class="box-2 position-absolute d-none d-md-inline-block"></div>
        </div>
        {{-- END CTA --}}


        {{-- FOOTER --}}
        <footer class="footer" id="footer">
            <div class="container">
                <div class="row" style="margin-bottom: 100px">
                    <div class="col-6 col-md-3 mb-5 mb-md-0">
                        <a class="footer-brand d-inline-block" href="#home" style="margin-bottom: 18px;">
                            <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" class="img-fluid w-100"
                                alt="Logo Brand">
                        </a>
                        <p class="paragraph-small" style="margin-bottom: 30px;">Welcome to the 5 Star Talent Showdown,
                            where dreams come to life and talents are celebrated. Join us for an extraordinary journey
                            of self-expression, creativity.</p>
                        <div class="wrapper-sosmed d-flex gap-2">
                            <a href="#" class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/facebook-icon.svg') }}" class="img-fluid"
                                    alt="Facebook Icon" width="16">
                            </a>
                            <a href="#" class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/whatsapp-icon.svg') }}" class="img-fluid"
                                    alt="Whatsapp Icon" width="16">
                            </a>
                            <a href="#" class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/twitter-icon.svg') }}" class="img-fluid"
                                    alt="Twitter Icon" width="16">
                            </a>
                        </div>
                    </div>

                    <div class="offset-lg-2 offset-xl-3 col-6 col-md-3 col-lg-2 mb-5 mb-md-0">
                        <h6 style="margin-bottom: 20px">Quick Links</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#home" class="paragraph-small">Home</a>
                            <a href="#guideline" class="paragraph-small">How to Participate</a>
                            <a href="#about" class="paragraph-small">About Us</a>
                            <a href="#pricing" class="paragraph-small">Judging Criteria</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xl-2">
                        <h6 style="margin-bottom: 20px">Our Featured</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#adventage" class="paragraph-small">Register and Shine</a>
                            <a href="#adventage" class="paragraph-small">Prepare, Perform, and Impress</a>
                            <a href="#adventage" class="paragraph-small">Unleash Your Potential</a>
                            <a href="#adventage" class="paragraph-small">Join the Spotlight</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <h6 style="margin-bottom: 20px">Help & guide</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="" class="paragraph-small">Terms & Conditions</a>
                            <a href="" class="paragraph-small">Privacy Policy</a>
                            <a href="" class="paragraph-small">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 copyright text-center">
                        <p>Copyright © 2023 5 Star Talent Showdown. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        {{-- END FOOTER --}}
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

        var swiper = new Swiper(".mySwiperGallery", {
            slidesPerView: 2,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                992: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1399: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            },
            pagination: {
                el: ".swiper-pagination-gallery",
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
