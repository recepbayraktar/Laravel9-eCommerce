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
                            <a class="nav-link" href="about.html">About</a></li>
                            <li class="nav-item">
                            <a class="nav-link" href="company.html">Company</a></li>
                            <li class="#" href="#">
                            <a class="nav-link" href="furnitures.html">Furnitures</a></li>
                            <li class="nav-item" href="#">
                            <a class="nav-link" href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-sm-8 col-lg-4">
        <div class="togle_3">
                <div class="left_main">
                <div class="menu_main">
                    <a href="{{ route('login') }}"><i class="fa fa-fw fa-user"></i> Login / Register</a>
                </div>
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