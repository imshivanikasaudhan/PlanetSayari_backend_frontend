@include('components/head')

<script type="text/javascript" src="js/MultiLang.js">
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        },
            'google_translate_element'
        );
        //   document.getElementById('google_translate_element').style.background="#00A0EB";
    }
</script>


<!-- Header -->
<header class="simpal-yellow ">
    <div class="topbar banner-stars">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="topbar-left">
                        <ul class="list-inline">
                            <!-- <li class="list-inline-item"><i class="fa fa-phone text-blue"></i> +0123 456 789</li> -->
                            <li class="list-inline-item ms-2"><i class="fa fa-envelope-o ms-3"> </i>
                                <a href="mailto:contact@planetsayari.com" class="">contact@planetsayari.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="topbar-right text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <ul class="list-inline iq-left">
                                    <li class="list-inline-item"><a href="https://www.instagram.com/planet_sayari/"
                                            target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <!-- <li class="list-inline-item"><a
                                            href="https://m.youtube.com/watch?v=MB73HjuhUtQ&fbclid=PAAaYv4TYulyBBfby2Vwe6J8d0PqgG0e1HY9v2jf2OabXBsdmMw3cYRxWUEl8https://www.tiktok.com/@planetsayari"
                                            target="_blank"><i class="fa fa-youtube"></i></a></li> -->
                                    <li class="list-inline-item"><a href="https://twitter.com/TokenSayari"
                                            target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a
                                            href="https://www.facebook.com/profile.php?id=100090091656693"
                                            target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://t.me/+katj3AYArktjMThi"
                                            target="_blank"><i class="fa fa-telegram"></i></a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item"><span id="google_translate_element"></span></li>
                            <!-- <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comments-o ms-3"></i>Free Consulting</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
    </div>
    <!-- <div id="google_translate_element"></div> -->

    <div class="iq-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <a href="{{asset('../')}}"><img id="logo_dark" class="img-fluid" src="images/logo_hori.svg"
                                alt="logo"></a>
                    </div>
                    <nav> <a id="resp-menu" class="responsive-menu" href="javascript:void(0)"><i
                                class="fa fa-reorder"></i> </a>
                        <ul class="menu text-end">
                            <li><a class="{{ request()->is('/') ? 'active' : ''}}" href="{{asset('../')}}">Home</a></li>
                            <li><a class="{{ request()->is('mission') ? 'active' : ''}}">About Us</a>                                        
                                <ul class="sub-menu">
                                    <li><a href="{{asset('../mission')}}" class="{{ request()->is('mission') ? 'active' : ''}}">Mission</a></li>
                                    <li><a href="{{asset('../strategy')}}"class="{{ request()->is('strategy') ? 'active' : ''}}">Strategy</a></li>
                                    <li><a href="{{asset('../our-journey')}}" class="{{ request()->is('our-journey') ? 'active' : ''}}">Our Journey</a></li>
                                    <!-- <li><a href="letter-of-credit.php" class="">Letter of Credit</a></li> -->
                                    <li><a href="{{URL::asset('frontend_files/Sayari-Lite-Paper.pdf') }}" target="_blank" class="">Lite Paper</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  class="{{ request()->is('our-Program') ? 'active' : ''}}">Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="{{asset('../our-Program')}}" class="{{ request()->is('our-Program') ? 'active' : ''}}">Our Program</a></li>
                                    <li><a href="{{asset('../projects')}}" class="{{ request()->is('projects') ? 'active' : ''}}">Projects</a></li>
                                </ul>
                            </li>
                            <li><a  class="">Products & Solution</a>
                                <ul class="sub-menu">
                                    <li><a href="{{asset('../funds-assets')}}" class="">Funds & Assets</a></li>
                                    <li><a href="{{asset('../instrument')}}" class="">Instruments</a></li>
                                    <li><a href="{{asset('../letter-of-credit')}}" class="">Letter of Credit</a></li>
                                </ul>
                            </li>
                            <li><a href="{{asset('../sayari-app')}}" class="{{ request()->is('sayari-app') ? 'active' : ''}}">Sayari App</a></li>
                            <!-- <li><a href="contact.php">Contact</a></li> -->
                            <li>
                                <a class="button" data-bs-toggle="modal"
                                    data-bs-target=".iq-login" data-bs-whatever="@mdo">Login Account
                                </a>
                            </li>
                            <li>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->