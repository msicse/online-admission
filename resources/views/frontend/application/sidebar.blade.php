<div class="col-md-3">
    <!-- Sidebar -->
    <nav id="sidebar" class="nav-sidebar">
        <ul class="list-unstyled components slimescroll-id" id="accordion">
            <div class="user-profile bg-dark">
                <div class="dropdown user-pro-body text-light">
                    <div>
                        @if( empty(auth()->guard('application')->user()->image) )
                        <img src="{{ asset('storage/admission/no-image.png') }}" alt="user-img" class="img-circle">
                        @else
                        <img src="{{ asset('storage/admission/'.auth()->guard('application')->user()->image) }}" alt="user-img" class="img-circle">

                        @endif
                    </div>

                    <a href="#" class=" text-light">
                        <strong>{{auth()->guard('application')->user()->name}}</strong>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="login.html"><i class="fa fa-power-off "></i> Logout</a></li>
                    </ul>
                </div>
            </div>

            <li class="{{ Request::is('student') ? 'active' : '' }}">
                <a href="{{ route('application.home') }}" class="accordion-toggle wave-effect">
                    <i class="ti-home m-r-10"></i> Home
                </a>

            </li>
            <li class="{{ Request::is('student/info*') ? 'active':''}}">
                <a href="#personal" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                    <i class="ti-info-alt m-r-10"></i> ALL Information
                </a>
                <ul class="collapse list-unstyled" id="personal" data-parent="#accordion">
                    <li class="{{ Request::is('student/personal*') ? 'active' : '' }}"><a href="{{ route('application.personal') }}">Personal</a></li>
                    <li class="{{ Request::is('student/academic*') ? 'active' : '' }}"><a href="{{ route('application.academics') }}">Academics</a></li>
                    <li class="{{ Request::is('student/programs*') ? 'active' : '' }}"><a href="{{ route('application.programs') }}">Programs</a></li>
                    <li class="{{ Request::is('student/cv*') ? 'active' : '' }}"><a href="{{ route('application.cv') }}">Download Information</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('student/apply*') ? 'active' : '' }}"><a href="{{ route('application.apply') }}"><i class="ti-write m-r-10"></i> Apply</a></li>
            <li class="{{ Request::is('student/payment*') ? 'active' : '' }}"><a href="{{ route('application.payment') }}"><i class="ti-credit-card m-r-10"></i> Payment</a></li>
            <li><a href="{{ route('application.password') }}"><i class="ti-key m-r-10"></i>Change Password</a></li>
            <li>
                <a href=""onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     <i class="ti-export m-r-10"></i>Logout
                 </a>
             </li>
             <form id="logout-form" action="{{ route('application.logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
             </form>

            <li class="">
                <a href="#homeSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                    <i class="ti-home m-r-10"></i> dropdown
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu" data-parent="#accordion">
                    <li><a href="#">Home 1</a></li>
                    <li><a href="#">Home 2</a></li>
                    <li><a href="#">Home 3</a></li>
                </ul>
            </li>

        </ul>
    </nav>
</div>
