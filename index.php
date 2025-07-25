<?php
$title = "Home";
include 'includes/header.php';
?>

<style>
    .bg-grayish {
        background-color: #F9F9F9;
    }

    .bg-white {
        background-color: #fff;
    }



    .hero-wrapper {
        background: #fff;
    }

    .hero-section {
        position: relative;
        border-radius: 60px;
        overflow: hidden;
        min-height: 600px;
    }

    .hero-bg {
        position: absolute;
        inset: 0;
        background: url('images/hero.jpg') no-repeat center center;
        background-size: cover;
        z-index: 1;
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(0, 0, 0, 0.85) 10%, rgba(0, 0, 0, 0.0) 70%);
        z-index: 2;
    }


    .hero-content {
        position: relative;
        z-index: 3;
        color: white;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 60px;
    }

    .hero-title {
        font-weight: 700;
        font-size: 3.5rem;
        line-height: 1.1;
    }

    .hero-text {
        font-size: 1.1rem;
        margin: 20px 0;
        max-width: 500px;
    }

    .apply-btn {
        border-radius: 100px;
        background: #42A147;
        color: white;
        font-weight: 600;
        padding: 12px 30px;
        box-shadow: 0px 16px 50px 0px rgba(66, 161, 71, 0.40);
        border: none;
    }

    .scroll-down {
        position: absolute;
        bottom: 0;
        /* left: 0; */
        background: white;
        /* color: #000; */
        font-weight: 500;
        border-top-right-radius: 60px;
        padding: 16px 30px;
        display: flex;
        align-items: center;
        z-index: 4;
        color: #201B52;
        font-family: Poppins;
        font-size: 12px;
        font-style: normal;
        line-height: 100%;
        /* 22px */
        letter-spacing: -0.22px;
        gap: 10px;
    }

    .scroll-down i {
        margin-left: 8px;
        color: #42A147;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.2rem;
        }

        .hero-text {
            font-size: 1rem;
        }

        .hero-content {
            padding: 30px;
        }
    }

    .counter-text {
        color: #201B52;
        text-align: center;
        text-shadow: 10px 10px 10px rgba(32, 27, 82, 0.06);
        font-family: "Clash Display";
        font-size: 94px;
        font-style: normal;
        font-weight: 600;
        line-height: 100%;
        /* 94px */
    }

    .counter-sign {
        color: #42A147;
        font-family: "Clash Display";
        font-size: 94px;
        font-style: normal;
        font-weight: 600;
        line-height: 100%;
    }

    .counter-caption {
        color: #201B52;
        text-align: center;
        text-shadow: 8px 8px 6px rgba(32, 27, 82, 0.08);
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 100%;
        /* 20px */
        letter-spacing: -0.2px;
    }

    .equipment-partner-section {
        padding: 80px 0;
        background: linear-gradient(to right, #ffffff 60%, #f4fdf5);
    }

    .equipment-partner-title {
        color: #201B52;
        font-family: "Clash Display";
        font-size: 55px;
        font-style: normal;
        font-weight: 600;
        line-height: 100%;
        /* 60px */
        letter-spacing: -0.6px;
    }

    .equipment-partner-subtitle {
        /* color: #42A147;
            font-weight: 500;
            margin-bottom: 12px; */
        color: #42A147;
        font-family: Poppins;
        font-size: 22px;
        font-style: normal;
        font-weight: 400;
        line-height: 130%;
        /* 28.6px */
        letter-spacing: -0.22px;
    }

    .equipment-partner-text {
        color: #201B52;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        /* 30px */
        letter-spacing: -0.2px;
    }

    .equipment-partner-image {
        flex-shrink: 0;
        /* border-radius: 60px;
            /* background: url(<path-to-image>) lightgray -244.813px -219px / 163.096% 135.152% no-repeat; */
        /* box-shadow: 24px 24px 100px 0px rgba(32, 27, 82, 0.20); */
    }

    .equipment-partner-btn {
        border-radius: 50px;
        background-color: #42A147;
        color: white;
        font-weight: 500;
        padding: 10px 24px;
        box-shadow: 0px 16px 50px rgba(66, 161, 71, 0.4);
        border: none;
        position: relative;
        overflow: hidden;
        transition: color 0.3s ease;
        z-index: 1;
    }

    .equipment-partner-feature {
        background-color: #FAFAFB;
        border-radius: 16px;
        padding: 24px;
        height: 100%;
    }

    .equipment-partner-feature-icon {
        background: #f0f1f3;
        border-radius: 12px;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
    }

    .equipment-partner-feature-title {
        font-family: "Clash Display";
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: 110%;
    }

    .equipment-partner-feature-title span {
        background: linear-gradient(91deg, #201B52 10%, #42A147 90%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .equipment-partner-feature-text {
        color: #201B52;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        letter-spacing: -0.2px;
    }

    .equipment-partner-content {
        flex: 1;
    }

    .phone-text {
        font-weight: 600;
        color: #16163F;
    }

    .phone-icon {
        color: #16163F;
        font-size: 1.2rem;
    }

    .phone-arrow {
        color: #28a745;
        font-weight: bold;
    }

    .testimonial-card {
        border-radius: 1rem;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
        padding: 1.5rem;
        background: white;
        height: 300px;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .testimonial-card.bg-dark {
        background-color: #121430 !important;
        color: white;
    }

    .testimonial-card img.google-icon {
        height: 24px;
    }

    .swiper-button-drag {
        position: absolute;
        bottom: -35px;
        left: 50%;
        transform: translateX(-50%);
        background: #22c55e;
        color: white;
        padding: 8px 22px;
        border-radius: 999px;
        cursor: grab;
        font-weight: bold;
        z-index: 10;
        box-shadow: 0 0 15px rgba(34, 197, 94, 0.3);
        user-select: none;
    }

    .swiper-button-drag:active {
        cursor: grabbing;
    }

    .swiper {
        /* padding-bottom: 60px; */
    }


    .who-we-serve {
        padding: 60px 0;
    }

    /* .who-we-serve h5 {
            color: #42A147;
            font-weight: 500;
        }

        .who-we-serve h2 {
            font-family: 'Clash Display', sans-serif;
            font-size: 36px;
            font-weight: 700;
            color: #120E3A;
        }

        .who-we-serve p {
            color: #444;
            max-width: 800px;
            margin: 0 auto;
        } */

    .who-we-serve .swiper-slide {
        border-radius: 24px;
        overflow: hidden;
        position: relative;
    }

    .who-we-serve .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .who-we-serve .slide-caption {
        position: absolute;
        bottom: 35px;
        text-align: left;
        opacity: 1;
        left: 35%;
        padding: 20px;
        background: transparent;
        color: #fff;
        font-weight: 600;
        font-size: 16px;
        margin-left: 0;
    }



    .who-we-serve .swiper {
        padding: 30px 0;
    }



    .features-section {
        background: radial-gradient(circle at right, #0e1f2f, #120E3A);
        color: white;
        border-radius: 60px;
        padding: 60px;
    }

    .section-title {
        /* color: #FFF; */
        font-family: "Clash Display";
        font-size: 39px;
        font-style: normal;
        font-weight: 600;
        line-height: 100%;
        /* 50px */
        letter-spacing: -0.5px;
    }

    .text-white-50 {
        color: #FFF;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        /* 30px */
        letter-spacing: -0.2px;
    }

    .section-subtitle {
        /* color: #42A147;
            font-weight: 500; */
        color: #42A147;
        font-family: Poppins;
        font-size: 22px;
        font-style: normal;
        font-weight: 400;
        line-height: 100%;
        /* 22px */
        letter-spacing: -0.22px;
    }

    .how-it-works {
        padding: 80px 0;
    }

    /* .how-it-works h5 {
            color: #42A147;
            font-weight: 500;
        }

        .how-it-works h2 {
            font-family: 'Clash Display', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: #120E3A;
        } */
    .how-it-works-text {
        color: #201B52;
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 140%;
        /* 28px */
        letter-spacing: -0.4px;
        flex-basis: 50%;
    }

    .how-it-works .step-circle {
        width: 240px;
        height: 240px;
        border-radius: 50%;
        border: 1px solid #ccc;
        background-color: #fff;
        padding: 30px 20px;
        position: relative;
        margin: 0 auto;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .how-it-works .step-circle.highlight {
        background-color: #f4fdf5;
    }

    .how-it-works .step-circle .step-icon {
        font-size: 36px;
        margin-bottom: 10px;
        color: #120E3A;
    }

    .how-it-works .step-circle h6 {
        font-weight: 600;
        font-size: 16px;
        color: #120E3A;
    }

    .how-it-works .step-circle h6 span {
        color: #42A147;
    }

    .how-it-works .step-circle p {
        font-size: 14px;
        color: #555;
        margin-top: 10px;
    }

    .step-dot {
        width: 10px;
        height: 10px;
        background-color: #42A147;
        border-radius: 50%;
        margin: 4px auto;
        animation: pulseDot 1.5s infinite ease-in-out;
        position: absolute;
    }

    .step-dot.dot-top-left {
        top: 8px;
        left: 8px;
    }

    .step-dot.dot-top-right {
        top: 8px;
        right: 8px;
    }

    .step-dot.dot-bottom-left {
        bottom: 8px;
        left: 8px;
    }

    .step-dot.dot-bottom-right {
        bottom: 8px;
        right: 8px;
    }

    @keyframes pulseDot {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.6;
        }

        50% {
            transform: scale(1.4);
            opacity: 1;
        }
    }

    /* Button hover animation (Apply Now) */

    /*.equipment-partner-btn::before {*/
    /*    content: '';*/
    /*    position: absolute;*/
    /*    top: 0;*/
    /*    left: -100%;*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    background-color: #2e7633;*/
    /*    z-index: -1;*/
    /*    transition: left 0.4s ease;*/
    /*    border-radius: 100px;*/
    /*}*/
    .equipment-partner-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0%;
        background-color: #2e7633;
        z-index: -1;
        transition: width 0.4s ease;
        border-radius: 100px;
    }

    .equipment-partner-btn:hover::before {
        width: 100%;
    }

    .equipment-partner-btn:hover {
        color: white;
    }



    .how-it-works .step-dot {
        width: 10px;
        height: 10px;
        background-color: #42A147;
        border-radius: 50%;
        position: absolute;
        margin: 4px auto;
        animation: pulseDot 1.5s infinite ease-in-out;
    }

    .how-it-works .step-dot:nth-child(1) {
        top: -6px;
        left: 50%;
        transform: translateX(-50%);
    }

    .how-it-works .step-dot:nth-child(2) {
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
    }

    .how-it-works .step-dot:nth-child(3) {
        top: 50%;
        left: -6px;
        transform: translateY(-50%);
    }

    .how-it-works .step-dot:nth-child(4) {
        top: 50%;
        right: -6px;
        transform: translateY(-50%);
    }

    .how-it-works .apply-btn {
        border-radius: 50px;
        background-color: #42A147;
        color: white;
        font-weight: 500;
        padding: 10px 24px;
        box-shadow: 0px 16px 50px rgba(66, 161, 71, 0.4);
        border: none;
        position: relative;
        overflow: hidden;
        transition: color 0.3s ease;
        z-index: 1;
    }

    @media (max-width: 767px) {
        .how-it-works .step-circle {
            width: 100%;
            height: auto;
            border-radius: 20px;
            padding: 20px;
        }

        .how-it-works .step-dot {
            display: none;
        }
    }

    .feature-card {
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.14);
        background: rgba(255, 255, 255, 0.06);
        padding: 20px 25px;
        color: white;
    }

    .feature-icon {
        background: radial-gradient(circle, rgba(66, 161, 71, 1) 0%, rgba(32, 27, 82, 1) 100%);
        border-radius: 50%;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }

    .feature-icon i {
        color: white;
        font-size: 12px;
    }

    .feature-title {
        font-family: "Clash Display";
        font-size: 26px;
        font-style: normal;
        font-weight: 600;
        line-height: 100%;
    }

    .feature-title .highlight {
        background: linear-gradient(91deg, #FFF 20%, #42A147 80%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .feature-text {
        color: #FFF;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 140%;
        /* 28px */
        letter-spacing: -0.2px;
    }

    .feature-greater-than {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #42A147;
        color: white;
        border-radius: 50%;
        padding: 12px;
        width: 15px;
        height: 15px;
    }

    .built-trust {
        padding: 60px 0;
        background-color: #f9fafb;
    }

    /* .built-trust .section-subtitle {
            color: #42A147;
            font-weight: 500;
        } */

    .built-trust .section-title {
        font-family: 'Clash Display', sans-serif;
        font-size: 36px;
        font-weight: 700;
        color: #120E3A;
        line-height: 100%;
        letter-spacing: -0.5px;
    }

    /* .built-trust .section-description {
            color: #333;
            max-width: 700px;
            margin: 0 auto;
        } */

    .section-description {
        color: #201B52;
        text-align: center;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        letter-spacing: -0.2px;
    }

    .built-trust .info-card {
        background: #FAFAFB;
        border-radius: 24px;
        padding: 30px;
        height: 100%;
    }

    .built-trust .info-icon {
        background: #f2f3f5;
        border-radius: 12px;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .built-trust .info-icon img {
        width: 30px;
        height: 30px;
    }

    .info-title {
        font-family: "Clash Display";
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: 100%;
    }

    .info-title span {
        background: linear-gradient(91deg, #201B52 20%, #42A147 80%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .info-text {
        color: #201B52;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        /* 30px */
        letter-spacing: -0.2px;
    }

    .faq-questioneer-button {
        color: #FFF;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 100%;
        /* 20px */
        letter-spacing: -0.4px;
    }

    .faq-questioneer {
        color: #FFF;
        font-family: Poppins;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 140%;
    }

    .accordion-button {
        color: #201B52;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 100%;
        /* 20px */
        letter-spacing: -0.4px;
    }


    button.faq-questioneer-button {
        border: none;
    }

    footer {
        background: radial-gradient(ellipse at center, #FFFFFF 20%, #D1EBD4 100%);

    }

    .footer-text {
        font-size: 16px;
        font-family: 'Poppins', sans-serif;
        color: #4b5563;
    }

    .footer-link {
        font-size: 16px;
        font-family: 'Poppins', sans-serif;
        color: #111827;
        text-decoration: none;
    }

    .footer-link:hover {
        text-decoration: underline;
    }

    .footer-logo-text {
        font-family: 'Clash Display', sans-serif;
        font-size: 22px;
        font-weight: bold;
        color: #111827;
    }



    button {
        position: relative;
        transition: color 0.3s ease;
        z-index: 1;
        overflow: hidden;
    }

    button::before,
    button::after {
        position: absolute;
        inset: 0;
        border-radius: 10rem;
        content: '';
    }

    button::after {
        background-color: #42A147;
        z-index: -2;
    }

    button::before {
        background-color: #2e7633;
        width: 0%;
        z-index: -1;
        transition: width 0.4s ease;
    }

    button:hover::before {
        width: 100%;
    }


    /* Zoom-in effect on hover */
    .slide-zoom {
        position: relative;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        cursor: pointer;
        overflow: hidden;
        border-radius: 12px;
    }

    .slide-zoom:hover {
        /* transform: scale(1.05); */
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        border-radius: 0px 0px 40px 40px;
        background: linear-gradient(180deg, rgba(33, 110, 37, 0.00) 0%, #216E25 100%);
        z-index: 10;
    }

    /* Slide caption animation */
    .slide-caption {
        background: linear-gradient(180deg, rgba(33, 110, 37, 0.00) 0%, #216E25 100%);
        color: white;
        font-weight: 600;
        padding: 10px 15px;
        border-radius: 6px;
        position: absolute;
        bottom: 20px;
        left: 20px;
        z-index: 2;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        transition: all 0.4s ease;
        /* improves contrast */
    }


    /* .slide-zoom:hover .slide-caption {
            transform: translateX(-50%) translateY(0px);
            opacity: 1;
        } */

    button.accordion-button.bg-white.fs-6::after {
        position: relative;
        color: white;
    }

    .btn-primary,
    .btn-outline-secondary {
        background-color: #2e7633 !important;
        border-color: #2e7633 !important;
        color: white;
    }

    .btn-primary::after,
    .btn-outline-secondary::after {
        border-radius: 0 !important;
    }

    .btn-primary::before,
    .btn-outline-secondary::before {
        position: relative;
        background: none;
    }

    ul.list-unstyled.text-muted {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .construction .swiper-slide {
        position: relative;
        /* overflow: hidden; */
        border-radius: 20px;
    }

    .construction .swiper-slide .hover-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100px;
        opacity: 1;
        transition: opacity 0.3s ease;
        z-index: 1;
    }

    .construction .swiper-slide .hover-green {
        background: linear-gradient(180deg, rgba(33, 110, 37, 0.00) 0%, #216E25 100%);
    }

    .construction .swiper-slide .hover-blue {
        background: linear-gradient(180deg, rgba(32, 27, 82, 0.00) 0%, #201B52 100%);
    }

    .construction .swiper-slide:hover .hover-overlay {
        opacity: 1;
    }

    .construction .swiper-slide img {
        display: block;
        border-radius: 20px;
        z-index: 0;
        position: relative;
        max-height: 500px;
    }

    button.accordion-button::before {
        background: none;
    }

    .hidden {
        display: none !important;
    }

    @media (max-width: 767px) {


        .hero-title {
            font-size: 2.5rem;
        }

        .hero-text {
            font-size: 1rem;
        }

        .hero-content {
            padding: 30px;
        }

        .apply-btn {
            width: 100%;
            text-align: center;
        }

        .equipment-partner-section {
            padding: 40px 20px;
        }

        .equipment-partner-title {
            font-size: 2rem;
        }

        .equipment-partner-text {
            font-size: 1rem;
        }

        .numbers .counter-text {
            font-size: 48px;
        }

        .numbers .counter-sign {
            font-size: 48px;
        }

        .features-section {
            background: radial-gradient(circle at right, #0e1f2f, #120E3A);
            color: white;
            padding: 20px;
        }

        .equipment-partner-feature-icon {
            display: none;
        }

        .how-it-works {
            padding: 40px 20px;
        }

        .how-it-work-title {
            flex-direction: column;

        }

        .how-it-works-text {
            text-align: left;
            align-items: flex-start;
        }

        .construction .swiper-slide img {
            max-height: 425px;
        }

        .svg-drag {
            width: 150px !important;
            height: 150px !important;
            top: 68% !important;
        }

        .svg-drag svg {
            width: 137px !important;
            height: 137px !important;
        }

    }


    .swiper-slide-next .testimonial-card {
        background-color: #121430 !important;
        color: white !important;
    }
</style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>


    <section class="hero-wrapper mb-5">
        <div class="container">
            <div class="hero-section">
                <div class="hero-bg"></div>
                <div class="hero-overlay"></div>

                <div class="hero-content">
                    <div>
                        <h1 class="hero-title" data-aos="fade-down-right" data-aos-delay="300">Commercial <br> Vehicle
                            Title <br> Loans</h1>
                        <p class="hero-text" data-aos="fade-down-right" data-aos-delay="500">Whether you’re dealing with
                            seasonal slowdowns, urgent equipment repairs,
                            or planning to grow, our flexible loans give you the power to act—fast.</p>
                        <button class="apply-btn" data-bs-toggle="modal" data-bs-target="#formModal" data-aos="fade-up"
                            data-aos-delay="200">Apply Now</button>
                    </div>
                </div>

                <a class="scroll-down text-decoration-none" href="#about-us">
                    Scroll Down <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M12 5L12 19M12 19L5 12M12 19L19 12" stroke="#42A147" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white numbers">
        <div class="container">
            <div class="row text-center align-items-center justify-content-center g-4">

                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="fw-bold display-5 text-dark">
                        <span class="counter-text">18</span><span class="counter-sign">K</span>
                    </h2>
                    <p class="counter-caption mb-0 small">Happy Clients</p>
                </div>

                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="150">
                    <h2 class="fw-bold display-5 text-dark">
                        <span class="counter-text">94</span><span class="counter-sign">%</span>
                    </h2>
                    <p class="counter-caption mb-0  small">Customer Satisfaction</p>
                </div>

                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="fw-bold display-5 text-dark">
                        <span class="counter-text">08</span><span class="counter-sign">+</span>
                    </h2>
                    <p class="counter-caption mb-0 small">Years of Experience</p>
                </div>

                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="450">
                    <h2 class="fw-bold display-5 text-dark">
                        <span class="counter-text">$74</span><span class="counter-sign">M</span>
                    </h2>
                    <p class="counter-caption mb-0 small">Total Loaned</p>
                </div>

            </div>
        </div>
    </section>

    <section class="equipment-partner-section py-5" id="about-us">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <p class="equipment-partner-subtitle">About Us</p>
                    <h2 class="equipment-partner-title">Your Heavy Equipment <br> Loan Partner</h2>
                    <p class="equipment-partner-text mt-3">
                        We specialize in helping business owners access fast, flexible funding by unlocking the equity
                        in their heavy machinery and work vehicles. Whether you own a backhoe, excavator, or service
                        truck—Western Commercial Finance offers straightforward financing options to keep your business
                        running strong.
                    </p>
                    <p class="equipment-partner-text">
                        With transparent terms, responsive support, and a business-first mindset, we’re committed to
                        helping Canadian operators grow without unnecessary delays or red tape.
                    </p>
                    <a class="equipment-partner-btn mt-3 d-flex" href="commercial-title-loans.php"
                        style="width:200px;text-decoration: none;">
                        <span style="padding: 9px;">Read More</span>
                        <div
                            style="width: 44px;height: 44px;background-color: white;border-radius: 50%;display: flex;align-items: center;justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path d="M6 12L10 8L6 4" stroke="#05071D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>

                    </a>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="equipment-partner-image">
                        <img src="images/image1.png" class="img-fluid" alt="Heavy Equipment">
                    </div>
                </div>
            </div>

            <div class="row mt-5 gy-4">
                <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="equipment-partner-feature text-start d-flex">
                        <div class="equipment-partner-feature-icon mt-5 p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/1250/1250615.png" width="24" />
                        </div>
                        <div class="equipment-partner-content" style="margin-top: 20px; margin-left: 20px;">

                            <div class="equipment-partner-feature-title">Low Rates That Work <span>for You</span></div>
                            <div class="equipment-partner-feature-text">
                                Access affordable financing with competitive interest rates—built to support your bottom
                                line, not strain it.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                            <div class="equipment-partner-feature text-start d-flex">
                        <div class="equipment-partner-feature-icon mt-5 p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/983/983891.png" width="24" />
                        </div>
                        <div class="equipment-partner-content" style="margin-top: 20px; margin-left: 20px;">
                            <div class="equipment-partner-feature-title">Fast, Hassle-Free <span>Approvals</span></div>
                            <div class="equipment-partner-feature-text">
                                Our streamlined process ensures quick approvals, helping you secure funds without
                                delaying
                                your projects.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                                            <div class="equipment-partner-feature text-start d-flex">
                        <div class="equipment-partner-feature-icon mt-5 p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/3659/3659734.png" width="24" />
                        </div>
                        <div class="equipment-partner-content" style="margin-top: 20px; margin-left: 20px;">
                            <div class="equipment-partner-feature-title">Flexible Repayment <span>Options</span></div>
                            <div class="equipment-partner-feature-text">
                                Select from multiple loan terms and payment plans designed around your project timelines
                                and
                                cash flow.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                                            <div class="equipment-partner-feature text-start d-flex">
                        <div class="equipment-partner-feature-icon mt-5 p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/633/633682.png" width="24" />
                        </div>
                        <div class="equipment-partner-content" style="margin-top: 20px; margin-left: 20px;">
                            <div class="equipment-partner-feature-title">No Hidden <span>Fees</span></div>
                            <div class="equipment-partner-feature-text">
                                We believe in full transparency. What you see is what you get—no surprise costs, no fine
                                print.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="who-we-serve text-center py-5" id="feature">
        <div class="container">
            <h5 class="section-subtitle">Businesses We Support</h5>
            <h2 class="section-title mb-3">Who We Serve</h2>
            <p class="section-description mb-5">At Western Commercial Finance, we provide accessible funding for a wide
                range of business
                operators. If you own equipment or vehicles used in your daily operations, you may qualify for fast,
                flexible capital—without jumping through hoops.</p>

            <style>
                /* .slide-caption {
                    position: absolute;
                    bottom: 20px;
                    left: 20px;
                    z-index: 2;
                    color: white;
                    font-weight: 600;
                } */
            </style>

            <div class="swiper mySwiper construction position-relative">
                <div class="swiper-wrapper">


                    <div class="swiper-slide slide-zoom">
                        <div class="hover-overlay hover-blue"></div>
                        <img src="images/10west.png" class="img-fluid" alt="General Contractors">
                        <div class="slide-caption">Independent Owners & Operators</div>
                    </div>



                    <div class="swiper-slide slide-zoom">
                        <div class="hover-overlay hover-green"></div>
                        <img src="images/west.png" class="img-fluid" alt="Owner Operator">
                        <div class="slide-caption">General Contractors</div>
                    </div>


                    <div class="swiper-slide  slide-zoom">
                        <div class="hover-overlay hover-blue"></div>
                        <img src="images/2west.png" class="img-fluid" alt="Owner Operator">
                        <div class="slide-caption">Construction Crews & Subcontractors</div>
                    </div>

                    <div class="swiper-slide slide-zoom">
                        <div class="hover-overlay hover-green"></div>
                        <img src="images/3west.png" class="img-fluid" alt="Subcontractors">
                        <div class="slide-caption">Landscaping & Snow Removal Companies</div>
                    </div>

                </div>
                <div class="svg-drag"
                    style="width: 237px; height: 237px; position:absolute; transform: rotate(-8.948deg); flex-shrink: 0; filter: drop-shadow(0px 6px 10px rgba(0, 0, 0, 0.25));left: 49%;top: 52%;z-index: 3;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="237.316px" height="237.316px" viewBox="0 0 272 272"
                        fill="none">
                        <circle cx="135.633" cy="135.733" r="118.627" fill="white" fill-opacity="0.24" />
                        <circle cx="135.633" cy="135.732" r="92.2193" fill="white" fill-opacity="0.3" />

                        <circle cx="135.633" cy="135.732" r="66.9374" fill="#42A147" stroke="url(#paint0_linear)"
                            stroke-width="3.4409" />

                        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" fill="white"
                            font-size="18" font-weight="bold" font-family="Arial, sans-serif">
                            Drag
                        </text>

                        <defs>
                            <linearGradient id="paint0_linear" x1="135.633" y1="67.0745" x2="135.633" y2="204.39"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="western-finance">
        <div class="container my-5">
            <div class="features-section">
                <div class="row">
                    <div class="col-md-6">
                        <p class="section-subtitle mb-2" data-aos="fade-up" data-aos-delay="100">Features</p>
                        <h2 class="section-title mb-4" data-aos="fade-up" data-aos-delay="100">Why Business Owners Trust
                            <br>Western Commercial Finance
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <p class="text-white-50" data-aos="fade-up" data-aos-delay="200">At Western Commercial Finance,
                            we don’t just lend—we enable business
                            momentum. Our title loans are crafted for operators, contractors, and equipment owners who
                            need real-world solutions, not red tape.</p>
                    </div>
                </div>

                <div class="row mt-4 g-4">
                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="0">
                        <div class="feature-card d-flex">
                            <div class="feature-icon">
                                <div class="feature-greater-than">
                                    <i class="fas fa-greater-than"></i>
                                </div>
                            </div>
                            <div>
                                <div class="feature-title">We Understand <span class="highlight">Business Needs</span>
                                </div>
                                <div class="feature-text">Loans designed with real-world operators in mind.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                        <div class="feature-card d-flex">
                            <div class="feature-icon">
                                <div class="feature-greater-than">
                                    <i class="fas fa-greater-than"></i>
                                </div>
                            </div>
                            <div>
                                <div class="feature-title">Stay Behind the <span class="highlight">Wheel</span></div>
                                <div class="feature-text">Keep full use of your vehicle during the loan term.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="feature-card d-flex">
                            <div class="feature-icon">
                                <div class="feature-greater-than">
                                    <i class="fas fa-greater-than"></i>
                                </div>
                            </div>
                            <div>
                                <div class="feature-title">Fast, Transparent <span class="highlight">Funding</span>
                                </div>
                                <div class="feature-text">Quick processing, clear terms, no hidden fees.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="feature-card d-flex">
                            <div class="feature-icon">
                                <div class="feature-greater-than">
                                    <i class="fas fa-greater-than"></i>
                                </div>
                            </div>
                            <div>
                                <div class="feature-title">Local Insight, National <span
                                        class="highlight">Standards</span></div>
                                <div class="feature-text">Alberta-based with a high standard of service.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="bg-white py-5">
        <div class="container py-5" id="testimonials">
            <p class="section-subtitle text-center">Testimonials</p>
            <h2 class="section-title text-center mb-4">What Our Customers Are Saying</h2>

            <div class="position-relative">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://i.pravatar.cc/50?img=1" class="rounded-circle me-3" alt="Emily">
                                    <div>
                                        <strong>Emily Rodriguez</strong><br />
                                        <span class="text-success">★★★★★</span>
                                    </div>
                                    <img src="https://www.gstatic.com/images/branding/product/1x/googleg_32dp.png"
                                        class="ms-auto google-icon" alt="Google">
                                </div>
                                <p><em>“I can’t thank Western Commercial Finance enough for their incredible service!
                                        The
                                        approval process
                                        was super fast and I drove away in my dream car in just a few days!”</em></p>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://i.pravatar.cc/50?img=2" class="rounded-circle me-3" alt="Michael">
                                    <div>
                                        <strong>Michael Nguyen</strong><br />
                                        <span class="text-success">★★★★★</span>
                                    </div>
                                    <img src="https://www.gstatic.com/images/branding/product/1x/googleg_32dp.png"
                                        class="ms-auto google-icon" alt="Google">
                                </div>
                                <p><em>“Western Commercial Finance assisted me in getting my first loan so simple! The
                                        quick
                                        approval and amazing
                                        interest rate were a pleasant surprise!”</em></p>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://i.pravatar.cc/50?img=3" class="rounded-circle me-3" alt="James">
                                    <div>
                                        <strong>James Carter</strong><br />
                                        <span class="text-success">★★★★★</span>
                                    </div>
                                    <img src="https://www.gstatic.com/images/branding/product/1x/googleg_32dp.png"
                                        class="ms-auto google-icon" alt="Google">
                                </div>
                                <p><em>“Western Commercial Finance made financing my new truck a breeze! The application
                                        was
                                        quick and I
                                        secured a fantastic rate.”</em></p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://i.pravatar.cc/50?img=12" class="rounded-circle me-3" alt="Maria">
                                    <div>
                                        <strong>Daniel King</strong><br />
                                        <span class="text-success">★★★★★</span>
                                    </div>
                                    <img src="https://www.gstatic.com/images/branding/product/1x/googleg_32dp.png"
                                        class="ms-auto google-icon" alt="Google">
                                </div>
                                <p><em>“The whole process with Western Commercial Finance was so smooth. I was able to
                                        get
                                        funding for my van within 48 hours!”</em></p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://i.pravatar.cc/50?img=25" class="rounded-circle me-3" alt="Daniel">
                                    <div>
                                        <strong>Maria Lope</strong><br />
                                        <span class="text-success">★★★★★</span>
                                    </div>
                                    <img src="https://www.gstatic.com/images/branding/product/1x/googleg_32dp.png"
                                        class="ms-auto google-icon" alt="Google">
                                </div>
                                <p><em>“Excellent service! They understood my business needs and offered a tailored
                                        financing solution that worked perfectly.”</em></p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://i.pravatar.cc/50?img=18" class="rounded-circle me-3" alt="Aisha">
                                    <div>
                                        <strong>Jade Alex</strong><br />
                                        <span class="text-success">★★★★★</span>
                                    </div>
                                    <img src="https://www.gstatic.com/images/branding/product/1x/googleg_32dp.png"
                                        class="ms-auto google-icon" alt="Google">
                                </div>
                                <p><em>“I never thought getting business financing could be this easy. Friendly team,
                                        fast
                                        approval, and great terms.”</em></p>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="svg-drag"
                    style="width: 237px; height: 237px; position:absolute; transform: rotate(-8.948deg); flex-shrink: 0; filter: drop-shadow(0px 6px 10px rgba(0, 0, 0, 0.25));left: 58%;top: 47%;z-index: 3;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="237.316px" height="237.316px" viewBox="0 0 272 272"
                        fill="none">
                        <circle cx="135.633" cy="135.733" r="118.627" fill="white" fill-opacity="0.24" />
                        <circle cx="135.633" cy="135.732" r="92.2193" fill="white" fill-opacity="0.3" />

                        <circle cx="135.633" cy="135.732" r="66.9374" fill="#42A147" stroke="url(#paint0_linear)"
                            stroke-width="3.4409" />

                        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" fill="white"
                            font-size="18" font-weight="bold" font-family="Arial, sans-serif">
                            Drag
                        </text>

                        <defs>
                            <linearGradient id="paint0_linear" x1="135.633" y1="67.0745" x2="135.633" y2="204.39"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <!-- Drag Button -->
                <!-- <div class="swiper-button-drag" id="dragHandle">Drag</div> -->


            </div>
        </div>
    </section>

    <section class="how-it-works py-5 bg-grayish">
        <div class="container text-center">
            <div class="d-flex how-it-work-title justify-content-between align-items-start mb-5">
                <div class="text-start">
                    <h5 class="section-subtitle">Apply</h5>
                    <h2 class="section-title">How It Works</h2>
                </div>

                <p class=" how-it-works-text mb-5 px-md-5 mx-md-5">
                    Getting funded through Western Commercial Finance is simple, fast, and designed around your
                    business.
                    Our streamlined process ensures you get the capital you need—without interrupting your operations or
                    jumping through hoops.
                </p>

                <div>
                    <button class="equipment-partner-btn mt-3 d-flex" data-bs-toggle="modal"
                        data-bs-target="#formModal">
                        <span style="padding: 9px;">Apply Now</span>
                        <div
                            style="width: 44px;height: 44px;background-color: white;border-radius: 50%;display: flex;align-items: center;justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path d="M6 12L10 8L6 4" stroke="#05071D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>

                    </button>
                </div>
            </div>



            <div class="row justify-content-center g-4">
                <!-- Step 1 -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="step-circle">
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-icon">📝</div>
                        <h6>Apply Online <span>or</span><br> By Phone</h6>
                        <p>Start with a short form or speak directly with a loan specialist—no obligations, no delays.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="step-circle highlight">
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-icon">🏠</div>
                        <h6>Get an <span>Equity</span> Valuation</h6>
                        <p>We assess the value of your heavy machinery or commercial vehicle to determine your loan
                            eligibility.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="step-circle">
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-icon">💰</div>
                        <h6>Loan Offer <span>&</span> Terms</h6>
                        <p>Receive a transparent loan offer with terms tailored to your business cash flow and needs.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="step-circle">
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-dot"></div>
                        <div class="step-icon">🤝</div>
                        <h6>Sign <span>&</span> Receive Funds</h6>
                        <p>Once approved, funds are released quickly—no downtime, no delays.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="built-trust py-5" style="background-color: #fff;">
        <div class="container text-center">
            <p class="section-subtitle mb-2" data-aos="fade-up" data-aos-delay="0">Built on Trust</p>
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="100">Your Security.Our Priority.</h2>
            <p class="section-description mb-5" data-aos="fade-up" data-aos-delay="200">
                At Western Commercial Finance, we take your privacy and security seriously. Every step of our loan
                process is designed with built-in protection to ensure your personal and financial data stays safe,
                confidential, and in the right hands.
            </p>

            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-card text-start">
                        <div class="info-icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/5611/5611163.png" alt="Secure Icon" />
                        </div>
                        <div class="info-title">Secure <span>Transactions</span></div>
                        <p class="info-text">
                            All loan applications and transactions are processed through secure channels to protect your
                            information.
                            We use industry-standard protections to keep your data safe from start to finish.
                        </p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="info-card text-start">
                        <div class="info-icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/3004/3004501.png"
                                alt="Confidential Icon" />
                        </div>
                        <div class="info-title">Confidential Handling of <span>Information</span></div>
                        <p class="info-text">
                            We only collect the documents and data required to process your loan.
                            Your personal and business information is never shared without your consent and is stored
                            securely at all times.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq container py-5" style="border-radius: 40px;background: #F9F9F9;" id="faq">
        <!-- FAQ SECTION -->
        <div class="py-5">
            <div class="row g-4 align-items-start">

                <!-- Left Column -->
                <div class="col-lg-5">
                    <div class="p-4 ">
                        <p class="equipment-partner-subtitle  mb-1">FAQs</p>
                        <h2 class="equipment-partner-title ">Frequently Asked Questions</h2>
                        <p class="equipment-partner-text mb-4">Still Have Questions? We're Here to Help!</p>
                        <!-- <a href="#" class="btn  btn-lg rounded-pill d-inline-flex align-items-center gap-2 text-white"
                            style="background-color :rgba(66, 161, 71, 1); font-size: 16px;">
                            Contact Us <span class="fs-5">→</span>
                        </a> -->
                        <button class="equipment-partner-btn mt-3 d-flex" data-bs-toggle="modal"
                            data-bs-target="#formModal">
                            <span style="padding: 9px;">Apply Now</span>
                            <div
                                style="width: 44px;height: 44px;background-color: white;border-radius: 50%;display: flex;align-items: center;justify-content: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M6 12L10 8L6 4" stroke="#05071D" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                        </button>
                    </div>
                </div>

                <!-- Right Column (Accordion) -->
                <div class="col-lg-7">
                    <div class="accordion" id="faqAccordion">

                        <!-- FAQ Item 1 - Active -->
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden">
                            <h2 class="accordion-header" style="background-color: rgba(66, 161, 71, 1);"
                                id="headingOne">
                                <button class="faq-questioneer-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                    style="background-color: rgba(66, 161, 71, 1); padding: 15px;">
                                    What types of vehicles or equipment do you accept?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="faq-questioneer text-white  rounded-bottom"
                                    style="background-color: rgba(66, 161, 71, 1); padding: 0px 15px 15px;">
                                    We accept a wide range of commercial vehicles and heavy equipment, including trucks,
                                    vans, excavators, backhoes, skid steers, loaders, and service vehicles—as long as
                                    they have a clear title and are used for business purposes.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-white fs-6  " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Will applying affect my credit score?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No, submitting an application for pre-approval does not affect your credit score.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-white fs-6" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Can I apply if the equipment is registered under my company's name?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we accept applications for equipment owned by companies, provided the required
                                    documentation is available.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed bg-white fs-6 " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Is early repayment allowed?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely! You can repay your loan early with no penalties.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed bg-white fs-6 " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    What documents will I need to apply?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    A government-issued ID, proof of ownership, and recent financial statements are
                                    typically required.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed bg-white fs-6 " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    Will I lose access to my equipment?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No, your equipment remains in your possession and use throughout the loan period.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
    <?php include 'includes/footer.php'; ?>

</body>
</html>