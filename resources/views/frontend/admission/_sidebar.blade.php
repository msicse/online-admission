<div class="col-lg-3 col-md-3 col-sm-12">
    <div class="addmission-sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admission') ? 'active' : '' }}" href="{{ route('admission.home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admission/apply*') ? 'active' : '' }}" href="{{ route('admission.apply') }}">Apply</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admission/login') ? 'active' : '' }}" href="{{ route('admission.login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admission/guidelines') ? 'active' : '' }}" href="{{ route('admission.guidelines') }}">Guidelines</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admission/complain') ? 'active' : '' }}" href="{{ route('admission.complain') }}">Support</a>
            </li>

        </ul>
    </div>

</div>
