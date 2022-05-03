@extends('admin.home')
@section('title', 'Managment System - Dashboard')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="content-header mb-2">
        <div class="container-fluid">

        </div>
    </div>


    <section class="content">
        <div class="container-fluid card card-primary card-outline col-md-11">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2 class="m-0 dashboard-title">Табло</h2>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#" class="library-cms">Library CMS</a></li>
                                <li class="breadcrumb-item active">Табло</li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            
            <div class="row w-100 m-auto mb-3">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner d-flex">
                            <div>
                                <h3>{{ $users }}</h3>
                                <p>Потребители</p>
                            </div>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <a href="{{ route('user.index') }}" class="small-box-footer">Повече инфо <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">

                            <h3>{{ $authors }}</h3>

                            <p>Автори</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-edit"></i>
                        </div>
                        <a href="{{ route('author.index') }}" class="small-box-footer">Повече инфо <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $books }}</h3>

                            <p>Книги</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <a href="{{ route('book.index') }}" class="small-box-footer">Повече инфо <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner d-flex">
                            <div>
                                <h3>{{ $roles }}</h3>
                                <p>Роли</p>
                            </div>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Повече инфо <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="content-header mt-0 pt-0">
                <div class="col-sm-6">
                    <h2 class="dashboard-title">Допълнителна информация</h2>
                </div>
                <div class="container-fluid">
                    <hr style="height:1.5px">
                </div>
            </div>
            <div class="row w-100 m-auto">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="waiting-users-wrapper"><i class="fa fa-spinner"
                                aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Чакащи потребители</span>
                            <span class="info-box-number">
                                {{ $waitingUsers }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="approved-users-wrapper"><i class="fa fa-check"
                                aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Удобрени потребители</span>
                            <span class="info-box-number">
                                {{ $approvedUsers }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="assigned-books-wrapper"><i class="fas fa-tasks"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Присъединени книги</span>
                            <span class="info-box-number">
                               {{$assignedBooks}}
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="genders-wrapper"><i class="fa fa-transgender"
                                aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Полове</span>
                            <span class="info-box-number">
                                {{ $genders }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="genres-books-wrapper"><i class="fas fa-user-edit"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Жанрове книги</span>
                            <span class="info-box-number">
                                {{$genreBooks}}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="genres-authors-wrapper"><i class="fas fa-book"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Жанрове автори</span>
                            <span class="info-box-number">
                                {{$genreAuthors}}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="comments-wrapper"><i class="fas fa-comments"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Коментари</span>
                            <span class="info-box-number">
                                {{$comments}}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="readers-wrapper"><i class="fa fa-users" aria-hidden="true"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Читатели</span>
                            <span class="info-box-number">
                                {{$readers}}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
        </div>

    </section>
@endsection
