@extends('layout.main')
@section('content')
    <style>
        /* Body Css */
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Oswald', sans-serif;
        }

        p,
        a,
        span,
        strong {
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary-color: #0f6ce2;
            --color: #fff;
        }

        img {
            width: 100%;
        }

        a {
            text-decoration: unset !important;
            color: #000;
        }

        .btn {
            background-color: var(--primary-color);
            color: var(--color) !important;
            text-decoration: unset;
            padding: 14px 20px;
            border-radius: 10px;
            border: 1px solid var(--primary-color);
            transition: all 0.4s linear;
            font-size: 1rem !important;
            min-width:auto;
        }

        .btn a {
            color: var(--color);
        }

        .btn:hover {
            background-color: transparent;
            color: #000;
        }

        .btn:hover a {
            color: #000;
        }

        html,
        body {
            overflow-x: hidden;
        }

        /* Topbar Css */
        .top-bar {
            margin: 20px 0 0;
        }

        .top-bar ul {
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .top-bar ul li {
            display: inline-block;
            margin: 0 15px;
        }

        .top-bar ul li a {
            color: #000;
            text-decoration: unset;
            font-size: 16px;
        }

        .top-bar ul li a i {
            padding-right: 10px;
            color: #0f6ce2;
        }

        /* Header Css */
        header.header-row {
            margin-bottom: 20px;
        }

        .navbar-dark .navbar-brand {
            width: 20%;
        }

        .navbar-dark .navbar-brand img {
            width: 100%;
        }

        .header-row .navbar-expand-lg .navbar-nav li a {
            color: #000 !important;
            font-size: 16px;
            padding: 0 15px;
            font-weight: 500;
        }

        .header-row .navbar-expand-lg .navbar-nav li button {
            padding: 0;
            border: 0;
            background-color: transparent;
        }

        .header-row .navbar-expand-lg .navbar-nav li button a {
            background-color: var(--primary-color);
            color: var(--color) !important;
            text-decoration: unset;
            padding: 14px 35px;
            border-radius: 10px;
            border: 1px solid #0f6ce2;
            transition: all 0.4s linear;
        }

        .header-row .navbar-expand-lg .navbar-nav li button:hover a {
            background-color: transparent;
            color: #000 !important;
        }

        .toggle-change::after {
            border-top: 0;
            border-bottom: 0.3em solid;
        }

        .dropdown-toggle::after {
            vertical-align: middle;
        }

        .head-info {
            width: 20% !important;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            padding: 10px 0 0;
            border-bottom: 3px solid #0f6ce2;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu a {
            padding: 10px 25px !important;
            margin-bottom: 5px;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu a:hover {
            background: #0f6ce2;
            color: #fff !important;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu li:last-child a {
            margin: 0;
        }

        /* Banner Css */
        section.banner-row .item {
            background-image: url('../images/banner-bg1.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 200px 0;
            position: relative;
            z-index: 1;
            text-align: center;
        }

        section.banner-row .banner-1 {
            background-image: url('../images/banner-bg1.jpg');
        }

        section.banner-row .banner-2 {
            background-image: url('../images/banner-bg2.jpg');
        }

        section.banner-row .item:before {
            content: "";
            background-color: #000;
            opacity: 0.5;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .banner-stars {
            display: inline-block;
            border-top: 1px dashed #fff;
            border-bottom: 1px dashed #fff;
            width: 17%;
            padding: 5px 0;
            margin-bottom: 30px;
        }

        .banner-stars i {
            color: #fff;
            margin: 0 3px;
        }

        .banner-stars h3 {
            color: #fff;
            font-size: 14px;
            font-family: 'Poppins';
            font-weight: 400;
            margin: 5px 0 0;
        }

        .main-hdg h1 {
            color: #fff;
            font-size: 55px;
            font-weight: 700;
            line-height: 55px;
            margin-bottom: 25px;
        }

        .main-hdg p {
            color: #fff;
            font-size: 16px;
            width: 85%;
            margin: auto;
            margin-bottom: 20px;
        }

        .slider-form {
            padding: 22px;
            margin-top: 40px;
            border-radius: 90px;
            background: rgba(194, 193, 191, .9);
        }

        .slider-form .form-group .icon-bg {
            position: absolute;
            margin-top: 0;
            left: 2px;
            width: 52px;
            height: 52px;
            background-color: transparent;
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px;
            text-align: center;
            line-height: 48px;
            border-right: 0;
            z-index: 0;
            top: -3px;
        }

        .slider-form .form-control {
            background-color: #fff;
            font-size: 14px;
            font-family: 'Poppins' !important;
            color: rgba(0, 0, 0, .5);
            height: 46px;
            outline: 0;
            border-radius: 50px;
            padding-left: 47px;
            border: 1px solid transparent;
        }

        .slider-form .form-control::placeholder {
            font-size: 14px;
            font-family: 'Poppins' !important;
            color: rgba(0, 0, 0, .5);
        }

        .form-group {
            position: relative;
        }

        .offr-frm button {
            width: 100%;
        }

        .offr-frm .btn-1 {
            font-family: 'Poppins';
            font-size: 20px;
            display: inline-block;
            font-weight: 600;
            text-decoration: none;
            padding: 8px 40px;
            color: #fff;
            text-transform: capitalize;
            letter-spacing: 1px;
            border-radius: 30px;
            position: relative;
            background-color: var(--primary-color);
            border: none;
            transition: box-shadow .2s linear;
        }

        .offr-frm .btn-1:before {
            content: "";
            position: absolute;
            background-image: url(../images/double-arrow.svg);
            background-repeat: no-repeat;
            right: 17px;
            width: 17px;
            height: 17px;
            transition: transform .3s linear;
            transform-origin: center;
            top: 50%;
            transform: translateY(-50%);
        }

        /* About Css */
        section.about-row {
            padding: 80px 0;
        }

        .about-cont h2 {
            font-size: 35px;
            font-weight: 700;
            color: #000;
            line-height: 35px;
            margin-bottom: 20px;
        }

        .about-cont p {
            font-size: 16px;
            line-height: 26px;
            margin-bottom: 30px;
            width: 86%;
            color: #000;
        }

        section.about-row ul {
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
        }

        section.about-row ul li {
            list-style: none;
            margin: 0 17px;
        }

        section.about-row ul li img {
            width: 100%;
            height: 34px;
            object-fit: cover;
        }

        section.about-row .company-row {
            padding: 20px 0 0;
        }

        .about-boxs-row {
            padding-bottom: 50px;
        }

        /* Cta Css */
        section.cta {
            background-color: var(--primary-color);
            padding: 70px 0;
            position: relative;
        }

        .cta-hdg h2 {
            color: #fff;
            font-weight: 400;
            font-size: 35px;
            line-height: 35px;
            margin-bottom: 20px;
        }

        .cta-hdg p {
            font-size: 22px;
            color: #fff;
            font-family: 'Oswald';
            font-weight: 300;
            width: 70%;
            margin: auto;
            line-height: 40px;
            margin-bottom: 40px;
        }

        .cta-btns a {
            color: #fff;
        }

        .cta-btns a.btn {
            background-color: transparent;
            border-color: #fff;
            margin: 0 60px;
            animation: animate 1s linear infinite;
        }

        .cta-btns a i {
            filter: invert(1);
            margin-right: 10px;
        }

        .cta-btns a:hover {
            color: #fff;
        }

        section.cta:before {
            content: "";
            background-image: url(../images/cta-after.png);
            width: 19%;
            height: 100%;
            background-position: left;
            background-repeat: no-repeat;
            background-size: auto;
            position: absolute;
            top: 0;
            -webkit-animation: mover 1s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        section.cta:after {
            content: "";
            background-image: url(../images/cta-before.png);
            width: 26%;
            height: 100%;
            background-position: right;
            background-repeat: no-repeat;
            background-size: contain;
            position: absolute;
            top: 75px;
            right: 0;
            animation: pulse 5s infinite ease-in-out alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulse {
            from {
                transform: scale(0.8);
            }

            to {
                transform: scale(1.2);
            }
        }

        /* Mission Css */
        section.mission-row {
            padding: 150px 0 100px;
        }

        section.mission-row img {
            width: 100%;
        }

        .mission-cont h3 {
            font-size: 40px;
            line-height: 50px;
            margin-bottom: 20px;
            color: #000;
            font-weight: 700;
        }

        .mission-cont p {
            color: #000;
            font-size: 16px;
            line-height: 26px;
            width: 95%;
            margin-bottom: 25px;
        }

        .mission-cont button {
            margin-right: 20px;
        }

        section.vision-row {
            padding-bottom: 80px;
        }

        /* Choose Css */
        section.choose-row {
            padding-bottom: 80px;
        }

        section.choose-inner-row {
            padding-top: 80px;
        }

        .choose-sec {
            background-color: #fff;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            text-align: center;
            padding: 30px 0;
            margin-bottom: 20px;
            transition: all 0.4s linear;
            border-radius: 10px;
            position: relative;
            min-height: 417px;
        }

        .choose-sec:hover {
            background-color: var(--primary-color);
            cursor: pointer;
        }

        .choose-sec:before {
            width: 6px;
            content: "";
            background-color: var(--primary-color);
            height: 70px;
            position: absolute;
            left: 0;
            top: 0;
            border-radius: 10px 0px 0px 0px;
        }

        .choose-sec:hover:before {
            background-color: #000;
        }

        section.choose-inner-row .choose-sec {
            min-height: 441px;
        }

        .choose-sec img {
            width: 20%;
            height: 100px;
            object-fit: scale-down;
            margin-bottom: 20px;
        }

        .choose-sec:hover img {
            filter: invert(1);
        }

        .choose-sec:hover * {
            color: #fff;
        }

        .choose-sec h3 {
            color: #000;
            font-size: 25px;
            text-transform: capitalize;
            line-height: 25px;
            margin-bottom: 20px;
        }

        .choose-sec p {
            font-size: 16px;
            width: 80%;
            margin: auto;
        }

        /* Service Css */
        section.services-row {
            padding-bottom: 100px;
        }

        .services-head {
            margin-bottom: 50px;
        }

        .services-head h2 {
            font-size: 50px;
            color: #000;
            font-weight: 700;
            line-height: 50px;
            margin-bottom: 20px;
            text-transform: capitalize;
        }

        .services-head h3 {
            font-size: 18px;
            color: #000;
            font-weight: 500;
        }

        section.services-row .container-fluid {
            padding: 0;
        }

        section.services-row .col-lg-6 {
            margin-bottom: 10px;
        }

        section.services-row .service-lft {
            max-width: 40% !important;
            margin: auto;
            margin-right: 0;
        }

        .services-sec h3 {
            color: #000;
            font-size: 45px;
            font-weight: 700;
            line-height: 45px;
            margin-bottom: 20px;
        }

        .services-sec p {
            font-size: 16px;
            line-height: 26px;
            width: 75%;
            margin-bottom: 30px;
        }

        section.services-row .service-lft .services-sec p {
            width: 90%;
        }

        /* Work Css */
        section.work-row {
            padding-bottom: 80px;
        }

        section.work-row ul#pills-tab {
            margin-bottom: 50px !important;
        }

        section.work-row .nav-pills .nav-link {
            border: 1px solid #000;
            padding: 10px 40px;
            width: 250px;
            color: #000;
            font-family: 'Poppins';
            font-weight: 600;
            margin: 0 20px;
        }

        section.work-row .nav-pills .nav-link.active {
            background-color: var(--primary-color) !important;
            color: var(--color);
            border: 1px solid var(--primary-color);
        }

        section.work-row .nav-pills .nav-link:hover {
            background-color: var(--primary-color);
            color: var(--color);
            border-color: var(--primary-color);
        }

        .portfolio-sec img {
            height: 306px;
            object-fit: cover;
        }

        /* Testimonials Css */
        section.testimonials-row {
            padding: 90px 0;
        }

        section.testimonials-row .item h3 {
            color: #000;
            font-family: 'Poppins';
            font-weight: 600;
            font-size: 30px;
            line-height: 30px;
            margin-bottom: 25px;
        }

        section.testimonials-row .item p {
            font-size: 18px;
            color: #797979;
            line-height: 26px;
            width: 75%;
            margin: auto;
            margin-bottom: 30px;
        }

        .owl-theme .owl-dots .owl-dot span {
            background-color: #797979;
            width: 15px;
            height: 15px;
        }

        .owl-theme .owl-dots .owl-dot.active span {
            background-color: var(--primary-color);
            width: 20px;
            height: 20px;
            margin: 2px 7px;
        }

        /* Contact Css */
        section.contact-row {
            background-image: url(../images/contact-bg.jpeg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            z-index: 1;
            padding: 150px 0 120px;
        }

        section.contact-row:before {
            content: "";
            background-color: #000;
            opacity: 0.5;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        section.contact-row .container-fluid {
            padding: 0;
        }

        section.contact-row .contact-lft {
            background-image: url(../images/details-bg.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            padding: 0px 120px 0px 0;
            display: flex;
            align-items: center;
            justify-content: right;
            z-index: 11;
            height: 460px;
        }

        section.contact-row .contact-lft:before {
            content: "";
            background-color: #000;
            opacity: 0.8;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .contact-details h3 {
            background-color: #1a1a1a;
            color: #fff;
            padding: 20px 10px;
            font-size: 60px;
            max-width: 52%;
            font-weight: 700;
            margin: auto;
            margin-right: 0;
            position: relative;
            margin-bottom: 40px;
            margin-top: -130px;
        }

        .contact-details h3:before {
            content: "";
            width: 0;
            height: 0;
            border-left: 33px solid transparent;
            border-right: 0 solid transparent;
            border-top: 35px solid #1a1a1a;
            text-align: center;
            position: absolute;
            z-index: 999;
            bottom: -29px;
            right: 0;
        }

        .contact-details p {
            max-width: 52%;
            margin: auto;
            margin-right: 0;
            color: #fff;
            font-size: 16px;
            line-height: 24px;
            border-bottom: 1px solid;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .contact-details ul {
            max-width: 52%;
            margin: auto;
            margin-right: 0;
            padding: 0;
        }

        .contact-details ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        .contact-details ul li a {
            color: #fff;
            font-size: 16px;
            line-height: 24px;
        }

        .contact-form-sec h3 {
            color: #fff;
            font-size: 55px;
            line-height: 55px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .contact-form-sec p {
            color: #fff;
            font-size: 16px;
            line-height: 26px;
            margin-bottom: 25px;
        }

        .contact-form-sec {
            margin-top: -40px;
        }

        .contact-form-sec input,
        .contact-form-sec textarea {
            width: 55%;
            height: 50px;
            line-height: 50px;
            color: #495057;
            font-family: 'Poppins';
            font-size: 16px;
            font-weight: 400;
        }

        .contact-form-sec textarea {
            height: 150px;
            line-height: unset;
            margin-bottom: 20px;
        }

        .contact-form-sec input::placeholder,
        .contact-form-sec textarea::placeholder {
            color: #495057;
            font-family: 'Poppins';
            font-size: 16px;
            font-weight: 400;
        }

        .contact-form-sec button[type="submit"] {
            background-color: var(--primary-color);
            border: 1px solid var(--primary-color);
            padding: 14px 35px;
            border-radius: 10px;
            color: #fff;
            font-family: 'Poppins';
            transition: all 0.4s linear;
        }

        /* Footer Css */
        footer.footer-row {
            background-color: var(--primary-color);
            padding: 75px 0 40px;
        }

        .foot-links h4 {
            color: #fff;
            font-size: 28px;
            font-family: 'Poppins';
            font-weight: 700;
            margin-bottom: 20px;
        }

        .foot-links ul {
            margin: 0;
            padding: 0;
        }

        .foot-links ul li {
            list-style: none;
            display: inline-block;
            width: 22%;
            margin: 0 8px 10px 8px;
        }

        .foot-links ul li a {
            font-size: 15px;
            color: #fff;
            line-height: 24px;
        }

        .foot-rgt h5 {
            color: #fff;
            font-size: 28px;
            font-family: 'Poppins';
            font-weight: 700;
            margin-bottom: 20px;
        }

        .foot-rgt p {
            font-size: 14px;
            color: #fff;
            line-height: 26px;
            margin: 0;
        }

        /* Copyright Css */
        section.copyright-row {
            padding-top: 60px;
        }

        section.copyright-row p {
            color: #fff;
            font-size: 16px;
            line-height: 26px;
            margin: 0;
        }

        section.copyright-row ul {
            float: right;
            margin: 0;
            padding: 0;
        }

        section.copyright-row ul li {
            display: inline-block;
            color: #fff;
            margin: 0 5px;
        }

        section.copyright-row ul li a {
            color: #fff;
            font-size: 16px;
        }

        /*--------------------------------------------------------------
     #Popup-style
    --------------------------------------------------------------*/

        .popupform ul li {
            text-align: left;
            position: relative;
            width: 100%;
            margin: 8px 0px;
            display: block;
        }

        .popupform ul li input[type="text"],
        .popupform ul li input[type="email"],
        .popupform select,
        .popupform ul li textarea {
            background: #ffffff;
            border: #dedede 2px solid;
            padding: 10px 10px 10px 34px;
            width: 100%;
            border-radius: 6px;
            font-size: 14px;
            color: #8b758b;
            font-family: 'Poppins';
            box-shadow: none !important;
            outline: none 0px !important;
        }

        .popupform ul li i {
            position: absolute;
            top: 15px;
            left: 14px;
            color: #116de2;
        }

        .popupform ul li textarea {
            height: 161px;
        }

        .popupform ul li.last {
            text-align: center;
        }

        .popupform p.form_tagline {
            font-size: 14px;
        }

        .popupform ul li input[type="submit"] {
            background: #116de2;
            font-family: 'Clash-Semi';
            color: #fff;
            font-size: 18px;
            border: #116de2 1px solid;
            text-transform: uppercase;
            font-weight: 600;
            padding: 9px 10px;
            letter-spacing: 1px;
            outline: 0px none;
            font-family: 'Poppins';
            border-radius: 50px;
            width: 195px;
        }

        .popupform ul li input[type="submit"]:hover {
            background: #116de2;
        }

        .popupform ul li input[type="text"]:focus,
        .popupform ul li input[type="email"]:focus,
        .popupform ul li textarea:focus {
            border: #b9bbbd 2px solid !important;
        }

        .popupform {
            width: 436px;
            border-radius: 23px;
            padding: 31px 20px;
            overflow: visible;
            border-bottom: #116de2 5px solid;
        }

        .popupform h2 {
            font-size: 30px;
            color: #116de2;
            font-weight: 700;
            padding-left: 15px;
            border-left: #116de2 6px solid;
            margin-bottom: 12px;
            line-height: 35px;
            margin-top: 0;
        }

        .popupform h2+p {
            line-height: 19px;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .popupform .fancybox-close-small {
            border: #116de2 3px solid;
            background: #fff;
            border-radius: 72px;
            text-align: center;
            box-shadow: #000 0 0 10px;
            right: -14px;
            top: -13px;
            overflow: visible;
            opacity: 1;
        }

        .popupform .fancybox-close-small:after {
            color: #116de2;
            font-size: 25px;
            right: 4px;
        }

        .popupform ul {
            margin: 0;
            padding: 0;
        }

        /*Ghost Css*/
        section.writing-row {
            padding: 90px 0;
        }

        .writing-tabs-row h3.writing-head {
            color: #000;
            font-size: 30px;
            line-height: 30px;
            margin-bottom: 5px;
        }

        .writing-tabs-row div#v-pills-tab {
            width: 30%;
        }

        .writing-tabs-row div#v-pills-tab ul {
            padding: 0;
            margin: 0;
        }

        .writing-tabs-row div#v-pills-tab ul li {
            list-style: none;
        }

        .writing-tabs-row div#v-pills-tab button.active {
            background-color: #0f6ce2;
            color: #fff;
        }

        .writing-tabs-row div#v-pills-tab button {
            text-align: left;
            border: 1px solid #0f6ce2;
            margin-bottom: 3px;
            font-size: 16px;
            font-family: 'Poppins';
            color: #000;
            width: 100%;
        }

        .writing-tabs-row div#v-pills-tab button:hover {
            background-color: #0f6ce2;
            color: #fff;
        }

        .writing-tabs-row div#v-pills-tabContent {
            border: 1px solid #f0f0f0;
            padding: 20px;
            border-radius: 5px;
            width: 100%;
        }

        .writing-tabs-row div#v-pills-tabContent .tab-pane {
            padding: 14px 20px;
        }

        .writing-sec h2 {
            font-size: 40px;
            color: #000;
            line-height: 40px;
            margin-bottom: 20px;
        }

        .writing-sec p {
            color: #000;
            font-size: 16px;
            line-height: 26px;
            margin-bottom: 30px;
        }

        .writing-pkg h3 {
            font-size: 34px;
            font-weight: 700;
            line-height: 35px;
            margin-bottom: 20px;
            color: #000;
        }

        .writing-pkg ul li {
            font-family: 'Poppins';
            font-size: 16px;
            line-height: 26px;
            margin-bottom: 10px;
        }

        .writing-pkg ul {
            margin-bottom: 20px;
        }

        .writing-tabs-row div#v-pills-tabContent .row .col-lg-6:last-child {
            background-color: rgb(30 155 222 / 10%);
            padding: 10px 13px 20px;
        }

        .writing-pkg h4 {
            color: #000;
            font-size: 25px;
            line-height: 25px;
            margin-bottom: 0;
        }

        .writing-pkg h5 {
            font-family: 'Poppins';
            font-size: 16px;
            margin-top: 10px;
        }

        .writing-pkg p {
            margin-bottom: 0;
            margin-top: 10px;
            font-weight: 500;
        }

        .writing-pkg button {
            margin-top: 25px;
        }

        /* Services Page Css */
        section.inner-banner-row {
            background-image: url(../images/service-bg.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        section.pricing-banner-row {
            background-image: url(https://ultrapublishers.com/assets/images/pricing-bg.jpg);
        }

        section.about-banner-row {
            background-image: url(../images/about-bg.jpg);
            background-position: 100% 20%;
        }

        section.contact-banner-row {
            background-image: url(../images/contact-banner.jpg);
        }

        section.inner-banner-row .container-fluid {
            padding: 0;
        }

        .inner-cont {
            position: relative;
            z-index: 1;
            padding: 100px 0 100px 60px;
        }

        .inner-cont:before {
            content: "";
            background-color: #000;
            opacity: 0.7;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .inner-cont h1 {
            color: #fff;
            font-weight: 300;
            font-size: 50px;
            width: 85%;
            line-height: 65px;
            margin-bottom: 25px;
        }

        .inner-cont h2 {
            color: #0f6ce2;
            font-family: 'Poppins';
            font-size: 40px;
            width: 84%;
            line-height: 50px;
            position: relative;
        }

        .inner-cont h2:after {
            content: "";
            width: 90px;
            height: 4px;
            background-color: #0f6ce2;
            display: block;
            margin: 10px 0 40px;
        }

        .inner-cont p {
            color: #fff;
            font-size: 18px;
            line-height: 25px;
            margin-bottom: 60px;
        }

        .inner-cont button:hover a {
            color: #fff;
        }

        .writing-head {
            margin-bottom: 60px;
        }

        .writing-head h2 {
            font-size: 50px;
            color: #000;
            font-weight: 700;
            line-height: 50px;
            margin-bottom: 25px;
        }

        .writing-head h3 {
            font-family: 'Poppins';
            font-size: 18px;
            color: #000;
            line-height: 26px;
        }

        section.service-writing-row {
            padding: 90px 0;
        }

        .service-writing-sec img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: all 0.4s linear;
        }

        .writing-cont {
            background-color: #fff;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            padding: 30px 20px;
        }

        .service-writing-sec {
            margin-bottom: 30px;
            transition: all 0.4s linear;
        }

        .service-writing-sec:hover .writing-cont {
            background-color: #0f6ce2;
        }

        .service-writing-sec:hover * {
            color: #fff;
            cursor: pointer;
        }

        .service-writing-sec:hover {
            transform: scale(1.04);
        }

        .service-writing-sec h3 {
            font-size: 22px;
            color: #000;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 25px;
        }

        .service-writing-sec p {
            color: #000;
            font-size: 16px;
            line-height: 26px;
            margin-bottom: 20px;
            border-bottom: 1px solid;
            padding-bottom: 10px;
        }

        .service-writing-sec a {
            color: #000;
            font-size: 16px;
            font-weight: 600;
        }

        .service-writing-sec a i {
            color: #0f6ce2;
        }

        .progress-bar {
            margin: 0 0 10px;
            overflow: hidden;
            padding-right: 24px;
            background-color: transparent;
            margin-bottom: 15px !important;
        }

        .progress-title-holder {
            position: relative;
            padding-bottom: 5px;
            margin: 0 0 7px;
            font-size: 18px;
            line-height: 15px;
            font-weight: 600;
            color: #000;
            text-align: left;
        }

        .progress-title {
            z-index: 100;
        }

        .progress-number-wrapper {
            width: 100%;
            z-index: 10;
        }

        .progress-number-mark {
            position: absolute;
            bottom: 0;
            padding: 0;
            -moz-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
        }

        .progress-number-wrapper,
        .progress-number-mark {
            font-size: 20px;
            line-height: 24px;
            font-weight: 600;
            color: #000;
        }

        .progress-content-outter {
            height: 12px;
            background-color: #eee;
        }

        .progress-content {
            height: 21px;
            background-color: rgb(15 108 226);
            width: 0%;
            /* Initial value */
        }

        section.skills-row {
            padding-bottom: 80px;
        }

        section.skills-row .container-fluid {
            padding: 0;
        }

        section.skills-row img {
            width: 100%;
        }

        .skills-sec {
            max-width: 75%;
            margin: auto;
        }

        .skills-sec h2 {
            font-size: 50px;
            color: #000;
            line-height: 50px;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .skills-sec h3 {
            font-family: 'Poppins';
            font-size: 20px;
            color: #000;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .skills-sec button {
            margin-top: 50px;
        }

        .talk-row {
            padding: 80px 0;
            background-color: #1c1c1c;
        }

        .talk-head {
            margin-bottom: 30px;
        }

        .talk-head h2 {
            color: #fff;
            font-size: 45px;
            font-weight: 700;
            line-height: 45px;
            margin-bottom: 20px;
        }

        .talk-head h3 {
            font-family: 'Poppins';
            color: #fff;
            font-size: 20px;
            font-weight: 400;
        }

        .talk-form input {
            width: 270px;
            height: 45px;
            padding-left: 25px;
            color: #000;
            font-family: 'Poppins';
            font-size: 16px;
        }

        .talk-form input::placeholder {
            color: #000;
            font-family: 'Poppins';
            font-size: 16px;
        }

        .talk-form button[type="submit"] {
            padding: 10px 35px;
            font-family: 'Poppins';
        }

        /* Bundles page Css */
        section.bundles-banner-row {
            background-image: url(https://ultrapublishers.com/assets/images/ghost-banner.jpg);
            padding: 250px 0;
            background-position: 100% 70%;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            z-index: 1;
        }

        section.bundles-banner-row2 {
            background-image: url(https://ultrapublishers.com/assets/images/publishing-banners.jpg);
        }

        section.case-banner-row {
            background-image: url(../images/case-bg.jpg);
        }

        section.bundles-banner-row:before {
            content: "";
            background-color: #000;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .bundles-ban-cont h1 {
            color: #fff;
            font-size: 50px;
            text-transform: uppercase;
            line-height: 50px;
            position: relative;
        }

        .bundles-ban-cont h1:after {
            height: 5px;
            width: 95px;
            position: absolute;
            content: "";
            bottom: -15px;
            left: 4px;
            background-color: #0f6ce2;
        }

        section.bundles-row {
            padding: 90px 0 50px;
        }

        section.bundles-row .row .col-lg-4:nth-child(2),
        section.bundles-row2 .row .col-lg-4:nth-child(4) {
            position: relative;
        }

        section.bundles-row .row .col-lg-4:nth-child(2):before,
        section.bundles-row2 .row .col-lg-4:nth-child(4):before {
            content: "";
            background-image: url(../images/best-badges.png);
            width: 50%;
            height: 15%;
            background-repeat: no-repeat;
            background-position: right;
            background-size: contain;
            position: absolute;
            top: -55px;
            z-index: 11;
            right: -10px;
        }

        section.bundles-row2 .row .col-lg-4:nth-child(2):before {
            display: none;
        }

        section.bundles-row2 .row .col-lg-4:nth-child(4):before {
            top: -40px;
        }

        .pkg-sec {
            background-color: #fff;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            margin-bottom: 60px;
            border-radius: 10px;
            padding: 28px 50px 28px 25px;
        }

        .pkg-sec h2 {
            font-size: 30px;
            font-family: 'Poppins';
            font-weight: 700;
            color: #000;
            line-height: 35px;
            margin-bottom: 30px;
        }

        .price {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #0f6ce2;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .price .left {
            margin-right: 40px;
            position: relative;
        }

        .price .left:after {
            content: "/";
            position: absolute;
            top: -17px;
            right: -25px;
            font-size: 40px;
            font-weight: 700;
            color: #000;
        }

        .price .left h2 {
            font-size: 40px;
            margin-bottom: 0;
        }

        .price .left h2 sup {
            font-size: 40px;
            vertical-align: bottom;
        }

        .price .right strike {
            display: block;
            font-size: 18px;
            font-family: 'Poppins';
            font-weight: 600;
            line-height: 10px;
            color: #000;
        }

        .price .right span {
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 600;
            color: #000;
        }

        .pkg-sec h4 {
            color: #000;
            font-size: 20px;
            margin: 10px 0;
        }

        .pkg-sec ul.list {
            padding-left: 0px;
            margin-bottom: 30px;
            width: 100%;
            height: 300px;
            overflow-y: scroll;
        }

        .pkg-sec ul::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 5px;
        }

        .pkg-sec ul::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5;
        }

        .pkg-sec ul::-webkit-scrollbar-thumb {
            background-color: #0f6ce2;
            border-radius: 5px;
        }

        .pkg-sec ul.list li {
            font-size: 16px;
            color: #000;
            margin-bottom: 10px;
            position: relative;
            line-height: 25px;
            font-family: 'Poppins';
            text-transform: capitalize;
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
            list-style: none;
            padding-left: 23px;
        }

        .pkg-sec ul.list li:before {
            content: "";
            width: 10px;
            height: 10px;
            background-color: #000;
            display: block;
            border-radius: 50px;
            position: absolute;
            left: 0;
            top: 4px;
        }

        .pkg-flex {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .info-btns button {
            width: 100%;
            background-color: transparent;
            border: 2px solid #0f6ce2;
            font-size: 18px;
            font-weight: 500;
            padding: 10px;
            transition: all 0.4s linear;
        }

        .info-btns button:hover {
            background-color: #0f6ce2;
        }

        .info-btns button:hover a {
            color: #fff;
        }

        /* About Page Css */
        section.about-inner-row {
            padding: 70px 0;
        }

        section.about-inner-row .company-row {
            padding: 50px 0 0;
        }

        .about-sec-lft {
            border: 1px solid #000;
            padding: 50px 0;
        }

        .about-sec-lft h2 {
            color: #000;
            font-size: 50px;
            background: linear-gradient(to bottom, #0f6ce2 45%, #000 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-sec-rgt p {
            font-size: 16px;
            color: #000000ad;
            line-height: 26px;
            margin-bottom: 20px;
        }

        .company-row {
            padding: 50px 0;
        }

        .company-row .item img {
            width: 100%;
            height: 34px;
            object-fit: scale-down;
            margin-bottom: 20px;
        }

        /* Case Page Css */
        section.case-row {
            padding: 60px 0;
        }

        .case-head {
            margin-bottom: 60px;
        }

        .case-head h2 {
            color: #000;
            font-size: 35px;
            line-height: 40px;
            margin-bottom: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .case-head p {
            color: #000;
            font-size: 18px;
            line-height: 20px;
            font-weight: 600;
        }

        section.case-row .col-lg-6 {
            margin-bottom: 60px;
        }

        .review-sec {
            position: relative;
            padding: 20px 20px 60px;
        }

        .review-sec:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border: 5px solid #0f6ce2;
            border-left: 0;
            border-top: 0;
            width: 85%;
        }

        .review-sec:before {
            content: "";
            background-color: #0f6ce2;
            width: 30%;
            height: 5px;
            position: absolute;
            right: 0;
            top: 0;
        }

        .review-sec h3 {
            font-size: 36px;
            font-weight: 700;
            color: #000;
            line-height: 45px;
            margin-bottom: 20px;
        }

        .review-sec p {
            color: #000;
            font-size: 16px;
            line-height: 26px;
        }

        .review-rgt::before {
            content: "";
            left: 0;
        }

        .review-rgt::after {
            left: 0;
            right: unset;
            border: 5px solid #0f6ce2;
            border-right: 0;
            border-top: 0;
        }

        /* Service Inner Pages Css */
        section.seo-banner-row {
            background-image: url(../images/seo-banner.jpg);
        }

        section.listicles-banner-row {
            background-image: url(../images/listicles-banner.jpg);
        }

        section.ebook-banner-row {
            background-image: url(../images/ebook-banner.jpg);
        }

        section.ghost-banner-row {
            background-image: url(../images/ghost-bg.jpg);
        }

        section.editing-banner-row {
            background-image: url(../images/editing-bg.jpg);
        }

        section.publcation-banner-row {
            background-image: url(../images/publication-bg.jpg);
        }

        section.proofreading-banner-row {
            background-image: url(../images/proofreading-bg.jpg);
        }

        section.writing-banner-row {
            background-image: url(../images/writing-bg.jpg);
        }

        section.ser-inner-row {
            padding: 70px 0;
        }

        section.ser-inner-row img {
            width: 100%;
        }

        .ser-inner-cont h2 {
            font-size: 50px;
            color: #000;
            line-height: 50px;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .ser-inner-cont h4 {
            color: #000;
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 30px;
        }

        .ser-inner-cont p {
            font-size: 16px;
            width: 93%;
            line-height: 26px;
            margin-bottom: 30px;
        }

        section.service-cta-row {
            background-image: url(../images/ser-cta-banner.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 100px 0;
            position: relative;
            z-index: 1;
        }

        section.service-cta-row:before {
            content: "";
            background-color: #fff;
            opacity: 0.8;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .service-cta-cont h3 {
            font-size: 30px;
            line-height: 40px;
            font-weight: 700;
            margin-bottom: 0;
            color: #000;
            text-transform: uppercase;
        }

        /* Terms Page Css */
        section.terms-banner-row {
            background-image: url(../images/terms-banner.jpg);
        }

        section.terms-cont {
            padding: 50px 0;
        }

        section.terms-cont h2 {
            color: #000;
            font-size: 32px;
            width: 80%;
            line-height: 32px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        section.terms-cont p {
            font-size: 16px;
            line-height: 26px;
            margin-bottom: 20px;
        }

        section.terms-cont li {
            font-size: 16px;
            line-height: 26px;
            margin-bottom: 5px;
            font-family: 'Poppins', sans-serif;
        }

        section.terms-cont p br {
            display: none;
        }

        section.terms-cont a {
            color: #0f6ce2;
        }

        section.terms-cont strong {
            color: #000;
        }

        /* Responsive Css */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .top-bar {
                display: none;
            }

            .navbar-dark .navbar-brand {
                width: 58% !important;
                padding: 0;
            }

            .navbar-dark .navbar-toggler-icon {
                filter: brightness(0.1);
            }

            header.header-row {
                margin-bottom: 0;
            }

            .header-row .navbar-expand-lg .navbar-nav li a {
                text-align: center;
                font-size: 14px;
                padding: 0;
                margin-bottom: 5px;
            }

            .navbar-nav {
                margin-top: 20px;
            }

            .head-info {
                width: 100% !important;
                margin-bottom: 20px;
            }

            .head-info li {
                text-align: center;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu a {
                padding: 5px !important;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                width: 70%;
                margin: auto;
                padding: 0;
            }

            .navbar-dark .navbar-brand img {
                height: 50px !important;
                object-fit: scale-down !important;
            }

            section.banner-row .item {
                padding: 50px 0;
            }

            .banner-stars {
                width: 62% !important;
                margin-bottom: 15px;
            }

            .banner-stars h3 {
                font-size: 12px;
            }

            .banner-stars i {
                margin: 0;
            }

            .main-hdg h1 {
                font-size: 25px;
                line-height: 40px;
                margin-bottom: 10px;
            }

            .main-hdg p {
                font-size: 14px;
                width: 100%;
                line-height: 20px;
                margin-bottom: 10px;
            }

            .slider-form {
                margin-top: 30px;
                border-radius: 20px;
            }

            .slider-form .form-control {
                font-size: 13px;
                height: 40px;
                padding-left: 40px;
            }

            .slider-form .form-control::placeholder {
                font-size: 13px;
            }

            .slider-form .px-2 {
                margin-bottom: 15px !important;
            }

            .slider-form .form-group .icon-bg {
                top: -7px;
                width: 40px;
            }

            .offr-frm .btn-1 {
                font-size: 16px;
            }

            .offr-frm .btn-1:before {
                width: 14px;
                right: 40px;
                top: 51%;
            }

            section.about-row {
                padding: 40px 0;
                text-align: center;
            }

            .about-cont h2 {
                font-size: 22px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .about-cont p {
                font-size: 14px;
                width: 100%;
                line-height: 24px;
                margin-bottom: 10px;
            }

            section.about-banner-row .inner-cont p br {
                display: none;
            }

            .about-boxs-row {
                text-align: center;
            }

            .about-boxs-row .row-reverse {
                flex-direction: column-reverse;
                margin-top: 0 !important;
            }

            .about-boxs-row img {
                margin-bottom: 20px;
            }

            section.vision-row {
                text-align: center;
                padding-bottom: 30px;
            }

            section.vision-row img {
                width: 100%;
                margin-bottom: 20px;
            }

            .company-row .item img {
                margin-bottom: 10px;
            }

            .owl-theme .owl-dots .owl-dot span {
                width: 12px;
                height: 12px;
                margin: 5px 4px;
            }

            .owl-theme .owl-dots .owl-dot.active span {
                width: 15px;
                height: 15px;
                margin: 3px 4px;
            }

            section.cta {
                padding: 40px 0;
            }

            section.cta:before,
            section.cta:after {
                display: none;
            }

            .cta-hdg h2 {
                font-size: 22px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .cta-hdg p {
                font-size: 18px;
                width: 100%;
                line-height: 30px;
                margin-bottom: 20px;
            }

            .cta-btns a {
                margin: 12px 60px !important;
                font-size: 14px;
                display: block;
            }

            section.mission-row {
                padding: 50px 0;
                text-align: center;
            }

            .mission-cont h3 {
                font-size: 22px;
                line-height: 30px;
                margin-bottom: 12px;
            }

            .mission-cont p {
                font-size: 14px;
                width: 100%;
                line-height: 24px;
                margin-bottom: 20px;
            }

            .btn {
                padding: 14px 25px;
                font-size: 14px;
            }

            .mission-cont button {
                margin: 0;
                margin-bottom: 30px;
            }

            section.mission-row img {
                width: 100%;
            }

            .choose-sec {
                padding: 10px 0 25px;
                min-height: auto;
            }

            .choose-sec img {
                margin-bottom: 5px;
            }

            .choose-sec h3 {
                font-size: 20px;
                line-height: 20px;
                margin-bottom: 10px;
            }

            .choose-sec p {
                font-size: 14px;
                width: 85%;
            }

            section.choose-row {
                padding-bottom: 40px;
            }

            section.choose-inner-row {
                padding-top: 40px;
                text-align: center;
            }

            section.choose-inner-row h2 {
                font-size: 23px;
            }

            section.choose-inner-row .choose-sec {
                min-height: auto;
            }

            section.choose-inner-row .col-lg-12.mt-5 {
                margin-top: 0 !important;
            }

            section.choose-inner-row .col-lg-12.mt-5 .ser-inner-cont {
                margin-bottom: 0;
            }

            .services-head h2 {
                font-size: 30px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .services-head h3 {
                font-size: 16px;
                margin-bottom: 0 !important;
            }

            .services-head {
                margin-bottom: 30px;
            }

            section.services-row {
                padding-bottom: 20px;
                text-align: center;
            }

            section.services-row .reverse-row {
                flex-direction: column-reverse;
            }

            section.services-row .service-lft {
                max-width: 100% !important;
            }

            .services-sec {
                margin: 20px 0;
            }

            .services-sec h3 {
                font-size: 25px;
                line-height: 25px;
                margin-bottom: 10px;
            }

            .services-sec p {
                font-size: 14px;
                width: 92%;
                margin: auto;
                line-height: 24px;
                margin-bottom: 20px;
            }

            section.work-row ul#pills-tab {
                margin-bottom: 0px !important;
            }

            section.work-row ul#pills-tab li {
                display: inline-block;
                width: 50%;
                padding: 0 !important;
                margin: 0 0;
            }

            section.work-row .nav-pills .nav-link {
                padding: 10px;
                width: 135px;
                margin: 0 auto 15px;
                font-size: 14px;
            }

            .portfolio-sec img {
                width: 100%;
                height: auto;
                margin-bottom: 10px;
            }

            section.work-row {
                padding-bottom: 50px;
            }

            section.testimonials-row {
                padding: 50px 0;
            }

            section.testimonials-row .item h3 {
                font-size: 22px;
                line-height: 22px;
                margin-bottom: 15px;
            }

            section.testimonials-row .item p {
                font-size: 14px;
                width: 100%;
                line-height: 24px;
                margin-bottom: 0;
            }

            .contact-details h3 {
                font-size: 25px;
                margin: 0;
                max-width: 100%;
                background-color: transparent;
                padding: 0;
                margin-bottom: 15px;
            }

            .contact-details {
                text-align: center;
            }

            section.contact-row {
                padding: 50px 0;
                text-align: center;
            }

            section.contact-row .contact-lft {
                background-image: unset;
                padding: 0;
                justify-content: center;
                height: auto;
            }

            section.contact-row .contact-lft:before {
                display: none;
            }

            .contact-details h3:before {
                display: none;
            }

            .contact-details p {
                max-width: 100%;
                font-size: 14px;
                padding-bottom: 10px;
                margin-bottom: 10px;
                line-height: 22px;
            }

            .contact-details ul {
                max-width: 100%;
            }

            .contact-details ul li {
                margin-bottom: 5px;
            }

            .contact-details ul li a {
                font-size: 14px;
                line-height: 20px;
            }

            .contact-form-sec {
                margin-top: 20px;
            }

            .contact-form-sec h3 {
                font-size: 30px;
                line-height: 30px;
                margin-bottom: 15px;
            }

            .contact-form-sec p {
                font-size: 14px;
                line-height: 23px;
                margin-bottom: 20px;
            }

            .contact-form-sec input,
            .contact-form-sec textarea {
                width: 95%;
                margin: auto;
                margin-bottom: 10px;
                height: 40px;
                font-size: 14px;
            }

            .contact-form-sec br {
                display: none;
            }

            .contact-form-sec textarea {
                height: 90px;
                margin-bottom: 20px;
            }

            .contact-form-sec input::placeholder,
            .contact-form-sec textarea::placeholder {
                font-size: 14px;
            }

            .contact-form-sec button[type="submit"] {
                font-size: 14px;
            }

            footer.footer-row {
                padding: 50px 0 30px;
                text-align: center;
            }

            .foot-links h4 {
                font-size: 22px;
                line-height: 22px;
                margin-bottom: 10px;
            }

            .foot-links ul li {
                width: 100%;
                margin: 0 0 5px;
            }

            .foot-links ul li a {
                font-size: 14px;
                line-height: 22px;
            }

            .foot-links {
                margin-bottom: 20px;
            }

            .foot-rgt h5 {
                font-size: 22px;
                line-height: 22px;
                margin-bottom: 10px;
            }

            .foot-rgt p {
                font-size: 14px;
                width: 100% !important;
                line-height: 24px;
            }

            section.copyright-row {
                margin-top: 30px;
                padding: 0;
            }

            section.copyright-row p {
                font-size: 14px;
                margin-bottom: 5px;
            }

            section.copyright-row ul li {
                margin: 0;
            }

            section.copyright-row ul li a {
                font-size: 14px;
            }

            section.copyright-row ul {
                float: unset;
            }

            .inner-cont {
                padding: 50px 0;
                text-align: center;
            }

            .inner-cont h1 {
                width: 90%;
                font-size: 22px;
                line-height: 30px;
                margin: auto;
                margin-bottom: 10px;
            }

            .inner-cont h2 {
                margin: auto;
                font-size: 18px;
                line-height: 24px;
            }

            .inner-cont h2:after {
                margin: 15px auto;
            }

            .inner-cont p {
                font-size: 14px;
                margin-bottom: 20px;
            }

            section.service-writing-row {
                padding: 50px 0;
            }

            .writing-head h2 {
                font-size: 25px;
                line-height: 35px;
                margin-bottom: 10px;
            }

            .writing-head h3 {
                font-size: 16px;
                line-height: 26px;
                margin-bottom: 0;
            }

            .writing-head {
                margin-bottom: 30px;
            }

            .service-writing-sec {
                text-align: center;
                margin-bottom: 20px;
            }

            .writing-cont {
                padding: 15px 20px;
            }

            .service-writing-sec h3 {
                font-size: 18px;
                line-height: 20px;
                margin-bottom: 10px;
            }

            .service-writing-sec p {
                font-size: 14px;
                line-height: 20px;
                margin-bottom: 10px;
            }

            .service-writing-sec a {
                font-size: 14px;
            }

            section.skills-row {
                padding-bottom: 50px;
            }

            .skills-sec {
                text-align: center;
                max-width: 85%;
                margin: 50px auto 0;
            }

            .skills-sec h2 {
                font-size: 28px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .skills-sec h3 {
                font-size: 16px;
                line-height: 16px;
            }

            .progress-title-holder {
                font-size: 16px;
                padding-bottom: 0px;
            }

            .progress-number-wrapper,
            .progress-number-mark {
                font-size: 18px;
            }

            .skills-sec button {
                margin: 15px;
            }

            .talk-row {
                padding: 40px 0;
            }

            .talk-head h2 {
                font-size: 28px;
                line-height: 40px;
                margin-bottom: 10px;
            }

            .talk-head h3 {
                font-size: 16px;
                margin-bottom: 0;
            }

            .talk-head {
                margin-bottom: 45px;
            }

            .talk-form {
                text-align: center;
            }

            .talk-form input {
                width: 100%;
                height: 40px;
                margin-bottom: 10px;
                font-size: 14px;
                padding-left: 15px;
            }

            .talk-form .col-12 {
                margin: 0;
            }

            .talk-form input::placeholder {
                font-size: 14px;
            }

            .talk-form button[type="submit"] {
                margin-top: 20px;
            }

            section.about-inner-row {
                padding: 40px 0;
            }

            .about-sec-lft {
                padding: 20px 0;
                margin-bottom: 20px;
            }

            .about-sec-lft h2 {
                font-size: 30px;
            }

            .about-sec-lft h2 br {
                display: none;
            }

            .about-sec-rgt p {
                text-align: center;
                font-size: 14px;
                line-height: 24px;
                margin-bottom: 10px;
            }

            section.about-inner-row .company-row {
                padding-top: 30px;
            }

            section.bundles-banner-row {
                padding: 70px 0;
                text-align: center;
            }

            .bundles-ban-cont h1 {
                font-size: 28px;
                line-height: 38px;
            }

            .bundles-ban-cont h1:after {
                left: 0;
                right: 0;
                margin: auto;
            }

            section.case-row {
                padding: 40px 0;
            }

            .case-head h2 {
                font-size: 25px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .case-head p {
                font-size: 16px;
            }

            .case-head {
                margin-bottom: 30px;
            }

            section.case-row .col-lg-6 {
                margin-bottom: 20px;
            }

            .review-sec {
                padding: 0;
                text-align: center;
            }

            .review-sec:before,
            .review-sec:after {
                display: none;
            }

            .review-sec h3 {
                font-size: 22px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .review-sec p {
                font-size: 14px;
                line-height: 24px;
                margin-bottom: 0;
            }

            section.writing-row {
                padding: 50px 0;
            }

            .writing-tabs-row h3.writing-head {
                text-align: center;
                margin-bottom: 30px;
            }

            .writing-tabs-row .d-flex {
                display: block !important;
                text-align: center;
            }

            .writing-tabs-row div#v-pills-tab {
                width: 100%;
                margin-bottom: 20px;
            }

            .writing-tabs-row div#v-pills-tab button {
                text-align: center;
            }

            .writing-tabs-row div#v-pills-tabContent {
                padding: 0;
            }

            .writing-sec h2 {
                font-size: 23px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .writing-sec p {
                font-size: 14px;
                line-height: 24px;
                margin-bottom: 20px;
            }

            .writing-pkg h3 {
                font-size: 22px;
                line-height: 22px;
                margin-bottom: 10px;
            }

            .writing-pkg ul li {
                text-align: left;
                font-size: 14px;
                margin-bottom: 5px;
                line-height: 24px;
            }

            .writing-pkg ul {
                padding-left: 15px;
                margin-bottom: 15px;
            }

            .writing-pkg h4 {
                font-size: 20px;
            }

            .writing-pkg button {
                margin-top: 15px;
            }

            .writing-tabs-row div#v-pills-tabContent .row .col-lg-6:last-child {
                margin-top: 20px;
            }

            .writing-pkg p {
                margin-bottom: 0;
            }

            .writing-pkg h5 {
                font-size: 14px;
                line-height: 22px;
            }

            section.bundles-row {
                padding: 50px 0;
            }

            .pkg-sec h2 {
                font-size: 25px;
                text-align: center;
                line-height: 25px;
                margin-bottom: 20px;
            }

            .price {
                flex-direction: column;
            }

            .price .left {
                margin: 0;
                margin-bottom: 12px;
            }

            .price .left h2 {
                font-size: 28px;
            }

            .price .left h2 sup {
                font-size: 28px;
            }

            .price .left:after {
                text-align: center;
                font-size: 28px;
                top: -12px;
                margin-bottom: 10px;
                right: -13px;
            }

            .right {
                text-align: center;
            }

            .price .right strike {
                font-size: 16px;
            }

            .price .right span {
                font-size: 16px;
            }

            .pkg-sec ul.list li {
                font-size: 14px;
                line-height: 20px;
                font-weight: 400;
            }

            .pkg-sec ul.list li:before {
                top: 8px;
            }

            .pkg-flex {
                flex-direction: column;
                align-items: center;
                margin-bottom: 15px;
            }

            .pkg-flex button {
                margin-bottom: 10px;
            }

            .info-btns button {
                font-size: 14px;
                padding: 10px 5px;
            }

            section.bundles-row .row .col-lg-4:nth-child(2):before,
            section.bundles-row2 .row .col-lg-4:nth-child(4):before {
                display: none;
            }

            .pkg-sec {
                margin-bottom: 30px;
                padding-right: 25px;
            }

            .pkg-sec h4 {
                text-align: center;
                margin-bottom: 20px;
                font-size: 18px;
            }

            section.ser-inner-row {
                padding: 50px 0;
                text-align: center;
            }

            .ser-inner-cont {
                margin-bottom: 30px;
            }

            .ser-inner-cont h2 {
                font-size: 28px;
                line-height: 30px;
            }

            .ser-inner-cont h4 {
                font-size: 14px;
                margin-bottom: 10px;
            }

            .ser-inner-cont p {
                font-size: 14px;
                width: 100%;
                line-height: 24px;
                margin-bottom: 15px;
            }

            section.service-cta-row {
                padding: 50px 0;
                text-align: center;
            }

            .service-cta-cont h3 {
                font-size: 22px;
                line-height: 35px;
                margin-bottom: 20px;
            }

            section.terms-cont {
                text-align: center;
                padding: 30px 0;
            }

            section.terms-cont h2 {
                width: 100%;
                font-size: 25px;
                line-height: 30px;
            }

            section.terms-cont p {
                font-size: 14px;
                line-height: 24px;
                margin-bottom: 10px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1000px) {
            .top-bar {
                display: none;
            }

            .navbar-dark .navbar-brand {
                width: 35% !important;
                padding: 0;
            }

            .navbar-dark .navbar-toggler-icon {
                filter: brightness(0.1);
            }

            header.header-row {
                margin-bottom: 0;
            }

            .header-row .navbar-expand-lg .navbar-nav li a {
                font-size: 16px;
                padding: 0;
                margin-bottom: 5px;
            }

            .navbar-nav {
                margin-top: 20px;
            }

            .head-info {
                width: 100% !important;
                margin-bottom: 20px;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu a {
                padding: 5px !important;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                width: 30%;
                padding: 0;
            }

            .navbar-dark .navbar-brand img {
                height: 50px;
                object-fit: scale-down;
            }

            section.banner-row .item {
                padding: 50px 0;
            }

            .banner-stars {
                width: 30% !important;
                margin-bottom: 15px;
            }

            .banner-stars h3 {
                font-size: 14px;
            }

            .banner-stars i {
                margin: 0;
            }

            .main-hdg h1 {
                font-size: 38px;
                line-height: 50px;
                margin-bottom: 10px;
            }

            .main-hdg p {
                font-size: 15px;
                width: 100%;
                line-height: 22px;
                margin-bottom: 10px;
            }

            .slider-form {
                margin-top: 30px;
                border-radius: 20px;
            }

            .slider-form .form-control {
                font-size: 13px;
                height: 40px;
                padding-left: 40px;
            }

            .slider-form .form-control::placeholder {
                font-size: 13px;
            }

            .slider-form .px-2 {
                margin-bottom: 15px !important;
            }

            .slider-form .form-group .icon-bg {
                top: -7px;
                width: 40px;
            }

            .offr-frm .btn-1 {
                font-size: 16px;
            }

            .offr-frm .btn-1:before {
                width: 14px;
                right: 40px;
                top: 51%;
            }

            section.about-row {
                padding: 40px 0;
                text-align: center;
            }

            .about-cont h2 {
                font-size: 28px;
                line-height: 40px;
                margin-bottom: 10px;
            }

            .about-cont p {
                font-size: 15px;
                width: 100%;
                line-height: 24px;
                margin-bottom: 10px;
            }

            section.vision-row {
                padding-bottom: 50px;
            }

            section.vision-row img {
                width: 100%;
                height: 400px;
                object-fit: cover;
            }

            section.vision-row .row {
                align-items: inherit !important;
            }

            .company-row .item img {
                margin-bottom: 10px;
            }

            .owl-theme .owl-dots .owl-dot span {
                width: 12px;
                height: 12px;
                margin: 5px 4px;
            }

            .owl-theme .owl-dots .owl-dot.active span {
                width: 15px;
                height: 15px;
                margin: 3px 4px;
            }

            section.cta {
                padding: 40px 0;
            }

            section.cta:before,
            section.cta:after {
                display: none;
            }

            .cta-hdg h2 {
                font-size: 26px;
                line-height: 30px;
                margin: auto;
                margin-bottom: 10px;
                width: 85%;
            }

            .cta-hdg p {
                font-size: 20px;
                width: 100%;
                line-height: 30px;
                margin-bottom: 20px;
            }

            .cta-btns a.btn {
                font-size: 15px;
                margin: 0 20px !important;
            }

            section.mission-row {
                padding: 50px 0;
                text-align: center;
            }

            .mission-cont {
                text-align: left;
            }

            .mission-cont h3 {
                font-size: 26px;
                line-height: 34px;
                margin-bottom: 12px;
            }

            .mission-cont p {
                font-size: 15px;
                width: 100%;
                line-height: 24px;
                margin-bottom: 20px;
            }

            .btn {
                font-size: 14px;
            }

            .mission-cont button {
                margin: 0;
                margin-bottom: 30px;
            }

            section.mission-row img {
                width: 100%;
            }

            section.choose-row .row {
                justify-content: center;
            }

            .choose-sec {
                padding: 10px 0 25px;
            }

            .choose-sec img {
                margin-bottom: 5px;
            }

            .choose-sec h3 {
                font-size: 22px;
                line-height: 25px;
                margin-bottom: 10px;
            }

            .choose-sec p {
                font-size: 14px;
                width: 85%;
            }

            section.choose-row {
                padding-bottom: 40px;
            }

            section.choose-inner-row {
                padding-top: 50px;
            }

            section.choose-inner-row h2 {
                line-height: 50px;
            }

            section.choose-inner-row .choose-sec {
                min-height: 365px;
            }

            .services-head h2 {
                font-size: 38px;
                line-height: 38px;
                margin-bottom: 15px;
            }

            .services-head h3 {
                font-size: 16px;
                margin-bottom: 0 !important;
            }

            .services-head {
                margin-bottom: 30px;
            }

            section.services-row {
                padding-bottom: 20px;
            }

            section.services-row .service-lft {
                max-width: 100% !important;
            }

            .services-sec {
                margin: 20px 0;
            }

            .services-sec h3 {
                font-size: 30px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .services-sec p {
                font-size: 14px;
                width: 92%;
                line-height: 24px;
                margin-bottom: 20px;
            }

            section.work-row ul#pills-tab {
                margin-bottom: 0px !important;
            }

            section.work-row ul#pills-tab li {
                display: inline-block;
                width: 33%;
                padding: 0 !important;
                margin: 0 0;
            }

            section.work-row .nav-pills .nav-link {
                padding: 10px;
                width: 215px;
                margin: 0 auto 15px;
                font-size: 15px;
            }

            .portfolio-sec img {
                width: 100%;
                height: auto;
                margin-bottom: 10px;
            }

            section.work-row {
                padding-bottom: 50px;
            }

            section.testimonials-row {
                padding: 50px 0;
            }

            section.testimonials-row .item h3 {
                font-size: 25px;
                line-height: 25px;
                margin-bottom: 15px;
            }

            section.testimonials-row .item p {
                font-size: 16px;
                width: 100%;
                line-height: 24px;
                margin-bottom: 0;
            }

            section.contact-row {
                padding: 50px 0;
            }

            .contact-details h3 {
                font-size: 25px;
                max-width: 85%;
            }

            section.contact-row .contact-lft {
                padding-right: 60px;
                height: 336px;
            }

            .contact-details p {
                max-width: 85%;
                line-height: 26px;
                padding-bottom: 10px;
                margin-bottom: 10px;
                font-size: 15px;
            }

            .contact-details p br {
                display: none;
            }

            .contact-details ul {
                max-width: 85%;
            }

            .contact-details ul li {
                margin-bottom: 0px;
            }

            .contact-details ul li a {
                font-size: 15px;
            }

            .contact-form-sec {
                margin-top: -15px;
            }

            .contact-form-sec h3 {
                font-size: 30px;
                line-height: 30px;
                margin-bottom: 15px;
            }

            .contact-form-sec p {
                font-size: 14px;
                line-height: 23px;
                margin-bottom: 20px;
            }

            .contact-form-sec input,
            .contact-form-sec textarea {
                width: 95%;
                margin: auto;
                margin-bottom: 10px;
                height: 40px;
                font-size: 14px;
            }

            .contact-form-sec br {
                display: none;
            }

            .contact-form-sec textarea {
                height: 90px;
                margin-bottom: 20px;
            }

            .contact-form-sec input::placeholder,
            .contact-form-sec textarea::placeholder {
                font-size: 14px;
            }

            .contact-form-sec button[type="submit"] {
                font-size: 14px;
            }

            footer.footer-row {
                padding: 50px 0 30px;
                text-align: center;
            }

            .foot-links h4 {
                font-size: 22px;
                line-height: 22px;
                margin-bottom: 10px;
            }

            .foot-links ul li {
                width: 100%;
                margin: 0 0 5px;
            }

            .foot-links ul li a {
                font-size: 14px;
                line-height: 22px;
            }

            .foot-links {
                margin-bottom: 20px;
            }

            .foot-rgt h5 {
                font-size: 22px;
                line-height: 22px;
                margin-bottom: 10px;
            }

            .foot-rgt p {
                font-size: 14px;
                line-height: 24px;
            }

            section.copyright-row {
                margin-top: 30px;
                padding: 0;
            }

            section.copyright-row p {
                font-size: 14px;
                margin-bottom: 5px;
            }

            section.copyright-row ul li {
                margin: 0;
            }

            section.copyright-row ul li a {
                font-size: 14px;
            }

            section.copyright-row ul {
                float: unset;
            }

            .inner-cont {
                padding: 50px 35px;
            }

            .inner-cont h1 {
                font-size: 28px;
                width: 100%;
                line-height: 40px;
                margin-bottom: 10px;
            }

            .inner-cont h2 {
                font-size: 20px;
                line-height: 26px;
                width: 100%;
            }

            .inner-cont h2:after {
                margin: 15px 0 30px;
            }

            .inner-cont p {
                font-size: 16px;
                margin-bottom: 30px;
            }

            section.service-writing-row {
                padding: 50px 0;
            }

            .writing-head h2 {
                font-size: 35px;
                line-height: 40px;
                margin-bottom: 15px;
            }

            .writing-head h3 {
                font-size: 16px;
                line-height: 26px;
                margin-bottom: 0;
            }

            .writing-head {
                margin-bottom: 30px;
            }

            section.service-writing-row .row {
                justify-content: center;
            }

            .service-writing-sec {
                text-align: center;
                margin-bottom: 20px;
            }

            .writing-cont {
                padding: 15px 20px;
            }

            .service-writing-sec h3 {
                font-size: 18px;
                line-height: 20px;
                margin-bottom: 10px;
            }

            .service-writing-sec p {
                font-size: 14px;
                line-height: 20px;
                margin-bottom: 10px;
            }

            .service-writing-sec a {
                font-size: 14px;
            }

            section.skills-row {
                padding-bottom: 50px;
            }

            .skills-sec {
                text-align: center;
                max-width: 85%;
                margin: 50px auto 0;
            }

            .skills-sec h2 {
                font-size: 28px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .skills-sec h3 {
                font-size: 16px;
                line-height: 16px;
            }

            .progress-title-holder {
                font-size: 16px;
                padding-bottom: 0px;
            }

            .progress-number-wrapper,
            .progress-number-mark {
                font-size: 18px;
            }

            .skills-sec button {
                margin: 15px;
            }

            .talk-row {
                padding: 40px 0;
            }

            .talk-head h2 {
                font-size: 28px;
                line-height: 40px;
                margin-bottom: 10px;
            }

            .talk-head h3 {
                font-size: 16px;
                margin-bottom: 0;
            }

            .talk-head {
                margin-bottom: 45px;
            }

            .talk-form {
                text-align: center;
            }

            .talk-form input {
                width: 100%;
                height: 40px;
                margin-bottom: 0px;
                font-size: 14px;
                padding-left: 15px;
            }

            .talk-form .col-12 {
                margin: 0;
                margin-bottom: 10px;
                padding-top: 0;
                width: 50%;
            }

            .talk-form input::placeholder {
                font-size: 14px;
            }

            .talk-form button[type="submit"] {
                margin-top: 0px;
                width: 100%;
            }

            section.about-inner-row {
                padding: 40px 0;
            }

            .about-sec-lft {
                padding: 20px 0;
                margin-bottom: 20px;
            }

            .about-sec-lft h2 {
                font-size: 35px;
            }

            .about-sec-lft h2 br {
                display: none;
            }

            .about-sec-rgt p {
                text-align: center;
                font-size: 14px;
                line-height: 24px;
                margin-bottom: 10px;
            }

            section.about-inner-row .company-row {
                padding-top: 30px;
            }

            section.bundles-banner-row {
                padding: 70px 0 !important;
                text-align: center;
            }

            .bundles-ban-cont h1 {
                font-size: 35px !important;
                line-height: 45px !important;
            }

            .bundles-ban-cont h1:after {
                left: 0;
                right: 0;
                margin: auto;
            }

            section.case-row {
                padding: 40px 0;
            }

            .case-head h2 {
                font-size: 35px;
                line-height: 35px;
                margin-bottom: 10px;
            }

            .case-head p {
                font-size: 16px;
            }

            .case-head {
                margin-bottom: 30px;
            }

            section.case-row .col-lg-6 {
                margin-bottom: 20px;
            }

            .review-sec {
                padding: 0;
            }

            .review-sec:before,
            .review-sec:after {
                display: none;
            }

            .review-sec h3 {
                font-size: 22px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .review-sec p {
                font-size: 14px;
                line-height: 24px;
                margin-bottom: 0;
            }

            section.writing-row {
                padding: 50px 0;
            }

            .writing-tabs-row h3.writing-head {
                text-align: center;
                margin-bottom: 30px;
            }

            .writing-tabs-row .d-flex {
                display: block !important;
                text-align: center;
            }

            .writing-tabs-row div#v-pills-tab {
                width: 100%;
                margin-bottom: 20px;
                flex-direction: unset !important;
                justify-content: center;
            }

            .writing-tabs-row div#v-pills-tab button {
                font-size: 14px;
                padding: 0;
                height: 42px;
                text-align: center;
                width: 32%;
                margin: 0 4px 10px;
            }

            .writing-tabs-row div#v-pills-tabContent {
                padding: 0;
            }

            .writing-sec h2 {
                font-size: 23px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            .writing-sec p {
                font-size: 14px;
                line-height: 24px;
                margin-bottom: 20px;
            }

            .writing-pkg h3 {
                font-size: 22px;
                line-height: 22px;
                margin-bottom: 10px;
            }

            .writing-pkg ul li {
                text-align: left;
                font-size: 14px;
                margin-bottom: 5px;
                line-height: 24px;
            }

            .writing-pkg ul {
                padding-left: 15px;
                margin-bottom: 15px;
            }

            .writing-pkg h4 {
                font-size: 20px;
            }

            .writing-pkg button {
                margin-top: 15px;
            }

            .writing-tabs-row div#v-pills-tabContent .row .col-lg-6:last-child {
                margin-top: 20px;
            }

            .writing-pkg p {
                margin-bottom: 0;
            }

            .writing-pkg h5 {
                font-size: 14px;
                line-height: 22px;
            }

            section.bundles-row {
                padding: 50px 0;
            }

            .pkg-sec h2 {
                font-size: 28px;
                text-align: center;
                line-height: 25px;
                margin-bottom: 20px;
            }

            .price {
                flex-direction: column;
            }

            .price .left {
                margin: 0;
                margin-bottom: 12px;
            }

            .price .left h2 {
                font-size: 30px;
            }

            .price .left h2 sup {
                font-size: 30px;
            }

            .price .left:after {
                text-align: center;
                font-size: 30px;
                top: -12px;
                margin-bottom: 10px;
                right: -13px;
            }

            .right {
                text-align: center;
            }

            .price .right strike {
                font-size: 17px;
            }

            .price .right span {
                font-size: 17px;
            }

            .pkg-sec ul.list li {
                font-size: 14px;
                line-height: 20px;
                font-weight: 400;
            }

            .pkg-sec ul.list li:before {
                top: 8px;
            }

            .pkg-flex {
                align-items: center;
                margin-bottom: 15px;
            }

            .pkg-flex button {
                margin-bottom: 10px;
            }

            .info-btns button {
                font-size: 16px;
                padding: 10px 5px;
            }

            section.bundles-row .row .col-lg-4:nth-child(2):before,
            section.bundles-row2 .row .col-lg-4:nth-child(4):before {
                display: none;
            }

            .pkg-sec {
                margin-bottom: 30px;
                padding-right: 25px;
            }

            .pkg-sec h4 {
                text-align: center;
                margin-bottom: 20px;
                font-size: 18px;
            }

            section.ser-inner-row {
                padding: 60px 0;
            }

            .ser-inner-cont h2 {
                font-size: 40px;
                line-height: 40px;
            }

            .ser-inner-cont h4 {
                margin-bottom: 15px;
            }

            .ser-inner-cont p {
                font-size: 15px;
                width: 100%;
                margin-bottom: 15px;
            }

            section.ser-inner-row img {
                width: 100%;
                height: 400px;
                object-fit: cover;
            }

            section.service-cta-row {
                padding: 50px 0;
            }

            .service-cta-cont h3 {
                font-size: 25px;
                line-height: 35px;
            }

            section.service-cta-row .col-md-9 {
                width: 64%;
            }

            section.service-cta-row .col-md-3 {
                width: 36%;
            }

            section.terms-cont {
                text-align: center;
                padding: 30px 0;
            }

            section.terms-cont h2 {
                width: 100%;
                font-size: 30px;
                line-height: 35px;
            }

            section.terms-cont p {
                font-size: 15px;
                line-height: 24px;
                margin-bottom: 10px;
            }
        }

        @media only screen and (min-width: 1024px) and (max-width: 1399px) {
            .top-bar ul li a {
                font-size: 15px;
            }

            .top-bar ul li a i {
                padding: 5px;
            }

            .header-row .navbar-expand-lg .navbar-nav li a {
                font-size: 15px;
                padding: 0 10px;
            }

            .navbar-dark .navbar-brand {
                width: 18%;
            }

            .header-row .navbar-expand-lg .navbar-nav li button a {
                padding: 14px 21px;
                font-size: 14px;
            }

            section.banner-row .item {
                padding: 100px 0;
            }

            .banner-stars {
                width: 23%;
            }

            .main-hdg h1 {
                font-size: 45px;
                line-height: 50px;
                margin-bottom: 20px;
            }

            .slider-form .form-control {
                height: 40px;
            }

            .slider-form .form-group .icon-bg {
                top: -5px;
            }

            .offr-frm .btn-1 {
                font-size: 18px;
            }

            .offr-frm .btn-1:before {
                width: 15px;
                height: 15px;
            }

            .slider-form {
                margin-top: 30px;
            }

            section.about-row {
                padding: 50px 0;
            }

            .about-cont h2 {
                font-size: 30px;
                line-height: 30px;
                margin-bottom: 15px;
            }

            .about-cont p {
                width: 100%;
            }

            section.cta:after {
                top: 130px;
            }

            section.cta:before {
                top: 80px;
                background-size: 23%;
                width: 100%;
            }

            section.cta {
                z-index: 1;
            }

            .cta-hdg h2 {
                font-size: 30px;
                line-height: 30px;
                margin-bottom: 15px;
            }

            .cta-hdg p {
                font-size: 20px;
                line-height: 30px;
                margin-bottom: 30px;
            }

            .cta-btns a.btn {
                margin: 0 30px;
            }

            section.mission-row {
                padding: 100px 0;
            }

            .mission-cont h3 {
                font-size: 32px;
                line-height: 45px;
            }

            .services-head h2 {
                font-size: 40px;
                line-height: 40px;
                margin-bottom: 15px;
            }

            .services-head h3 {
                font-size: 16px;
            }

            .services-head {
                margin-bottom: 35px;
            }

            .services-sec h3 {
                font-size: 40px;
                line-height: 40px;
                margin-bottom: 15px;
            }

            .services-sec p {
                width: 95%;
                margin-bottom: 20px;
            }

            section.services-row .col-lg-6 {
                margin-bottom: 30px;
            }

            section.services-row .service-lft {
                max-width: 45% !important;
            }

            section.services-row .service-lft .services-sec p {
                width: 95%;
            }

            section.services-row {
                padding-bottom: 60px;
            }

            section.testimonials-row {
                padding: 60px 0;
            }

            section.testimonials-row .item h3 {
                font-size: 28px;
                line-height: 28px;
                margin-bottom: 20px;
            }

            section.testimonials-row .item p {
                font-size: 17px;
                width: 80%;
                margin-bottom: 20px;
            }

            .contact-details h3 {
                font-size: 50px;
                max-width: 68%;
            }

            .contact-details p {
                max-width: 68%;
            }

            .contact-details p br {
                display: none;
            }

            .contact-details ul {
                max-width: 68%;
            }

            .contact-form-sec h3 {
                font-size: 45px;
                line-height: 45px;
                margin-bottom: 15px;
            }

            .contact-form-sec input,
            .contact-form-sec textarea {
                width: 85%;
            }

            section.contact-row .contact-lft {
                height: 445px;
            }

            section.contact-row {
                padding: 120px 0 100px;
            }

            footer.footer-row {
                padding: 60px 0 30px;
            }

            .foot-links h4,
            .foot-rgt h5 {
                font-size: 25px;
                margin-bottom: 15px;
            }

            .foot-links ul li {
                width: 30%;
            }

            .foot-links ul li a {
                font-size: 14px;
            }

            .foot-rgt p {
                font-size: 14px;
            }

            .foot-links {
                margin-bottom: 45px;
            }

            section.copyright-row p {
                font-size: 14px;
            }

            section.copyright-row ul li a {
                font-size: 14px;
            }

            .inner-cont {
                padding: 50px 0 50px 50px;
            }

            .inner-cont h1 {
                font-size: 40px;
                line-height: 55px;
                margin-bottom: 15px;
            }

            .inner-cont h2 {
                font-size: 30px;
                width: 100%;
                line-height: 40px;
            }

            .inner-cont h2:after {
                margin-bottom: 20px;
            }

            .inner-cont p {
                font-size: 16px;
                margin-bottom: 30px;
            }

            section.service-writing-row {
                padding: 60px 0;
            }

            .writing-head h2 {
                font-size: 40px;
                line-height: 40px;
                margin-bottom: 20px;
            }

            .writing-head h3 {
                font-size: 17px;
                line-height: 20px;
            }

            .writing-head {
                margin-bottom: 40px;
            }

            .writing-cont {
                padding: 20px;
            }

            .service-writing-sec h3 {
                font-size: 20px;
                min-height: 52px;
                margin-bottom: 0;
            }

            .service-writing-sec p {
                font-size: 15px;
                line-height: 24px;
            }

            .service-writing-sec a {
                font-size: 15px;
            }

            .skills-sec {
                max-width: 80%;
            }

            .skills-sec h2 {
                font-size: 40px;
                line-height: 40px;
                margin-bottom: 20px;
            }

            .skills-sec h3 {
                font-size: 18px;
            }

            .skills-sec button {
                margin-top: 30px;
            }

            .talk-row {
                padding: 50px 0;
            }

            .talk-head h2 {
                font-size: 35px;
                line-height: 35px;
                margin-bottom: 15px;
            }

            .talk-head h3 {
                font-size: 18px;
            }

            .about-sec-lft h2 {
                font-size: 40px;
            }

            section.about-inner-row {
                padding: 60px 0;
            }

            section.bundles-banner-row {
                padding: 180px 0;
            }

            .bundles-ban-cont h1 {
                font-size: 40px;
                line-height: 40px;
            }

            section.case-row {
                padding: 50px 0 0;
            }

            .review-sec h3 {
                font-size: 30px;
                line-height: 40px;
                margin-bottom: 10px;
            }

            .review-sec {
                padding-bottom: 40px;
            }

            section.writing-row {
                padding: 70px 0;
            }

            .writing-tabs-row div#v-pills-tab {
                width: 40%;
            }

            .writing-tabs-row div#v-pills-tab button {
                font-size: 15px;
            }

            .writing-tabs-row div#v-pills-tabContent {
                padding: 0;
            }

            .writing-sec h2 {
                font-size: 35px;
                margin-bottom: 15px;
            }

            section.bundles-row {
                padding: 70px 0 30px;
            }

            .pkg-sec h2 {
                margin-bottom: 20px;
                font-size: 22px;
            }

            .price .left h2 {
                font-size: 35px;
            }

            .price .left:after {
                font-size: 35px;
                top: -13px;
            }

            .price .left h2 sup {
                font-size: 35px;
            }

            .price .right strike {
                font-size: 16px;
            }

            .price .right span {
                font-size: 16px;
            }

            .pkg-sec ul.list li {
                font-size: 15px;
                line-height: 22px;
                padding-left: 20px;
            }

            .pkg-sec {
                padding-right: 25px;
            }

            .pkg-sec ul.list li:before {
                width: 8px;
                height: 8px;
                top: 6px;
            }

            .pkg-flex {
                flex-direction: column;
                align-items: center;
                margin-bottom: 15px;
            }

            .pkg-flex button.btn {
                margin-bottom: 10px;
            }

            .info-btns button {
                font-size: 16px;
            }

            .service-cta-cont button {
                font-size: 15px;
                padding: 14px 20px;
            }

            section.service-cta-row {
                padding: 70px 0;
            }
        }



        .inner-banner-row.pricing-banner-row {
            height: 660px !important;
            object-fit: cover !important;
        }



        .inner-banner-row.pricing-banner-row {
            height: 660px !important;
            object-fit: cover !important;
        }



        .inner-banner-row.contact-banner-row {
            height: 700px !important;
            object-fit: cover !important;
        }

        .inner-cont.aos-init.aos-animate {
            display: none !important;
        }



        
    </style>



<section class="bundles-banner-row">
    <div class="container">
        <div class="bundles-ban-cont aos-init aos-animate" aos="fade-up" aos-duration="1000">
            <h1>Ghost Writing Bundles</h1>
        </div>
    </div>
</section>

<section class="bundles-row">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 aos-init aos-animate" aos="fade-right" aos-duration="1500">
                <div class="pkg-sec">
                    <h2>Basic</h2>
                    <div class="price">
                        <div class="left">
                            <h2><sup>$</sup>999</h2>
                        </div>
                        <div class="right">
                            <strike>$2000</strike>
                            <span>50% off !</span>
                        </div>
                    </div>
                    <ul class="list">
                        <li>writing</li>
                        <li>editing</li>
                        <li>proofreading</li>
                        <li>typesetting</li>
                        <li>layout adjustment</li>
                        <li>formatting</li>
                        <li>100% ownership rights</li>
                    </ul>
                    <div class="pkg-flex">
                        <div class="pkg-btns">
                            <button name="499" class="btn various" title="Basic Only $499" data-fancybox="" data-src="#popupform" fdprocessedid="6ksr0d"><a href="javascript:;">Order Now</a></button>
                        </div>
                        <div class="pkg-btns">
                            <button class="btn" fdprocessedid="ttn1mk"><a href="javascript:void(Tawk_API.toggle())">Live Chat</a></button>
                        </div>
                    </div>
                    <div class="info-btns">
                        <button fdprocessedid="balhcj"><a href="tel:+14697887107">Call us at : (470) 407-7571</a></button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 aos-init aos-animate" aos="fade-up" aos-duration="1500">
                <div class="pkg-sec">
                    <h2>Startup</h2>
                    <div class="price">
                        <div class="left">
                            <h2><sup>$</sup>1,250</h2>
                        </div>
                        <div class="right">
                            <strike>$2,500</strike>
                            <span>50% off !</span>
                        </div>
                    </div>
                    <ul class="list">
                        <li>writing</li>
                        <li>editing</li>
                        <li>proofreading</li>
                        <li>typesetting</li>
                        <li>layout adjustment</li>
                        <li>formatting</li>
                        <li>100% ownership rights</li>
                        <li>Book cover design</li>
                        <li>publication on Kindle</li>
                        <li>eBook Format</li>
                    </ul>
                    <div class="pkg-flex">
                        <div class="pkg-btns">
                            <button name="1,250" class="btn various" title="Startup Only $1,250" data-fancybox="" data-src="#popupform" fdprocessedid="kopi1"><a href="javascript:;">Order Now</a></button>
                        </div>
                        <div class="pkg-btns">
                            <button class="btn" fdprocessedid="ufonq8"><a href="javascript:void(Tawk_API.toggle())">Live Chat</a></button>
                        </div>
                    </div>
                    <div class="info-btns">
                        <button fdprocessedid="m31opg"><a href="tel:+14697887107">Call us at : (470) 407-7571</a></button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 aos-init aos-animate" aos="fade-left" aos-duration="1500">
                <div class="pkg-sec">
                    <h2>Standard</h2>
                    <div class="price">
                        <div class="left">
                            <h2><sup>$</sup>1,999</h2>
                        </div>
                        <div class="right">
                            <strike>$4,000</strike>
                            <span>50% off !</span>
                        </div>
                    </div>
                    <ul class="list">
                        <li>writing</li>
                        <li>editing</li>
                        <li>proofreading</li>
                        <li>typesetting</li>
                        <li>layout adjustment</li>
                        <li>formatting</li>
                        <li>100% ownership rights</li>
                        <li>Book cover design</li>
                        <li>ISBN</li>
                        <li>publication on Amazon &amp; Kindle</li>
                        <li>eBook, Paperback, (2 formats of your book)</li>
                    </ul>
                    <div class="pkg-flex">
                        <div class="pkg-btns">
                            <button name="1,999" class="btn various" title="Standard Only $1,999" data-fancybox="" data-src="#popupform" fdprocessedid="hfn87l"><a href="javascript:;">Order Now</a></button>
                        </div>
                        <div class="pkg-btns">
                            <button class="btn" fdprocessedid="6yth7z"><a href="javascript:void(Tawk_API.toggle())">Live Chat</a></button>
                        </div>
                    </div>
                    <div class="info-btns">
                        <button fdprocessedid="j1wqe5"><a href="tel:+14697887107">Call us at : (470) 407-7571</a></button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 aos-init" aos="fade-left" aos-duration="1500">
                <div class="pkg-sec">
                    <h2>Expert Package</h2>
                    <div class="price">
                        <div class="left">
                            <h2><sup>$</sup>4,999</h2>
                        </div>
                        <div class="right">
                            <strike>$9,999</strike>
                            <span>50% off !</span>
                        </div>
                    </div>
                    <ul class="list">
                        <h4>Book Development Includes:</h4>
                        <li>Ghost writing </li>
                        <li>Re-writing </li>
                        <li>editing </li>
                        <li>typesetting</li>
                        <li>formatting</li>
                        <li>proofreading </li>
                        <li>layout adjustment </li>
                        <li>100% ownership rights </li>
                        <li>Dedicated team of editors </li>
                        <li>Book cover design </li>
                        <li>ISBN + Barcode</li>
                        <li>publication on Amazon, Kindle, &amp; Barnes &amp; Noble</li>
                        <li>eBook, Paperback, Hardcover (3 formats of your book)</li>
                        <h4>Additional Services Includes</h4>
                        <li>Social Media advertising strategy:</li>
                        <li>4 Months SMM ( Social Media Management)</li>
                        <li>Platforms (Facebook &amp; Instagram)</li>
                        <li>4 Months SEO (Search Engine Optimization)</li>
                        <h4>Additional Services Includes:</h4>
                        <li>2-4 pages author website </li>
                        <li>1-Year domain and hosting </li>
                        <li>30-60 seconds book video trailer</li>
                    </ul>
                    <div class="pkg-flex">
                        <div class="pkg-btns">
                            <button name="4,999" class="btn various" title="Expert Package Only $4,999" data-fancybox="" data-src="#popupform" fdprocessedid="cupxfl"><a href="javascript:;">Order Now</a></button>
                        </div>
                        <div class="pkg-btns">
                            <button class="btn" fdprocessedid="sv6a6q"><a href="javascript:void(Tawk_API.toggle())">Live Chat</a></button>
                        </div>
                    </div>
                    <div class="info-btns">
                        <button fdprocessedid="jlxzav"><a href="tel:+14697887107">Call us at : (470) 407-7571</a></button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 aos-init" aos="fade-down" aos-duration="1500">
                <div class="pkg-sec">
                    <h2>Brand Package</h2>
                    <div class="price">
                        <div class="left">
                            <h2><sup>$</sup>9,999</h2>
                        </div>
                        <div class="right">
                            <strike>$19,999</strike>
                            <span>50% off !</span>
                        </div>
                    </div>
                    <h4>Book Development Includes:</h4>
                    <ul class="list">
                        <li> Ghost writing </li>
                        <li> Re-writing </li>
                        <li> editing </li>
                        <li> typesetting</li>
                        <li> formatting</li>
                        <li> proofreading </li>
                        <li> layout adjustment </li>
                        <li> 100% ownership rights </li>
                        <li> Dedicated team of editors </li>
                        <li> Book cover design </li>
                        <li> ISBN + Barcode</li>
                        <li> publication on Amazon, Kindle, &amp; Barnes &amp; Noble</li>
                        <li> eBook, Paperback, Hardcover (3 formats of your book)</li>
                        <h4>Additional Services Includes</h4>
                        <li>Social Media advertising strategy:</li>
                        <li>Brand advertising strategy</li>
                        <li>1-Year SMM (Social Media Management)</li>
                        <li>Platforms (Facebook &amp; Instagram)</li>
                        <li>1-Year SEO (Search Engine Optimization)</li>
                        <h4>Additional Services Includes:</h4>
                        <li>2-4 pages author website </li>
                        <li>2-Year domain and hosting </li>
                        <li>30-60 seconds book video trailer</li>
                    </ul>
                    <div class="pkg-flex">
                        <div class="pkg-btns">
                            <button name="9,999" class="btn various" title="Brand Package Only $9,999" data-fancybox="" data-src="#popupform" fdprocessedid="ywtc2"><a href="javascript:;">Order Now</a></button>
                        </div>
                        <div class="pkg-btns">
                            <button class="btn" fdprocessedid="5149am"><a href="javascript:void(Tawk_API.toggle())">Live Chat</a></button>
                        </div>
                    </div>
                    <div class="info-btns">
                        <button fdprocessedid="vhbylo2c"><a href="tel:+14697887107">Call us at : (470) 407-7571</a></button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 aos-init" aos="fade-right" aos-duration="1500">
                <div class="pkg-sec">
                    <h2>Best-Seller Package</h2>
                    <div class="price">
                        <div class="left">
                            <h2><sup>$</sup>14,999</h2>
                        </div>
                        <div class="right">
                            <strike>$29,999</strike>
                            <span>50% off !</span>
                        </div>
                    </div>
                    <h4>Book Development Includes:</h4>
                    <ul class="list">
                        <li>Ghost writing </li>
                        <li>Re-writing </li>
                        <li>editing </li>
                        <li>typesetting</li>
                        <li>formatting</li>
                        <li>proofreading </li>
                        <li>layout adjustment </li>
                        <li>100% ownership rights </li>
                        <li>ISBN + Barcode</li>
                        <li>Book cover design </li>
                        <li>eBook, Paperback, Hardcover &amp; Audiobook (4 formats of your book)</li>
                        <li>publication on Amazon, Kindle, Barnes &amp; Noble &amp; KOBO </li>
                        <h5>Additional Services Includes:</h5>
                        <li>Social Media advertising strategy</li>
                        <li>Brand advertising strategy</li>
                        <li> 3-Years SMM (Social Media Management)</li>
                        <li>Platforms (Facebook, Pinterest, Linkedin &amp; Instagram)</li>
                        <li> 2-Year SEO (Search Engine Optimization)</li>
                        <li>Dedicated team of bestselling marketers </li>
                        <li>Book boosting advertising strategy</li>
                        <h5>Additional Services Includes:</h5>
                        <li>2-4 pages author website</li>
                        <li>3-Year domain and hosting </li>
                        <li>60-90 seconds book video trailer</li>
                        <li>Press Releases </li>
                    </ul>
                    <div class="pkg-flex">
                        <div class="pkg-btns">
                            <button name="14,999" class="btn various" title="Best-Seller Package Only $14,999" data-fancybox="" data-src="#popupform" fdprocessedid="87q16zek"><a href="javascript:;">Order Now</a></button>
                        </div>
                        <div class="pkg-btns">
                            <button class="btn" fdprocessedid="to4n0p"><a href="javascript:void(Tawk_API.toggle())">Live Chat</a></button>
                        </div>
                    </div>
                    <div class="info-btns">
                        <button fdprocessedid="6iwq6w"><a href="tel:+14697887107">Call us at : (470) 407-7571</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<div style="display: none;" class="popupform" id="popupform">
	<h2>We are here to help!</h2>
	<p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
	<form  action="{{url('/application-process')}}" method="POST" class="">
        {{csrf_field()}} 
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li> <i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" class="required" required="" placeholder="Full Name *" name="name" fdprocessedid="4s5xgo"> </li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul>
					<li> <i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="email" class="required email" required="" placeholder="Email Address *" name="email" fdprocessedid="exa4kd"> </li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>
						<input type="text" class="telephone_order" required="" placeholder="Phone No. *" name="phone" fdprocessedid="xlxaq"> </li>
				</ul>
			</div>
			<div class="col-md-12">
				<ul>
					<li> <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
						<textarea name="meassage" class="required" required="" placeholder="To help us understand better, enter a brief description about your project."></textarea>
					</li>
				</ul>
			</div>
			<div class="col-md-12">
				<p class="form_tagline">
					<input type="checkbox" name="agree"> &nbsp; To receive our weekly Newsletter/SMS and offers check here. You can unsubscribe at any time.</p>
				<ul>
					<li>
						<input type="submit" name="submit" value="Submit" fdprocessedid="lwrey">
						<input type="hidden" name="pc" value="">
						<input type="hidden" name="cip" value="">
						<input type="hidden" name="ctry" value="">
						<input type="hidden" id="location" name="locationURL" value="http://ultrapublishers.com/book-publishing-bundles">
						<input type="hidden" name="order_package_name" value="" class="package_name" id="package_name">
						<input type="hidden" name="attachment_URL" value="No file attached">
						<input type="hidden" name="order-from" value="1"> </li></ul></div>
			
			
		</div>
  </form>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/1.0.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/custome.js') }}"></script>
@endsection
