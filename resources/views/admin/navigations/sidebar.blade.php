<aside class="main-sidebar sidebar-dark-primary elevation-4">
    @if (Auth::user()->role_id == '2')

        <a href="#" class="brand-link d-flex align-items-center justify-content-center">
            <span class="brand-text font-weight-light">Система за управление</span>
            <br>
        </a>
        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
            <div class="image col-md-2 p-0 ml-4">
                <img src="{{ !empty(Auth::user()->image) ? url('upload/images/' . Auth::user()->image) : url('upload/images/noimage.png') }}  "
                    class="img-circle elevation-2 w-100" alt="{{ Auth::user()->name }}">
            </div>
            <div class="info d-flex align-items-center">
                <a href="#" class="d-block"
                    style="color:#c2c7d0; text-decoration:none; font-size:1rem">{{ Auth::user()->name }}</a>
                @if (Cache::has('user-is-online-' . Auth::user()->id))
                    <span href="#" class="d-flex align-items-center"
                        style="margin-top:.3rem;  font-size:.7rem; color:#c2c7d0;"><i
                            class=" ml-4 mr-1 fa fa-circle text-success" style="font-size:.7rem;"></i> На линия</a>
                    @else
                        <span href="#" class="d-flex align-items-center"
                            style="margin-top:.3rem;  font-size:.7rem; color:#c2c7d0;"><i
                                class=" ml-4 mr-1 fa fa-circle text-danger" style="font-size:.7rem;"></i> Офлайн</a>
                @endif
            </div>
        </div>
        <div class="sidebar">
            <nav class="mt-2">
                <ul id="left-sidebar" class="nav nav-pills nav-sidebar flex-column mb-5" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ route('dashboard.index') }}" class="nav-link active">
                            <i class="fas fa-chart-line"></i>
                            <p>
                                Табло <span class="badge badge-dark text-dark"></span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('dashboard.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Начало
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-id-card"></i>
                            <p>
                                Профил <span class="badge badge-dark text-dark"></span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('admin.profile') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Моят профил
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('edit.admin.profile', Auth::id()) }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Редактиране на профил
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users-cog"></i>
                            <p>
                                Потребители <span style="margin-left:9.8%"
                                    class="badge badge-warning text-dark">{{ $usersCount }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('user.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Създай потребител
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('user.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Виж потребители
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.view.index') }}">
                            <i class="fas fa-user-lock"></i>
                            <p>
                                Админи
                            </p>
                            <span style="margin-left:26%" class="badge badge-warning text-dark">
                                {{ $adminsCount }}
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('visitor.view.index') }}">
                            <i class="fas fa-user"></i>
                            <p>
                                Потребители
                            </p>
                            <span style="margin-left:12%" class="badge badge-warning text-dark">
                                {{ $visitorsCount }}
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-user-edit"></i>
                            <p>
                                Автори <span style="margin-left:27%"
                                    class="badge badge-warning text-dark">{{ $authorsCount }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('author.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Създай автор
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('author.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Всички потребители
                                    </p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-book"></i>
                            <p>
                                Книги <span style="margin-left:35%"
                                    class="badge badge-warning text-dark">{{ $booksCount }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('book.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Създай книга
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('book.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Всички книги
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-star"></i>
                            <p>
                                Роли <span style="margin-left:35%"
                                    class="badge badge-warning text-dark">{{ $rolesCount }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('role.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Създай роля
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('role.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Всички роли
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-transgender" aria-hidden="true"></i>
                            <p>
                                Полове <span style="margin-left:29%"
                                    class="badge badge-warning text-dark">{{ $gendersCount }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('gender.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Създай пол
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('gender.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Всички полове
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fab fa-hubspot"></i>
                            <p>
                                Жанрове(книги) <span style="margin-left:9%"
                                    class="badge badge-warning text-dark">{{ $genresBooks }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('gendre.book.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Създай жанр
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('gendre.book.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Всички жанрове
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fab fa-hubspot"></i>
                            <p>Жанрове (Автори) <span style="margin-left:4%" class="badge badge-warning text-dark">
                                    {{ $genresAuthors }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('gendre.author.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Всички жанрове
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('gendre.author.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Създай жанр
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-tasks"></i>
                            <p>
                                Присъедени книга <span style="margin-left:7%"
                                    class="badge badge-warning text-dark">{{ $assigned_booksCount }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('assign.book.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Всички книги
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('status.approved.users') }}">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p>Одобрени потребители <span style="margin-left:7%" class="badge badge-warning text-dark">
                                    {{ $approvedUsersCount }}</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('status.waiting.users') }}">
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                            <p>Чакащи потребители <span style="margin-left:13%" class="badge badge-warning text-dark">
                                    {{ $waitingUsersCount }}</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    @elseif (Auth::user()->role_id == '1')
        <a href="#" class="brand-link d-flex align-items-center justify-content-center">
            <span class="brand-text font-weight-light">Система за управление</span>
            <br>
        </a>
        @if (Auth::user()->flag_id == '1')
            <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                <div class="image col-md-2 p-0 ml-4">
                    <img src="{{ !empty(Auth::user()->image) ? url('upload/images/' . Auth::user()->image) : url('upload/images/noimage.png') }}  "
                        class="img-circle elevation-2 w-100" alt="{{ Auth::user()->name }}">
                </div>
                <div class="info d-flex align-items-center">
                    <a href="#" class="d-block"
                        style="color:#c2c7d0; text-decoration:none; font-size:1rem">{{ Auth::user()->name }}</a>
                    @if (Cache::has('user-is-online-' . Auth::user()->id))
                        <a href="#" class="d-flex align-items-center"
                            style="margin-top:0.3rem; text-decoration:none; font-size:.7rem; color:#c2c7d0;"><i
                                class=" ml-4 mr-1 fa fa-circle text-success" style="font-size:.7rem;"></i> На линия</a>
                    @else
                        <a href="#" class="d-flex align-items-center"
                            style="margin-top:0.05rem; text-decoration:none; font-size:.7rem; color:#c2c7d0;"><i
                                class=" ml-4 mr-1 fa fa-circle text-danger" style="font-size:.7rem;"></i> Извън линия</a>
                    @endif
                </div>
            </div>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-chart-line"></i>
                                <p>
                                    Табло <span class="badge badge-dark text-dark"></span>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('visitor.view.dashboard') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Начало
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-id-card"></i>
                                <p>
                                    Профил <span class="badge badge-dark text-dark"></span>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">

                                    <a class="nav-link" href="{{ route('profile.index') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Моят профил
                                        </p>
                                    </a>
                                    <a class="nav-link" href="{{ route('edit.profile', Auth::id()) }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Редактирай профил
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-book"></i>
                                <p>
                                    Книги <span class="badge badge-dark text-dark"></span>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('visitors.books') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Моите книги
                                        </p>
                                    </a>
                                    <a class="nav-link" href="{{ route('favourites.page') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Любими книги
                                        </p>
                                    </a>
                                    <a class="nav-link" href="{{ route('incomings.page') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Предстоящи книги
                                        </p>
                                    </a>
                                    <a class="nav-link" href="{{ route('readed.page') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Прочетени книги
                                        </p>
                                    </a>
                                    <a class="nav-link" href="{{ route('archived.page') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Архивирани книги
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-comments"></i>
                                <p>
                                    Коментари <span class="badge badge-dark text-dark"></span>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('comment.create') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Създай коментар
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                </nav>
            </div>
        @else

        @endif

    @endif
</aside>
