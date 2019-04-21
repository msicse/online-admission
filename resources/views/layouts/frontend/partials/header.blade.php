

<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-left">
                <ul class="list header_social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="float-right">
                <a class="dn_btn" href="tel:+4400123654896">+880 012 3654 896</a>
                <a class="dn_btn" href="mailto:support@eubbd.com">support@eubbd.com</a>
                <a class="dn_btn" href="{{ route('admin.login') }}">Admin Login</a>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('home') }}"><img src="{{ asset('frontend/img/logo-eub.png') }}" height="60" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item submenu dropdown {{ Request::is('about-us*') ? 'active' : '' }}"><a class="nav-link " href="#">About Us</a>
                           <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('message') }}">Messages</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('certification')}}">certification</a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{route('mission')}}">Mission and Vision</a></li>
                            </ul>
                        </li>




                        <li class="nav-item submenu dropdown {{ Request::is('academics*') ? 'active' : '' }}">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Academics</a>
                            <ul class="dropdown-menu">
                                 <li class="nav-item"><a class="nav-link" href="{{route('rules')}}">Rules & Regulation</a>
                                     <li class="nav-item"><a class="nav-link" href="{{route('degrees')}}">Degrees Offered</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('credit')}}">Credit Transfer</a>
                                <li class="nav-item"><a class="nav-link" href="{{route('guideline')}}">Guideline</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown {{ Request::is('admission-info*') ? 'active' : '' }}">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admission</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('tuition')}}">Tuition Fees</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('registration')}}">Registration</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('office')}}">Admission Office</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown {{ Request::is('faculties*') ? 'active' : '' }}">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Faculties</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('business')}}">Business & Endustrial Mgt.</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('arts')}}">Arts & Social sciences </a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{route('engineering')}}">Science & Engineering</a></li>
                            </ul>
                        </li>
                        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                        <li class="nav-item addmission"><a class="btn btn-success" href="{{ route('admission.home')}}">Online Addmission</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>


</header>
