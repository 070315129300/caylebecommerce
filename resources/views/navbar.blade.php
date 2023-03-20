
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<div class="top-bar">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@yourdomain.com</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">1+ (234) 5678 9101</span></a>


                <div class="float-right">

                    <div class="mr-auto">
                        <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">


            <div class="site-logo">
                <a href="/" class="text-black"><span class="text-secondary" style="color:orangered !important;">Demmstore </span></a>

            </div>

            <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="/" class="nav-link">Home</a></li>


                        <li class="has-children">
                            <a  class="nav-link">Buy More</a>
                            <ul class="dropdown arrow-top">
                                <li class="has-children">
                                    <a>Cloth</a>
                                    <ul class="dropdown">
                                        <li><a href="malecloth">Male</a></li>
                                        <li><a href="femalecloth">Female</a></li>
                                        <li><a href="unisexcloth">Unisex</a></li>
                                    </ul>
                                </li>
                                <li><a href="perfume" class="nav-link">Perfume</a></li>

                            </ul>
                        </li>

                        <li><a href="about" class="nav-link">About</a></li>
                        <li><a href="blog" class="nav-link">Blog</a></li>
                        <li><a href="contact" class="nav-link">Contact</a></li>
                       <li> <a href="cart"><span class="icon-shopping-cart"></span></a></li>

                        <li class="has-children">
{{--                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>--}}
                                <ul class="dropdown arrow-top">
                                    <li class="has-children">
                                        <a class="dropdown-item preview-item" href="{{url('logout')}}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-dark rounded-circle">
                                                    <i class="mdi mdi-logout text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject mb-1"> Log out</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>


                        </li>
                    </ul>


                </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
    </div>

</header>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/main.js"></script>
</body>
</html>

