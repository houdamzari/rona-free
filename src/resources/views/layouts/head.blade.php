<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('theme/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('theme/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <title>
      Covid-19 Morocco
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" type="text/css" href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
    <!-- CSS Files -->
    <link href="{{ asset('theme/assets/css/material-dashboard.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/assets/css/datatables.min.css') }}" rel="stylesheet" />
    <!-- Dont include this in your project -->
    <script data-ad-client="ca-pub-2749678461972336" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<style>
    .menu-item,
    .menu-open-button {
        background:white;
        border-radius: 100%;
        width: 80px;
        height: 80px;
        margin-left: -40px;
        position: absolute;
        color: #FFFFFF;
        text-align: center;
        line-height: 80px;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition: -webkit-transform ease-out 200ms;
        transition: -webkit-transform ease-out 200ms;
        transition: transform ease-out 200ms;
        transition: transform ease-out 200ms, -webkit-transform ease-out 200ms;
    }
    body {
        background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
        color: #514B64;
        min-height: 100vh;
        overflow-x: hidden;
    }
    .navbar {
        background-color: #fff;
        box-shadow: 1px 21px 35px -10px rgba(43, 43, 43, 0.67);
        -webkit-box-shadow: 1px 21px 35px -10px rgba(43, 43, 43, 0.67);
        -moz-box-shadow: 1px 21px 35px -10px rgba(43, 43, 43, 0.67);
        color: #514B64!important;
        text-decoration: none;
    }
    .container-fluidd {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
    }

    .secondflex {
        margin-left: 100px;
        margin-top: 110px;
    }

    .menu {
        margin: auto;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 80px;
        height: 80px;
        text-align: center;
        box-sizing: border-box;
        font-size: 26px;
    }
    .menu-item  i{

        margin-top: 25px;
    }
    li a {
        color: #514B64!important;
    }


    .img {
        width: 200%;
        height: 200%;
        position: relative;
        right: 40px;
        bottom: 35px;
        animation: rotating 4s linear infinite;
    }

    .menu-open {
        display: none;
    }


    /* .menu-item {
transition: all 0.1s ease 0s;
} */

    .menu-item:hover {
        background: #EEEEEE;
        color: #3290B1;
    }

    .menu-item:nth-child(3) {
        -webkit-transition-duration: 180ms;
        transition-duration: 180ms;
    }

    .menu-item:nth-child(4) {
        -webkit-transition-duration: 180ms;
        transition-duration: 180ms;
    }

    .menu-item:nth-child(5) {
        -webkit-transition-duration: 180ms;
        transition-duration: 180ms;
    }

    .menu-item:nth-child(6) {
        -webkit-transition-duration: 180ms;
        transition-duration: 180ms;
    }

    .menu-item:nth-child(7) {
        -webkit-transition-duration: 180ms;
        transition-duration: 180ms;
    }

    .menu-item:nth-child(8) {
        -webkit-transition-duration: 180ms;
        transition-duration: 180ms;
    }

    .menu-item:nth-child(9) {
        -webkit-transition-duration: 180ms;
        transition-duration: 180ms;
    }

    .menu-open-button {
        z-index: 2;
        -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
        transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -webkit-transition-duration: 400ms;
        transition-duration: 400ms;
        -webkit-transform: scale(1.1, 1.1) translate3d(0, 0, 0);
        transform: scale(1.1, 1.1) translate3d(0, 0, 0);
        cursor: pointer;
        box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
    }

    .menu-open-button:hover {
        -webkit-transform: scale(1.2, 1.2) translate3d(0, 0, 0);
        transform: scale(1.2, 1.2) translate3d(0, 0, 0);
    }

    .menu-open:checked+.menu-open-button {
        -webkit-transition-timing-function: linear;
        transition-timing-function: linear;
        -webkit-transition-duration: 200ms;
        transition-duration: 200ms;
        -webkit-transform: scale(0.8, 0.8) translate3d(0, 0, 0);
        transform: scale(0.8, 0.8) translate3d(0, 0, 0);
    }

    .menu-open:checked~.menu-item {
        -webkit-transition-timing-function: cubic-bezier(0.935, 0, 0.34, 1.33);
        transition-timing-function: cubic-bezier(0.935, 0, 0.34, 1.33);
    }

    .menu-open:checked~.menu-item:nth-child(3) {
        transition-duration: 180ms;
        -webkit-transition-duration: 180ms;
        -webkit-transform: translate3d(0.08361px, -104.99997px, 0);
        transform: translate3d(0.08361px, -104.99997px, 0);
    }

    .menu-open:checked~.menu-item:nth-child(4) {
        transition-duration: 280ms;
        -webkit-transition-duration: 280ms;
        -webkit-transform: translate3d(90.9466px, -52.47586px, 0);
        transform: translate3d(90.9466px, -52.47586px, 0);
    }

    .menu-open:checked~.menu-item:nth-child(5) {
        transition-duration: 380ms;
        -webkit-transition-duration: 380ms;
        -webkit-transform: translate3d(90.9466px, 52.47586px, 0);
        transform: translate3d(90.9466px, 52.47586px, 0);
    }

    .menu-open:checked~.menu-item:nth-child(6) {
        transition-duration: 480ms;
        -webkit-transition-duration: 480ms;
        -webkit-transform: translate3d(0.08361px, 104.99997px, 0);
        transform: translate3d(0.08361px, 104.99997px, 0);
    }

    .menu-open:checked~.menu-item:nth-child(7) {
        transition-duration: 580ms;
        -webkit-transition-duration: 580ms;
        -webkit-transform: translate3d(-90.86291px, 52.62064px, 0);
        transform: translate3d(-90.86291px, 52.62064px, 0);
    }

    .menu-open:checked~.menu-item:nth-child(8) {
        transition-duration: 680ms;
        -webkit-transition-duration: 680ms;
        -webkit-transform: translate3d(-91.03006px, -52.33095px, 0);
        transform: translate3d(-91.03006px, -52.33095px, 0);
    }

    .menu-open:checked~.menu-item:nth-child(9) {
        transition-duration: 780ms;
        -webkit-transition-duration: 780ms;
        -webkit-transform: translate3d(-0.25084px, -104.9997px, 0);
        transform: translate3d(-0.25084px, -104.9997px, 0);
    }

    .blue {
        background-color: #669AE1;
        box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
    }

    .blue:hover {
        color: #669AE1;
        text-shadow: none;
    }

    .green {
        background-color: #70CC72;
        box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
    }

    .green:hover {
        color: #70CC72;
        text-shadow: none;
    }

    .red {
        background-color: #FE4365;
        box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
    }

    .red:hover {
        color: #FE4365;
        text-shadow: none;
    }

    .purple {
        background-color: #C49CDE;
        box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
    }

    .purple:hover {
        color: #C49CDE;
        text-shadow: none;
    }

    .orange {
        background-color: #FC913A;
        box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
    }

    .orange:hover {
        color: #FC913A;
        text-shadow: none;
    }

    .lightblue {
        background-color: #62C2E4;
        box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
    }

    .lightblue:hover {
        color: #62C2E4;
        text-shadow: none;
    }

    @keyframes rotating {
        from {
            -ms-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -ms-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    code {
        background: #fff;
        padding: 0.2rem;
        border-radius: 0.2rem;
        margin: 0 0.3rem;
    }




</style>
