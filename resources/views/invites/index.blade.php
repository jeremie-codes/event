<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.kodesolution.com/2024/lovebite-php/index-3-single.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2026 13:36:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
     <meta property="og:title" content="Invitation Mariage Raphael et Divine">
    <meta property="og:description" content="Wedding Events | Planificateur d'évènements Mariage de Raphael et Divine">
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image" content="{{ asset('images/img.png') }}"/>
    <meta property="og:url" content="{{ url('') }}"/>
    <meta property="og:type" content="website" />
    <title>Invitation Mariage</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ asset('assets/js/respond.js') }}"></script><![endif]-->
</head>

<style>
    .coeur {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        overflow: hidden;
        z-index: 9999;
    }

    .heart {
        position: absolute;
        top: -50px;
        color: #ff4d6d;
        font-size: 20px;
        animation: fall linear forwards;
    }

    @keyframes fall {
        0% {
            transform: translate(0, 0) rotate(0deg);
            opacity: 1;
        }

        25% {
            transform: translate(-20px, 25vh) rotate(90deg);
        }

        50% {
            transform: translate(20px, 50vh) rotate(180deg);
        }

        75% {
            transform: translate(-15px, 75vh) rotate(270deg);
        }

        100% {
            transform: translate(15px, 110vh) rotate(360deg);
            opacity: 0;
        }
    }


    .call {
        position: relative;
        top: -2px;
        animation: mouveUpDown 1s linear infinite;
    }

    .fa-download {
        position: relative;
        top: -2px;
        animation: mouveUpDown 1s linear infinite;
    }

    .fa-location-dot {
        position: relative;
        top: -2px;
        animation: mouveUpDown 1s linear infinite;
    }

    @keyframes mouveUpDown {
        0% {
            top: -2px;
        }

        50% {
            top: 5px;
        }

        100% {
            top: -2px;
        }
    }


    .rsvp-card {
        position: relative;
        z-index: 2;
        max-width: 920px;
        margin: 0 auto;
        padding: 42px;
        border: 1px solid rgba(70, 94, 129, 0.16);
        border-radius: 8px;
        background: rgba(255, 255, 255, .96);
        box-shadow: 0 24px 70px rgba(24, 30, 34, 0.12);
    }

    .rsvp-heading h2,
    .rsvp-step h3 {
        margin-bottom: 10px;
        color: #2f2723;
    }

    .rsvp-heading p,
    .rsvp-step p {
        color: #6f625b;
    }

    .rsvp-progress {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 28px 0 34px;
    }

    .rsvp-progress-item {
        display: inline-flex;
        width: 38px;
        height: 38px;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: 1px solid #bacad6;
        color: #6a868e;
        font-weight: 700;
        background: #fff;
        transition: .25s ease;
    }

    .rsvp-progress-item.active {
        border-color: #5d8fb6;
        color: #fff;
        background: #5d97b6;
    }

    .rsvp-progress-line {
        width: min(120px, 22vw);
        height: 1px;
        background: #c3d7dc;
    }

    .rsvp-choice-grid,
    .rsvp-drink-grid {
        display: grid;
        gap: 18px;
    }

    .rsvp-choice-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .rsvp-choice {
        display: flex;
        gap: 16px;
        width: 100%;
        min-height: 116px;
        padding: 22px;
        border: 1px solid #cad8e1;
        border-radius: 8px;
        text-align: left;
        background: #fff;
        transition: .25s ease;
    }

    .rsvp-choice:hover,
    .rsvp-choice.selected,
    .drink-card:hover,
    .drink-card:has(input:checked) {
        border-color: #5d8fb6;
        box-shadow: 0 16px 34px rgba(93, 176, 182, 0.16);
        transform: translateY(-2px);
    }

    .rsvp-choice-icon,
    .rsvp-confirm-icon {
        display: inline-flex;
        flex: 0 0 auto;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #f8eee9;
        color: #b66f5d;
    }

    .rsvp-choice-icon {
        width: 46px;
        height: 46px;
    }

    .rsvp-choice strong,
    .rsvp-choice small {
        display: block;
    }

    .rsvp-choice strong {
        color: #2f2723;
        font-size: 17px;
    }

    .rsvp-choice small {
        margin-top: 5px;
        color: #66777b;
    }

    .rsvp-drink-grid {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    .drink-card {
        position: relative;
        display: block;
        /* min-height: 178px; */
        padding: 10px;
        border: 1px solid #cad9e1;
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
        background: #fff;
        transition: .25s ease;
    }

    .drink-card input {
        position: absolute;
        opacity: 0;
        pointer-events: none;
    }

    .drink-card-image {
        display: flex;
        width: 100%;
        aspect-ratio: 2 / 1;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 6px;
        background: #faf2ee;
        color: #5da9b6;
        font-size: 34px;
    }

    .drink-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .drink-card-name {
        display: block;
        margin-top: 5px;
        color: #2f2723;
        font-weight: bold;
    }

    .drink-card-check {
        position: absolute;
        top: 10px;
        right: 10px;
        display: inline-flex;
        width: 28px;
        height: 28px;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        background: #5d98b6;
        opacity: 0;
        transform: scale(.8);
        transition: .2s ease;
    }

    .drink-card input:checked ~ .drink-card-check {
        opacity: 1;
        transform: scale(1);
    }

    .rsvp-actions {
        display: flex;
        gap: 12px;
        justify-content: center;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .rsvp-next-btn,
    .rsvp-submit-btn,
    .rsvp-back-btn {
        display: inline-flex;
        min-height: 48px;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 12px 22px;
        border-radius: 6px;
        border: 1px solid transparent;
        font-weight: 700;
        transition: .2s ease;
    }

    .rsvp-next-btn,
    .rsvp-submit-btn {
        color: #fff;
        background: #5d98b6;
    }

    .rsvp-next-btn:disabled {
        cursor: not-allowed;
        opacity: .5;
    }

    .rsvp-back-btn {
        color: #546a6d;
        border-color: #bfd5da;
        background: #fff;
    }

    .rsvp-textarea {
        border-radius: 8px;
        border-color: #cae0e1;
    }

    .rsvp-confirm-icon {
        width: 64px;
        height: 64px;
        margin-bottom: 18px;
        font-size: 24px;
    }

    .rsvp-empty {
        grid-column: 1 / -1;
        padding: 18px;
        border-radius: 8px;
        color: #6f625b;
        background: #faf2ee;
    }

    @media (max-width: 767px) {
        .rsvp-card {
            padding: 26px 18px;
        }

        .rsvp-choice-grid,
        .rsvp-drink-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Main Header-->
        <header class="main-header header-style-six" id="home">
            <!-- Header Top -->
            <div class="header-top">
                <div class="small-container">
                    <div class="inner-container">

                        <div class="top-center">
                            <!-- Info List -->
                            <ul class="list-style-one">
                                <li><i class="fal fa-clock"></i>18 juillet 2026</li>
                                <li><i class="fa fa-phone"></i> <a href="tel:+243827289636">+243 827 289 636</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top -->

            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <!-- Main box -->
                    <div class="main-box">
                        <div class="logo hide-lg">
                            <a href="/" title=""><img src="{{ asset('assets/images/logo-2.png') }}"
                                    alt="" title="Love BIte"></a>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer">
                            <nav class="nav main-menu">
                                <ul class="navigation onepage-nav">
                                    <li><a href="#home">Accueil</a></li>
                                    <li><a href="#about">Invitation</a></li>
                                    <li><a href="#program">Programme</a></li>
                                    <li><a href="#rsvp">RSVP</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul> <!-- Main Menu End-->
                            </nav>

                            <!-- Mobile Nav toggler -->
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="upper-box">
                        <div class="nav-logo">
                            <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="" title="Raphael & Divine" /></a>
                        </div>
                        <div class="close-btn"><i class="icon fa fa-times"></i></div>
                    </div>

                    <ul class="clearfix navigation">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>

                    <ul class="contact-list-one">
                        <li>
                            <i class="icon lnr-icon-phone-handset"></i>
                            <span class="title">Téléphone</span>
                            <div class="text"><a  href="tel:+243827289636">+243 827 289 636</a></div>
                        </li>
                        <li>
                            <i class="icon fal fa-clock"></i>
                            <span class="title">Date</span>
                            <div class="text">
                                <a>
                                    <span class="__cf_email__" data-cfemail="761e131a063615191b0617180f5815191b">18 juillet 2026</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Mobile Menu -->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo">
                            <a href="/" title=""><img src="{{ asset('assets/images/logo.png') }}" alt="" title="Raphael & Divine"></a>
                        </div>

                        <!--Right Col-->
                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="clearfix navbar-collapse show collapse">
                                    <ul class="clearfix navigation">
                                        <!--Keep This Empty / Menu will come through Javascript-->
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->
        </header>
        <!--End Main Header -->

        @if (session('success'))
            <div class="alert alert-success rsvp-alert" style="position: fixed; bottom: 20px; right: 20px; z-index: 999; min-width: 300px;">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger rsvp-alert" style="position: fixed; bottom: 20px; right: 20px; z-index: 999; min-width: 300px;">>
                Merci de verifier votre reponse avant de confirmer.
            </div>
        @endif

        <!-- Banner Section -->
        <section class="banner-section-six" id="home">
            <div class="bg">
                <div class="bg-image" style="background-image: url({{ asset('images/bann-1.png') }})"></div>
            </div>
            <div class="auto-container">
                <div class="row">
                    <div class="content-column">
                        <div class="inner-column">
                            <div class=" wow fadeInUp" data-wow-delay="300ms" style="color: transparent;">18 juillet
                                2026</div>
                            <h1 class="title wow fadeInUp" data-wow-delay="600ms" style="color: transparent;">Save
                                the date of</h1>
                            <h2 class="nam wow fadeInUp" data-wow-delay="900ms" style="color: transparent;">
                                Raphaêl <br />
                                <span>&</span> <br />
                                Divine
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Section -->

        <!-- About Section -->
        <section class="about-section-seven" id="about">
            <div class="flowers-20 bounce-y"></div>
            <div class="flowers-19 bounce-y"></div>
            <div class="auto-container">
                <div class="outer-box">
                    <div class="pb-0 row">
                        <!-- Content Column -->
                        <div class="py-0 mx-auto my-0 content-column col-lg-8 col-md-12 col-sm-12">
                            <div class="py-0 my-0 inner-column">
                                <div class="text-center sec-title v2">
                                    <span class="sub-title fwbold" style="font-size: 64px">Invitation</span>

                                    <div class="d-flex justify-content-between">
                                        <h4 class="fw-semibold">M, Mme, Mlle, Couple: ..{{ $guest->name }}..</h4>
                                        <h4 class="fw-semibold">Table: ..{{ $guest->table->name }}..</h4>
                                    </div>

                                    <div class="text">
                                        <div
                                            class="gap-4 fw-bold text-dark d-flex justify-content-center align-items-center">
                                            <div>
                                                <h1 class="fw-bold title text-dark" style="font-size: 44px">
                                                    Raphaël
                                                </h1>
                                                <h3 class="fw-bold title text-info"
                                                    style="position: relative; top: -35px">
                                                    Maku
                                                </h3>
                                            </div>

                                            <h2 class="text-danger" style="font-size: 54px"> & </h2>

                                            <div>
                                                <h1 class="fw-bold title text-dark" style="font-size: 44px">
                                                    Divine
                                                </h1>
                                                <h3 class="fw-bold title text-info"
                                                    style="position: relative; top: -35px">
                                                    Lukanu
                                                </h3>
                                            </div>
                                        </div>

                                        <p style="font-size: 16px">
                                            Ont la joie de vous inviter à la célébration de leur mariage et seraient
                                            honorés de votre présence pour partager ce moment de bonheur.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Section -->
        
        <!-- Countdown section -->
        <section class="pt-0 countdown-section" id="event">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="icon-flower-14"></div>
                    <div class="outer-box">
                        <div class="row">
                            <div class="content-column">
                                <div class="inner-column">
                                    <h1 class="title wow fadeInUp" data-wow-delay="600ms">Save the date</h1>
                                </div>
                            </div>
                        </div>

                        <!-- Content Box -->
                        <div class="content-box wow fadeInUp">
                            <div class="caption-box">
                                <div class="date">18 Juillet, 2026</div>
                                <div class="address">
                                    Salle des fêtes <b>LA CHANCELLE</b> Sise 2, Luozi,<br />
                                    Prince Kasa-vubu. Réf: En face du Carrefour des Jeunes de Matonge
                                </div>
                            </div>
                        </div>

                        <div class="btn-box">
                            <a href="https://www.google.com/maps/place//@-4.3350428,15.3116783,17z/data=!3m1!4b1!4m6!1m5!3m4!2zNMKwMjAnMDYuMiJTIDE1wrAxOCc1MS4zIkU!8m2!3d-4.3350556!4d15.31425?hl=fr&entry=ttu&g_ep=EgoyMDI2MDYxNi4wIKXMDSoASAFQAw%3D%3D"
                                class="theme-btn btn-style-one">
                                <i class="fa fa-location-dot" aria-hidden="true"></i>
                                <span class="btn-title ps-2">
                                    Localiser la salle
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Countdown section -->
        
        <!-- Timeline Section -->
        <section class="timeline-section pb-90" id="program">
            <div class="flower-3 bounce-y"></div>
            <div class="flower-4 bounce-y"></div>
            <div class="bg bg-image" style="background-image: url({{ asset('assets/images/background/6.jpg') }})">
            </div>
            <div class="auto-container">
                <div class="text-center sec-title">
                    <span class="icon-divider-4"></span>
                    <h2>Programme</h2>
                </div>
                <div class="carousel-outer">
                    <div class="timeline-carousel owl-carousel owl-theme disable-navs">
                        <!-- Timeline Block -->
                        <div class="timeline-block">
                            <div class="inner-box">
                                <i class="icon flaticon-wedding-ring"></i>
                                <div class="time">09:00 am - 12:00</div>
                                <h5 class="designation">Bénédiction nuptiale</h5>
                                <div class="text">
                                    Eglise Communauté Chrétienne Feu de Victoire,
                                    Sise 39, Av. Sasa Q/ De la paix C/ Kisenso.
                                    Réf: Paroisse Saint Thomas.
                                </div>
                            </div>
                        </div>

                        <!-- Timeline Block -->
                        <div class="timeline-block">
                            <div class="inner-box">
                                <i class="icon flaticon-wedding-arch-1"></i>
                                <div class="time">A partir de 19:00</div>
                                <h5 class="designation">Soirée dansante</h5>
                                <div class="text">Salle de fête <b>LA CHANCELLE</b> sise 2, Luozi, Prince Kasa-vubu.
                                    Réf: En face du Carrefour des Jeunes de Montagne.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Story Section -->

        <!-- start interractive section -->
        <section class="testimonial-section-five rsvp-section" id="rsvp">
            <div class="bg bg-image" style="background-image: url({{ asset('assets/images/background/5.jpg') }})">
            </div>
            <div class="auto-container">
                <div class="outer-box">
                    <span class="flower-12"></span>
                    <div class="testimonial-block-five">
                        <div class="inner-box">
                            @if(!$guest->present())
                                <div class="rsvp-card">
                                    <div class="text-center rsvp-heading">
                                        <span class="sub-title fw-bold">RSVP</span>
                                        <h2>Votre reponse compte beaucoup</h2>
                                        <p>Confirmez votre presence et aidez-nous a mieux preparer votre accueil.</p>
                                    </div>


                                    <form method="POST" action="{{ route('invite.respond', $guest) }}" id="rsvpForm"
                                        class="rsvp-form">
                                        @csrf

                                        <input type="hidden" name="status" id="rsvpStatus"
                                            value="{{ old('status', $guest->status !== 'pending' ? $guest->status : '') }}">

                                        <div class="rsvp-progress" aria-hidden="true">
                                            <span class="rsvp-progress-item active" data-progress-step="attendance">1</span>
                                            <span class="rsvp-progress-line"></span>
                                            <span class="rsvp-progress-item" data-progress-step="details">2</span>
                                            <span class="rsvp-progress-line"></span>
                                            <span class="rsvp-progress-item" data-progress-step="confirm">3</span>
                                        </div>

                                        <div class="rsvp-step active" id="rsvpStepAttendance">
                                            <h3>Serez-vous disponible ?</h3>
                                            <p>Choisissez votre reponse pour continuer.</p>

                                            <div class="rsvp-choice-grid">
                                                <button type="button" class="rsvp-choice" data-status="present">
                                                    <span class="rsvp-choice-icon"><i class="fa fa-check"></i></span>
                                                    <span>
                                                        <strong>Oui, je serai la</strong>
                                                        <small>Je confirme ma presence au mariage.</small>
                                                    </span>
                                                </button>

                                                <button type="button" class="rsvp-choice" data-status="absent">
                                                    <span class="rsvp-choice-icon"><i class="fa fa-times"></i></span>
                                                    <span>
                                                        <strong>Non, je ne pourrai pas</strong>
                                                        <small>Je laisse un message aux organisateurs.</small>
                                                    </span>
                                                </button>
                                            </div>

                                            @error('status')
                                                <div class="mt-3 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="rsvp-step" id="rsvpStepPresent" hidden>
                                            <h3>Vos preferences de boissons</h3>
                                            <p>Selectionnez jusqu'a 3 boissons que vous aimeriez retrouver pendant la reception.</p>

                                            @error('drinks')
                                                <div class="mb-3 text-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="rsvp-drink-grid">
                                                @forelse ($drinks as $drink)
                                                    <label class="drink-card">
                                                        <input type="checkbox" class="rsvp-drink-checkbox" name="drinks[]"
                                                            value="{{ $drink->id }}"
                                                            @checked(in_array($drink->id, old('drinks', $guest->drinks->pluck('id')->toArray())))>
                                                        <span class="drink-card-image">
                                                            <i class="fa fa-glass-cheers"></i>
                                                        </span>
                                                        <span class="drink-card-name">{{ $drink->name }}</span>
                                                        <span class="drink-card-check"><i class="fa fa-check"></i></span>
                                                    </label>
                                                @empty
                                                    <div class="rsvp-empty">
                                                        Les boissons seront confirmées par les organisateurs.
                                                    </div>
                                                @endforelse
                                            </div>
                                        </div>

                                        <div class="rsvp-step" id="rsvpStepAbsent" hidden>
                                            <h3>Un petit mot pour les organisateurs</h3>
                                            <p>Vous pouvez laisser la raison de votre absence ou un message pour les maries.</p>

                                            <textarea class="form-control rsvp-textarea" name="comment" rows="5"
                                                placeholder="Votre message...">{{ old('comment', $guest->comment) }}</textarea>

                                            @error('comment')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="rsvp-step" id="rsvpStepConfirm" hidden>
                                            <div class="text-center rsvp-confirm">
                                                <span class="rsvp-confirm-icon"><i class="fa fa-heart"></i></span>
                                                <h3>Merci {{ $guest->name }}</h3>
                                                <p id="rsvpSummary">Votre reponse est prete a etre envoyee.</p>
                                            </div>
                                        </div>

                                        <div class="rsvp-actions">
                                            <button type="button" class="rsvp-back-btn" id="rsvpBack" hidden>
                                                <i class="fa fa-arrow-left"></i>
                                                Retour
                                            </button>
                                            <button type="button" class="rsvp-next-btn" id="rsvpNext" disabled>
                                                Continuer
                                                <i class="fa fa-arrow-right"></i>
                                            </button>
                                            <button type="submit" class="rsvp-submit-btn" id="rsvpSubmit" hidden>
                                                Confirmer ma reponse
                                                <i class="fa fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            @endif

                            @if($guest->present())
                                <div class="pt-3 rsvp-card">
                                    <div class="text-center rsvp-heading">
                                        <span class="sub-title fw-bold">RSVP</span>
                                        <h3>Télécharger votre invitation 👇!</h3>
                                        {{-- <p>.</p> --}}
                                    </div>

                                    <a download="invitation-{{ $guest->name }}.pdf" id="downloadButton" type="button" href="{{ asset('storage/' . $guest->invitation_pdf) }}" class="py-2 mt-md1 btn btn-success btn-sm" role="button">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        Télécharger
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Interactive Section -->

        <!-- Main Footer -->
        <footer class="main-footer footer-style-one" id="contact">
            <div class="bg bg-pattern-1 bounce-y"></div>
            <!--  Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="text-center logo">
                            <a href="#"> <img src="{{ asset('assets/images/logo-3.png') }}" alt="Image"
                                    title="Love Bite" width="250px" /></a>
                            <br>
                            <div class="copyright-text">© Copyrights reserved by Jeremie Mianda.</div>
                            <div class="copyright-text">Contactez-nous sur 👉
                                <a href="https://wa.me/243827289636" class="text-success animate-bounce fa-download">
                                    <i class="fab fa-whatsapp"></i>
                                    Whatsapp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Main Footer -->

        <div class="coeur"></div>
    </div>
    <!-- End Page Wrapper -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/bxslider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- form submit -->

    <script>
        function selectStatus(status) {
            document.getElementById('status').value = status;
            document.getElementById('step1').style.display = 'none';

            if (status === 'present') {
                document.getElementById('stepPresent').style.display = 'block';
            } else {
                document.getElementById('stepAbsent').style.display = 'block';
            }

            setTimeout(function() {
                document.getElementById(
                    status === 'present' ?
                    'stepPresent' :
                    'stepAbsent'
                ).insertAdjacentHTML(
                    'beforeend',
                    `
            <div class="mt-4 text-center">
                <button
                    type="button"
                    class="btn btn-outline-primary"
                    onclick="goFinal()"
                >
                    Continuer ❤️
                </button>
            </div>
            `
                );
            }, 100);
        }

        function goFinal() {
            document.getElementById('stepPresent').style.display = 'none';
            document.getElementById('stepAbsent').style.display = 'none';
            document.getElementById('stepFinal').style.display = 'block';
        }
    </script>

    <script>
        const container = document.querySelector('.coeur');

        function createHeart() {

            const heart = document.createElement('div');

            heart.classList.add('heart');
            heart.innerHTML = '❤️';

            // Position horizontale aléatoire
            heart.style.left = Math.random() * window.innerWidth + 'px';

            // Taille aléatoire
            heart.style.fontSize = (15 + Math.random() * 20) + 'px';

            // Durée aléatoire
            const duration = 3 + Math.random() * 4;
            heart.style.animationDuration = duration + 's';

            container.appendChild(heart);

            // Supprimer après l'animation
            setTimeout(() => {
                heart.remove();
            }, duration * 1000);
        }

        // Créer un cœur toutes les 200 ms
        setInterval(createHeart, 200);
    </script>

    @if(!$guest->present())
    <script>
        (function() {
            const statusInput = document.getElementById('rsvpStatus');
            const steps = {
                attendance: document.getElementById('rsvpStepAttendance'),
                present: document.getElementById('rsvpStepPresent'),
                absent: document.getElementById('rsvpStepAbsent'),
                confirm: document.getElementById('rsvpStepConfirm'),
            };
            const nextButton = document.getElementById('rsvpNext');
            const backButton = document.getElementById('rsvpBack');
            const submitButton = document.getElementById('rsvpSubmit');
            const summary = document.getElementById('rsvpSummary');
            const choiceButtons = document.querySelectorAll('.rsvp-choice');
            const drinkCheckboxes = document.querySelectorAll('.rsvp-drink-checkbox');
            const progressItems = document.querySelectorAll('.rsvp-progress-item');
            let currentStep = 'attendance';

            function selectedStatus() {
                return statusInput.value;
            }

            function detailStep() {
                return selectedStatus() === 'present' ? 'present' : 'absent';
            }

            function updateSummary() {
                if (selectedStatus() === 'present') {
                    const count = document.querySelectorAll('.rsvp-drink-checkbox:checked').length;
                    summary.textContent = count > 0 ?
                        `Vous confirmez votre presence avec ${count} preference(s) de boissons.` :
                        'Vous confirmez votre presence sans preference particuliere.';
                } else if (selectedStatus() === 'absent') {
                    summary.textContent = 'Votre absence sera transmise aux organisateurs avec votre message.';
                }
            }

            function showStep(step) {
                currentStep = step;

                Object.entries(steps).forEach(([name, element]) => {
                    const isActive = name === step;
                    element.hidden = !isActive;
                    element.classList.toggle('active', isActive);
                });

                backButton.hidden = step === 'attendance';
                nextButton.hidden = step === 'confirm';
                submitButton.hidden = step !== 'confirm';
                nextButton.disabled = step === 'attendance' && !selectedStatus();

                progressItems.forEach((item, index) => {
                    const activeIndex = step === 'attendance' ? 0 : step === 'confirm' ? 2 : 1;
                    item.classList.toggle('active', index <= activeIndex);
                });

                updateSummary();
            }

            choiceButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    statusInput.value = button.dataset.status;
                    choiceButtons.forEach((item) => item.classList.remove('selected'));
                    button.classList.add('selected');
                    nextButton.disabled = false;
                });
            });

            drinkCheckboxes.forEach((checkbox) => {
                checkbox.addEventListener('change', () => {
                    const checked = document.querySelectorAll('.rsvp-drink-checkbox:checked');

                    if (checked.length > 3) {
                        checkbox.checked = false;
                        alert("Choisissez 3 boissons au maximum.");
                    }

                    updateSummary();
                });
            });

            nextButton.addEventListener('click', () => {
                if (currentStep === 'attendance' && selectedStatus()) {
                    showStep(detailStep());
                    return;
                }

                if (currentStep === 'present' || currentStep === 'absent') {
                    showStep('confirm');
                }
            });

            backButton.addEventListener('click', () => {
                if (currentStep === 'confirm') {
                    showStep(detailStep());
                    return;
                }

                showStep('attendance');
            });

            if (selectedStatus()) {
                choiceButtons.forEach((button) => {
                    button.classList.toggle('selected', button.dataset.status === selectedStatus());
                });
                showStep(detailStep());
            } else {
                showStep('attendance');
            }
        })();
    </script>
    @endif

</body>

<!-- Mirrored from html.kodesolution.com/2024/lovebite-php/index-1-single.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2026 13:36:34 GMT -->

</html>
