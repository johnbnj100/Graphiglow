<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>KPD-Prints</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/tailwind.css" />

    <link rel="stylesheet" href="/checkout/form-validation.css">

    <link rel="stylesheet" href="/aos/demo/css/aos.css" />

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="/assets/css/lightbox.css">

    <link rel="stylesheet" href="/carousel/carousel.css">

    <link rel="stylesheet" href="/assets/css/index.css">

    <link rel="stylesheet" href="/assets/css/3d.css">

    <link rel="stylesheet" href="/aos/src/aos.css">

    <link href="/assets/css/dashboard.css" rel="stylesheet">

    <link href="/assets/css/morphbutton.css" rel="stylesheet">

    <link href="/assets/css/jquery.geocomplete.min.css" rel="stylesheet">

    <link href="/assets/css/chatstyle.css" rel="stylesheet"/>



<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
{{$slot}}
    </head>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader" style='background-image: url(/assets/kpd/loader3.gif); background-size: cover; background-position:center;'></div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" style="background-image: url(assets/kpd/back.jpeg); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->

                        <a href="/" class="logo flex justify-center items-center">
                            <i class="fa fa-lightbulb-o"></i><h1 class="text-white text-2xl" style="font-family: poppin, cursive; font-weight: bold;"> Graphi<element style="color: darkorange" >Glow </element></h1>
                        </a>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            @if (Auth::user())
                            <li class="scroll-to-section"><a href="/" class="text-white">Home</a></li>

                            <li class="submenu">
                                <a href="javascript:;" class="text-white">Services</a>
                                <ul>
                                    <li><a href="/graduation">Graduation Programme</a></li>
                                    <li><a href="/church">Church Programme</a></li>
                                    <li><a href="/wedding">Wedding Programme</a></li>
                                    <li><a href="/business">Business Programme</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;" class="text-white">Business Services</a>
                                <ul>
                                    <li><a href="/card">Business Card</a></li>
                                    <li><a href="/calender">Calendar</a></li>
                                    <li><a href="/jotter">Jotters</a></li>
                                    <li><a href="/flyer">Flyer</a></li>
                                </ul>
                            </li>

                            <li class="scroll-to-section"><a href="#explore" class="text-white border px-3 rounded-2xl">About Us</a></li>

                            <li>
                                <form class="scroll-to-section" method="POST" action="/logout" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class=" font-bold text-dark text-lg rounded-2xl bg-white px-3 py-1.5"><i class="fa fa-sign-out"> Logout </i></button>
                                </form>
                              </li>

                              @else

                            <li class="scroll-to-section"><a href="/" class="text-white">Home</a></li>

                            <li class="submenu">
                                <a href="javascript:;" class="text-white">Services</a>
                                <ul>
                                    <li><a href="/graduation">Graduation Programme</a></li>
                                    <li><a href="/church">Church Programme</a></li>
                                    <li><a href="/wedding">Wedding Programme</a></li>
                                    <li><a href="/business">Business Programme</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;" class="text-white">Business Services</a>
                                <ul>
                                    <li><a href="/card">Business Card</a></li>
                                    <li><a href="/calender">Calendar</a></li>
                                    <li><a href="/jotter">Jotters</a></li>
                                    <li><a href="/flyer">Flyer</a></li>
                                </ul>
                            </li>

                            <li class="scroll-to-section"><a href="/signup" class="text-dark border px-3 rounded-2xl bg-white">Sign up</a></li>
                            <li class="scroll-to-section"><a href="/signin" class="text-white fa fa-sign-in"> Login</a></li>
                            <li class="scroll-to-section"><a href="#explore" class="text-white border px-3 rounded-2xl">About Us</a></li>
                            @endauth
                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ***** Header Area End ***** -->

<!-- jQuery -->
<script src="/assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="/assets/js/popper.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

<!-- Plugins -->
<script src="/assets/js/owl-carousel.js"></script>
<script src="/assets/js/accordions.js"></script>
<script src="/assets/js/datepicker.js"></script>
<script src="/assets/js/scrollreveal.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/imgfix.min.js"></script>
<script src="/assets/js/slick.js"></script>
<script src="/assets/js/lightbox.js"></script>
<script src="/assets/js/3d.js"></script>
<script src="/assets/js/isotope.js"></script>
<script src="/assets/typed/type/lib/typed.js"></script>
<script src="/assets/js/jquery.morphbutton.js"></script>
<script src="/assets/js/jquery.geocomplete.js"></script>


<!-- Global Init -->

<script src="\checkout\form-validation.js"></script>
<script src="/assets/js/custom.js"></script>
<script src="/aos/src/js/aos.js"></script>
<script src="/assets/js/index.js"></script>
<script src="/aos/src/aos.js"></script>
<script src="/assets/js/lga.js"></script>
<script src="/assets/js/lga.min.js"></script>
<script src="https://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AlzaSyDo65FexZEy94lXTDgZXyZNv9QsOdfVHws&libraries=places"></script>

<script>
     AOS.init();
</script>


