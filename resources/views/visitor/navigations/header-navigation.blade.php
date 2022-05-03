<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <li class="nav-link text-dark">Система за управление на библиотека</li>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto" style="align-items: center; margin-right:1rem">
        <li class="nav-item" style="margin-right:.7rem">
            <a class="nav-link" data-toggle="dropdown">
                <i class="fas fa-user-shield"></i>
                <span class="badge badge-warning navbar-badge text-dark" style="
                    font-size: .6rem;
                    font-weight: 300;
                    padding: 2px 4px;
                    position: absolute;
                    right: -0px;
                    font-weight:bold;
                    top: -5px;">
                    {{ Auth::user()->name }}
                </span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="dropdown">
                <i class="fas fa-user-tag"></i>
                <span class="badge badge-primary navbar-badge" style="
                    font-size: .6rem;
                    font-weight: 300;
                    padding: 2px 4px;
                    position: absolute;
                    right: -5px;
                    font-weight:bold;
                    top: -5px;">
                    @if (Auth::user()->role_id=='2')
                    Админ                        
                    @else
                    Читател
                    @endif
                </span>
            </a>
        </li>
        <li class="nav-item" style="margin-left:1rem">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <span id="logout" class="badge badge-danger navbar-badge" style="
                    font-size: .6rem;
                    font-weight: 300;
                    padding: 2px 4px;
                    position: absolute;
                    right: -2px;
                    font-weight:bold;
                    top: -5px;">
                    Изход
                </span>
                <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
