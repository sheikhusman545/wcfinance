<?php
include "includes/header.php"; ?>
<style>
  

    .hero-wrapper {
        background: #fff;
    }

    .hero-section {
        position: relative;
        border-radius: 60px;
        overflow: hidden;
        min-height: 600px;
        margin: auto;
    }

    .hero-bg {
        position: absolute;
        inset: 0;
        background: url(images/subtract.png) no-repeat;
        background-position: 100% top;
        background-size: contain;
        z-index: 1;
    }


    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.9) 30%, transparent 60%);
        z-index: 2;
    }


    .hero-content {
        position: relative;
        z-index: 3;
        color: white;
        height: 100%;
        display: flex;
        align-items: center;
        /* padding-top: 240px; */
        padding-left: 50px;
    }

    .hero-title {
        /* font-weight: 700;
            font-size: 3.5rem;
            line-height: 1.1; */
        color: #FFF;
        text-shadow: 6px 6px 60px rgba(0, 0, 0, 0.30);
        font-family: "Clash Display";
        font-size: 74px;
        font-style: normal;
        font-weight: 600;
        line-height: 100%;
        /* 74px */
        letter-spacing: -0.74px;
    }

    .hero-text {
        /* font-size: 1.1rem; */
        margin: 20px 0;
        max-width: 500px;
        color: #FFF;
        text-shadow: 2px 4px 10px rgba(0, 0, 0, 0.40);
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 130%;
        /* 28.6px */
        letter-spacing: -0.22px;
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

    .payment-btn {
        border-radius: 100px;
        background: transparent;
        color: white;
        font-weight: 600;
        padding: 12px 30px;
        box-shadow: 0px 16px 50px 0px rgba(66, 161, 71, 0.40);
        border: 1px solid white;
    }

    .payment-btn span {
        color: #201B52;
        font-family: "Clash Display";
        font-size: 30px;
        font-style: normal;
        font-weight: 600;
        line-height: 110%;
        /* 33px */
        letter-spacing: -0.3px;
    }

    .scroll-down {
        position: absolute;
        bottom: 25px;
        left: 20px;
        color: #000;
        border-top-right-radius: 60px;
        padding: 30px;
        display: flex;
        align-items: center;
        z-index: 4;
        color: #201B52;
        font-family: Poppins;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        letter-spacing: -0.22px;
        background: none;
        ;
    }

    .scroll-down i {
        margin-left: 3px;
        color: #42A147;
        font-size: x-large;
    }



    .equipment-partner-section {
        padding: 80px 0;
        background: linear-gradient(to right, #ffffff 60%, #f4fdf5);
    }

    .equipment-partner-title {
        font-family: 'Clash Display', sans-serif;
        font-weight: 700;
        font-size: 36px;
        color: #120E3A;
    }

    .equipment-partner-subtitle {
        color: #42A147;
        font-weight: 500;
        margin-bottom: 12px;
    }

    .equipment-partner-text {
        color: #333;
        font-size: 16px;
        line-height: 1.7;
    }

    .equipment-partner-image {}

    .equipment-partner-btn {
        border-radius: 50px;
        background-color: #42A147;
        color: white;
        font-weight: 500;
        padding: 10px 24px;
        box-shadow: 0px 16px 50px rgba(66, 161, 71, 0.4);
        border: none;
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
        font-weight: 600;
        font-size: 16px;
        color: #120E3A;
    }

    .equipment-partner-feature-title span {
        color: #42A147;
    }

    .equipment-partner-feature-text {
        font-size: 14px;
        color: #444;
        margin-top: 6px;
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
        height: 100%;
        transition: all 0.3s ease;
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
        padding-bottom: 60px;
    }


    .who-we-serve {
        padding: 60px 0;
    }

    .who-we-serve h5 {
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
    }

    .who-we-serve .swiper-slide {
        border-radius: 24px;
        overflow: hidden;
        position: relative;
    }

    .who-we-serve.swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .who-we-serve .slide-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 20px;
        color: #fff;
        font-weight: 600;
        font-size: 16px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
        border-bottom-left-radius: 24px;
        border-bottom-right-radius: 24px;
    }

    .who-we-serve .swiper {
        padding: 30px 0;
    }

    .footer-heading {
        font-family: 'Clash Display', sans-serif;
        font-size: 22px;
        font-weight: 600;
        color: #111827;
    }

    .features-section {
        background: radial-gradient(circle at right, #0e1f2f, #120E3A);
        color: white;
        border-radius: 60px;
        padding: 60px;
    }

    .section-title {
        font-family: 'Clash Display', sans-serif;
        font-size: 38px;
        font-weight: 700;
        line-height: 1.2;
    }

    .section-subtitle {
        color: #42A147;
        font-weight: 500;
    }

    .how-it-works {
        padding: 80px 0;
    }

    .how-it-works h5 {
        color: #42A147;
        font-weight: 500;
    }

    .how-it-works h2 {
        font-family: 'Clash Display', sans-serif;
        font-weight: 700;
        font-size: 36px;
        color: #120E3A;
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
        width: 8px;
        height: 8px;
        background-color: #42A147;
        border-radius: 50%;
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

    .how-it-works .step-dot {
        width: 8px;
        height: 8px;
        background-color: #42A147;
        border-radius: 50%;
        position: absolute;
    }

    .how-it-works .step-dot:nth-child(1) {
        top: 8px;
        left: 50%;
        transform: translateX(-50%);
    }

    .how-it-works .step-dot:nth-child(2) {
        bottom: 8px;
        left: 50%;
        transform: translateX(-50%);
    }

    .how-it-works .step-dot:nth-child(3) {
        top: 50%;
        left: 8px;
        transform: translateY(-50%);
    }

    .how-it-works .step-dot:nth-child(4) {
        top: 50%;
        right: 8px;
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
        /* width: 24px; */
        /* height: 24px; */
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        width: 100px;
        height: 100px;
        flex-shrink: 0;
    }

    .feature-icon i {
        color: white;
        font-size: 12px;
    }

    .feature-title {
        font-weight: 600;
        font-size: 18px;
    }

    .feature-title .highlight {
        color: #42A147;
    }

    .feature-text {
        font-size: 14px;
        color: #e4e4e4;
        margin-top: 5px;
    }

    .built-trust {
        padding: 60px 0;
        background-color: #f9fafb;
    }

    .built-trust .section-subtitle {
        color: #42A147;
        font-weight: 500;
    }

    .built-trust .section-title {
        font-family: 'Clash Display', sans-serif;
        font-size: 36px;
        font-weight: 700;
        color: #120E3A;
    }

    .built-trust .section-description {
        color: #333;
        max-width: 700px;
        margin: 0 auto;
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

    .built-trust .info-title {
        font-weight: 700;
        font-size: 20px;
        color: #120E3A;
    }

    .built-trust .info-title span {
        color: #42A147;
    }

    .built-trust .info-text {
        font-size: 15px;
        color: #444;
        margin-top: 10px;
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

    /* index2 */

    .features-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 30px;
        max-width: 1200px;
        margin: auto;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .feature-box {
        background-color: white;
        border-radius: 20px;
        padding: 20px 24px;
        display: flex;
        align-items: center;
        gap: 16px;
        min-width: 240px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
    }

    .feature-icon {
        background: gainsboro;
        padding: 12px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 56px;
        height: 56px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.06);
    }

    .feature-icon img {
        width: 32px;
        height: 32px;
        object-fit: contain;
    }

    .feature-text {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.4;
        color: #1f2937;
    }

    .highlight {
        color: #2a5d2e;
    }

    .card {
        background: radial-gradient(circle at top right, #1e2a39, #0e0e2a);
        padding: 60px 30px;
        text-align: center;
        color: #fff;
        display: flex;
        border-radius: 60px;
        background: #120E3A;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }

    .logo {
        background: white;
        border-radius: 15px;
        display: inline-block;
        padding: 5px 20px;
        margin-bottom: 40px;
        Width: 277px;
        height: 74px;

    }

    .logo img {
        height: 70px;
    }

    .content {
        font-size: 1.5rem;
        line-height: 1.6;
        font-weight: 400;
        background: linear-gradient(92deg, #FFF 53.42%, #42A147 99.39%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

    }

    .highlight {
        /* color: #88cc8f; */
    }

    .finance-section {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        justify-content: center;
        align-items: stretch;
        padding: 60px 20px;
        max-width: 1200px;
        margin: auto;
    }

    .left-section,
    .right-section {
        flex: 1 1 450px;
    }

    .left-section h2 {
        /* font-size: 1.8rem;
            font-weight: 700; */
        color: #1b1b3e;
        margin-bottom: 20px;
        color: #201B52;
        font-family: "Clash Display";
        font-size: 30px;
        font-style: normal;
        font-weight: 600;
        line-height: 120%;
        /* 36px */
        letter-spacing: -0.3px;
    }

    .left-section p {
        /* font-size: 1rem; */
        margin-bottom: 20px;
        /* color: #444; */
        color: #201B52;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        /* 30px */
        letter-spacing: -0.2px;
    }

    .left-section a {
        color: #1b1b3e;
        text-decoration: underline;
    }

    .read-more-btn {
        background: linear-gradient(135deg, #63d471 0%, #233329 100%);
        color: white;
        padding: 12px 24px;
        border-radius: 100px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0px 16px 50px rgba(66, 161, 71, 0.4);
    }

    .read-more-btn span {
        display: inline-block;
        background: white;
        color: #1b1b3e;
        border-radius: 50%;
        padding: 2px 8px;
        font-weight: bold;
    }

    .right-section {
        background: radial-gradient(circle at bottom left, #1b2a3d, #0f0f2e);
        color: white;
        padding: 40px;
        border-radius: 40px;
        text-align: center;
    }

    .stars {
        font-size: 1.5rem;
        color: #ffb100;
        margin-bottom: 20px;
    }

    .quote {
        /* font-size: 1rem; */
        /* line-height: 1.6; */
        margin-bottom: 30px;
        color: #FFF;
        text-align: center;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        /* 30px */
        letter-spacing: -0.2px;
    }

    .divider {
        width: 40px;
        height: 2px;
        background-color: #42a147;
        margin: 20px auto;
    }

    .author {
        /* font-weight: 700; */
        /* font-size: 1.2rem; */
        color: #FFF;
        font-family: "Clash Display";
        font-size: 25px;
        font-style: normal;
        font-weight: 600;
        line-height: 120%;
        /* 36px */
        letter-spacing: -0.3px;
    }

    .buda-section {
        display: flex;
        justify-content: center;
        gap: 40px;
        padding: 60px 5%;
        flex-wrap: wrap;
        /* background: linear-gradient(to right, #ffffff 60%, #f0f7f4 40%); */
    }

    .buda-about {
        flex: 1;
        max-width: 600px;
    }

    .buda-about h5 {
        /* color: #42A147; */
        /* font-size: 18px; */
        margin-bottom: 10px;
        color: #42A147;
        font-family: Poppins;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 130%;
        /* 28.6px */
        letter-spacing: -0.22px;
    }

    .buda-about h2 {
        /* font-weight: 700;
            font-size: 26px;
            color: #1a1a40;
            line-height: 1.4;
            margin-bottom: 15px; */
        color: #201B52;
        font-family: "Clash Display";
        font-size: 30px;
        font-style: normal;
        font-weight: 600;
        line-height: 110%;
        /* 33px */
        letter-spacing: -0.3px;
    }

    .buda-about p {
        /* font-size: 15px;
            color: #333;
            line-height: 1.7; */
        margin-bottom: 20px;
        color: #201B52;
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        /* 30px */
        letter-spacing: -0.2px;
    }

    .buda-about button {
        background: #42A147;
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 30px;
        font-weight: bold;
        cursor: pointer;
        font-size: 16px;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 5px 15px rgba(66, 161, 71, 0.3);
    }

    .buda-calculator {
        flex: 1;
        background: #eaf3ed;
        border-radius: 30px;
        padding: 30px 30px;
        max-width: 600px;
        border-radius: 60px;
        background: linear-gradient(180deg, rgba(66, 161, 71, 0.20) 0%, rgba(24, 59, 26, 0.00) 100%);
    }

    .buda-calculator h3 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #1a1a40;
    }

    .buda-slider-group {
        margin-bottom: 25px;
    }

    .buda-slider-group input[type=range] {
        width: 100%;
        accent-color: #42A147;
    }

    .buda-slider-labels {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        color: #1a1a40;
        margin-top: 5px;
    }

    .buda-calculator-summary {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid #ccc;
        font-weight: 500;
    }

    .buda-calculator-summary div strong {
        display: block;
        font-size: 22px;
        margin-top: 5px;
        color: #1a1a40;
    }

    .buda-note {
        margin-top: 20px;
        font-size: 12px;
        color: #999;
    }

    .calculator-card {
        background: linear-gradient(to bottom, #eaf3ed, #f5f7f6);
        padding: 30px;
        border-radius: 30px;
        max-width: 600px;
        margin: auto;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
    }

    .calculator-card h2 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 30px;
        color: #1a1a40;
    }

    .slider-group {
        background: #fff;
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 25px;
    }

    .slider-labels {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        font-weight: 600;
        color: #1a1a40;
        margin-top: 10px;
    }

    input[type=range] {
        width: 100%;
        height: 8px;
        border-radius: 5px;
        background: #dcdcdc;
        accent-color: #42A147;
        appearance: none;
        outline: none;
    }

    input[type=range]::-webkit-slider-thumb {
        appearance: none;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #1a1a40;
        border: 2px solid #42A147;
        cursor: pointer;
    }

    .summary {
        display: flex;
        justify-content: space-between;
        padding-top: 20px;
        border-top: 1px solid #ccc;
        font-size: 14px;
        color: #666;
        flex-wrap: wrap;
        gap: 20px;
    }

    .summary div {
        flex: 1;
        text-align: center;
    }

    .summary strong {
        display: block;
        font-size: 24px;
        color: #1a1a40;
        margin-top: 5px;
    }

    .note {
        font-size: 12px;
        color: #888;
        margin-top: 15px;
        text-align: center;
    }

    @media (max-width: 768px) {
        .finance-section {
            flex-direction: column;
            padding: 40px 20px;
        }
    }

    .inner {
        max-width: 70%;
        margin: 0 auto;
    }

    .loan-slider-container {
        padding: 60px 0;
    }

    .loan-slider-card {
        /* border-radius: 30px;
            overflow: hidden;
            background: white;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s; */
    }

    .loan-slider-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .loan-slider-title {
        font-size: 20px;
        font-weight: 700;
        color: #120E3A;
    }

    .loan-slider-text {
        font-size: 14px;
        color: #444;
        margin: 10px 0 20px;
    }

    .loan-slider-btn {
        background-color: #42A147;
        color: #fff;
        border: none;
        border-radius: 100px;
        padding: 8px 20px;
        font-size: 14px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        box-shadow: 0 10px 30px rgba(66, 161, 71, 0.4);
    }

    .loan-slider-btn svg {
        margin-left: 6px;
    }

    footer {
        background: radial-gradient(ellipse at center, #FFFFFF 20%, #D1EBD4 100%);
    }

    .btn {
        background-color: #42A147 !important;
        color: White !important;
    }

    .hidden {
        display: none;
    }

    .about-image {
        border-radius: 25px;
        overflow: hidden;

    }

    .about-image img {
        width: 100%;
        height: auto;
        display: block;
    }


    @media (max-width: 991.98px) {

        .about-card,
        .about-image {
            margin-bottom: 30px;
        }
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

        .btns {
            flex-direction: column;
        }

        .features-container {
            padding: 30px;
        }

        .feature-box {
            width: 100%;
        }
    }

    button {
        position: relative;
        transition: color 0.3s ease;
        z-index: 1;
    }

    button::after {
        content: '';
        position: absolute;
        inset: 0;
        background-color: #42A147;
        border-radius: 10rem;
        z-index: -2;
    }

    button::before {
        content: '';
        position: absolute;
        inset: 0;
        background-color: #2e7633;
        /* darker */
        width: 0%;
        transition: all 0.3s ease;
        border-radius: 10rem;
        z-index: -1;
    }

    button:hover::before {
        width: 100%;
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
    }

    ul.list-unstyled.text-muted {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    

    img.loan-slider-img.aos-init.aos-animate {
        height: 400px;
        border-radius: 40px;
    }

    .hover-blue {
        background: linear-gradient(180deg, rgba(32, 27, 82, 0.00) 0%, #201B52 100%);
    }

    .hover-overlay {
        position: absolute;
        bottom: 164px;
        left: 0;
        right: 0;
        height: 100%;
        opacity: 1;
        transition: opacity 0.3s ease;
        z-index: 1;
        height: 100px;
        border-radius: 0 0 40px 40px;
    }

    @media (max-width: 767px) {
        .svg-drag {
            width: 150px !important;
            height: 150px !important;
            top: 20% !important;
            left: 70% !important;
        }

        .svg-drag svg {
            width: 137px !important;
            height: 137px !important;
        }
    }

    a.nav-link:hover {
        background: #16164F;
        color: white;
        border-radius: 999px;
    }

    .contactarea i.bi {
        border: 1px solid #42A147;
        border-radius: 50%;
        padding: 8px;
        font-size: 20px;
        color: #42A147;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contactarea .follow-row {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 16px;
    }

    .contact-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #42A147;
        margin-right: 4px;
    }

    

    .contactarea ul li {
        color: #201B52;
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        letter-spacing: -0.2px;
        display: flex;
        gap: 10px;
    }

    .contact-card {
        background: linear-gradient(145deg, #0b0c2a, #171942);
        border-radius: 2rem;
        color: white;
    }

    .westcontact .form-control,
    .westcontact .form-check-input {
        background-color: #1a1b3a;
        border: 1px solid #444;
        color: white;
    }

    .submit-btn {
        background: linear-gradient(to right, #42A147, #4ad061);
        color: white;
        border: none;
        padding: 0.5rem 1.5rem;
        border-radius: 2rem;
        font-weight: 600;
        transition: 0.3s ease;
    }

    .submit-btn:hover {
        opacity: 0.9;
    }

    .contactarea i .bi {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        border: 1px solid #120E3A;
        color: #120E3A;
        text-decoration: none;
    }

    .flex-basis {
        flex-basis: 100%;
    }

    .b-sec {
        gap: 20px;
        justify-content: space-around;
        margin-top: 40px;
    }

    .contact-form {
        background: linear-gradient(145deg, #0b0c2a, #171942);
        border-radius: 2rem;
        color: white;
        border-radius: 60px;
        padding: 50px !important;
    }

    input {
        height: 65px;
    }

    .westcontact .form-check-input:checked {
        background-color: #42A147;
        border-color: #42A147;
    }

    .westcontact input.form-control::placeholder,
    .westcontact textarea.form-control::placeholder {
        color: rgba(255, 255, 255, 0.30);
        font-family: Poppins;
        font-size: 18px;
        font-style: normal;
        font-weight: 300;
        line-height: 130%;
        letter-spacing: -0.18px;
    }

    .follow-row img {
        width: 36px;
    }

    .nav-link.dropdown-toggle.show,
    .nav-item.show>.nav-link.dropdown-toggle {
        color: white !important;
        background-color: #16164F !important;
    }

    @media only screen and (max-width: 767px) {
        .hero-bg {
            background-size: cover !important;
            margin: 20px;
        }

        .b-sec {
            flex-direction: column !important;
        }

        .contact-form {
            border-radius: 0 !important;
        }

        .scroll-down {
            display: none;
        }

        .topnav,
        .nav-link.active {
            border-radius: 0;
            border: none;
        }

        a.nav-link:hover {
            background: #16164F;
            color: white;
            border-radius: 999px;
            border-radius: 0;
            padding: 10px 20px;
        }

    }

    .contact-data a {
        text-decoration: none;
        color: #000;
    }
</style>
<?php
$title = "ContactUs";
include 'includes/navbar.php'; ?>
<section class="hero-wrapper">
    <div class="">
        <div class="hero-section container">
            <div class="hero-bg">
                <div class="hero-content">
                    <div>
                        <h1 class="hero-title" data-aos="fade-down-right" data-aos-delay="300">Western Commercial
                            <br>Locations
                        </h1>
                        <p class="hero-text" data-aos="fade-down-right" data-aos-delay="500">Western Commercial
                            Call or visit any one of our locations in Edmonton or Red <br>
                            Deer and ask us how we can help get you safe and reliable <br>
                            cash at affordable rates with no credit check.
                            </br>
                        </p>
                    </div>
                </div>

                <a class="scroll-down text-decoration-none" href="#about-us" data-aos="fade-up">
                    Scroll Down <i class="bi bi-arrow-down-short"></i>
                </a>
            </div>
        </div>
</section>

<section class="container py-5 contactarea">
    <div class="d-flex flex-column flex-lg-row justify-content-between gap-5">

        <!-- Left Column -->
        <div class="flex-grow-1 flex-basis p-5">
            <div class="d-flex b-sec">
                <div class="mb-4">
                    <h5 class="fw-bold text-dark">Edmonton Northwest</h5>
                    <ul class="list-unstyled text-dark d-flex flex-column gap-3 contact-data">
                        <li><i class="bi bi-telephone"></i> <a href="tel:7807562274">Call us <span class="text-success"> 780–756–2274</span></a></li>
                        <li><i class="bi bi-geo-alt"></i> <a class="text-success" href="https://maps.app.goo.gl/Luxe5ovpPeqhKa3m7"> 16604 109 Ave, Edmonton</a></li>
                        <li><i class="bi bi-printer"></i> Fax 780–756–2275</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold text-dark">Red Deer</h5>
                    <ul class="list-unstyled text-dark d-flex flex-column gap-3 contact-data">
                        <li><i class="bi bi-telephone"></i> <a href="tel:4039868781">Call us <span class="text-success"> 403–986–8781</span></a></li>
                        <li><i class="bi bi-geo-alt"></i><a class="text-success" href="https://maps.app.goo.gl/2XKvJzowAQkKF2DKA"> Bay #1, 7483 50 Ave, Red Deer</a></li>
                        <li><i class="bi bi-printer"></i> Fax 403–986–8782</li>
                    </ul>
                </div>
            </div>

            <hr class="my-4">

            <div class="mb-4">
                <h5 class="fw-bold text-dark">Edmonton Southside</h5>
                <p class="text-dark mb-0">We have recently closed our Edmonton Southside location. If you
                    received a loan from this location, please be advised that our Mayfield location will be
                    taking over all files facilitated in the Southside Location and will be able to help answer
                    any questions or concerns.</p>
            </div>

            <div class="follow-row">
                <h6 class="fw-semibold text-dark m-0">Follow Us On</h6>
                <a href="#" class="social-icon linkedin"><img src="images/linkdin.svg" alt="LinkedIn"></a>
                <a href="#" class="social-icon facebook"><img src="images/facebook.svg" alt="Facebook"></a>
                <a href="#" class="social-icon twitter"><img src="images/twitter.svg" alt="Twitter"></a>
                <a href="#" class="social-icon instagram"><img src="images/insta.svg" alt="Insta"></a>
            </div>
        </div>

        <!-- Right Column (Form) -->
        <div class="flex-grow-1 contact-card p-4 flex-basis contact-form">
           
            <form id="contactForm" class="text-white">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="Enter your first name" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Enter your last name" required>
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter your number" required>

                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="smsConsent" name="sms_consent" checked>
                        <label class="form-check-label text-white small" for="smsConsent">
                            By providing my information, I understand that I may receive text messages with offers or information
                            about your products and services. Messaging frequency may vary, and data rates may apply.
                            Reply 'Opt-out' to stop receiving future texts.
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>

                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="emailConsent" name="email_consent">
                        <label class="form-check-label text-white small" for="emailConsent">
                            By providing my information, I understand that I may receive emails with offers or information about your products and services.
                            Click 'Unsubscribe' to be removed from future email communications.
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea class="form-control" name="message" placeholder="Write here..." rows="4" required></textarea>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="privacyConsent" name="privacy_consent" required>
                    <label class="form-check-label text-white small" for="privacyConsent">
                        I have read and agree to the <a href="privacy-policy.php" class="text-white fw-bold text-decoration-underline">Privacy Policy</a>.
                    </label>
                </div>

                <button type="submit" class="submit-btn">
                    Submit <span class="ms-2">➜</span>
                </button>

                <div id="formResponse" class="mt-3 text-white small"></div>
            </form>

        </div>
    </div>
</section>


<!-- <section class="my-5 container w-100">
            <div>
                <img src="images/map.png" class="w-100" alt="">
            </div>
        </section> -->



</div>

<?php include "includes/footer.php"; ?>


<script src="https://www.google.com/recaptcha/api.js?render=6Lf3AWgrAAAAAKALewXDJHSgv7HICB2sPVPIljiF"></script>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const form = this;
        const submitBtn = form.querySelector('button[type="submit"]');

        // Disable button and show "Submitting..."
        submitBtn.disabled = true;
        const originalBtnText = submitBtn.innerText;
        submitBtn.innerText = 'Submitting...';

        grecaptcha.ready(function() {
            grecaptcha.execute('6Lf3AWgrAAAAAKALewXDJHSgv7HICB2sPVPIljiF', {
                action: 'submit'
            }).then(function(token) {
                const formData = new FormData(form);
                formData.append('recaptcha_token', token);

                const data = Object.fromEntries(formData.entries());

                fetch('contact.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                    })
                    .then(async res => {
                        const result = await res.json();

                        if (result.success) {
                            document.getElementById('formResponse').innerText = 'Your message has been sent successfully!';
                            form.reset();
                            submitBtn.innerText = 'Submitted';
                        } else {
                            document.getElementById('formResponse').innerText = result.message || 'There was an error. Please try again.';
                            submitBtn.disabled = false;
                            submitBtn.innerText = originalBtnText;
                        }
                    })
                    .catch(err => {
                        document.getElementById('formResponse').innerText = 'Error: ' + err.message;
                        submitBtn.disabled = false;
                        submitBtn.innerText = originalBtnText;
                    });
            });
        });
    });
</script>