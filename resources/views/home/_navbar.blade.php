<!-- Navigation -->
<div class="container-fluid">
    <div class="row">  <!--navbar section start -->
        <div class="col-sm-12 col-lg-3">
        <div class="logo"><img src="{{ asset('assets') }}/home/images/logo.png"></div>
        </div>
        <div class="col-sm-4 col-lg-5">
        <div class="menu-area">
                <nav class="navbar navbar-expand-lg">
                    <!-- <a class="navbar-brand" href="#">Menu</a> -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                            <a class="nav-link active" href="index.html">Home<span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutus')  }}">About</a></li>
                            <a class="nav-link" href="{{ route('explore')  }}">Explore</a></li>
                            <li class="nav-item" href="#">
                            <a class="nav-link" href="{{ route('contact')  }}">Contact Us</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact')  }}">Faq</a></li>
                            <li class="#" href="#">
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-sm-8 col-lg-4">
        <div class="togle_3">
                <div class="left_main">
                @auth
                    <div class="menu_main">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-black" href="{{ route('myAccount') }}">My profile</a>
                            <a class="dropdown-item text-black" href="#">Another action</a>
                            <a class="dropdown-item text-black" href="{{ route('logout') }}">Log out</a>
                            </div>
                        </div>

                </div>
                @endauth
                @guest
                <div class="menu_main">
                    <a href="{{ route('login') }}"><i class="fa fa-fw fa-user"></i> Login</a>
                    /
                    <a href="{{ route('register') }}">Register</a>
                </div>
                @endguest
                </div>
                <div class="middle_main">
                <div class="shoping_bag"><img src="{{ asset('assets') }}/home/images/search-icon.png"></div>
                </div>
                <div class="right_main">
                <div class="togle_main"><img src="{{ asset('assets') }}/home/images/shopping-bag.png"></div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end of navigation -->
