<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('backend/uploads/'. Auth::user()->image ) }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Sign Out</a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </div>

    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>

            @if (Auth::user()->role->id == 1 )
            <li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard')}}">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li class=" {{ Request::is('admin/departments*') ? 'active' : '' }} ">
                <a href="{{ route('admin.departments.index') }}">
                    <i class="material-icons">library_books</i>
                    <span>Departments</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/programs*') ? 'active' : '' }}">
                <a href="{{ route('admin.programs.index') }}">
                    <i class="material-icons">list</i>
                    <span>Programs</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="material-icons">people</i>
                    <span>Users</span>
                </a>
            </li>
            @endif
            <li class="header">LABELS</li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <span>Infobox</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                    </li>
                    <li>
                        <a href="pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                    </li>
                    <li>
                        <a href="pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                    </li>
                    <li>
                        <a href="pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                    </li>
                    <li>
                        <a href="pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy;  {{ date('Y') }} <a href="javascript:void(0);">Sumon-Sonia-Sarwar</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
    <!-- #Footer -->
</aside>
