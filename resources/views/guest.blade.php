@extends('admin.home')
@section('title', 'Managment System - Visitor')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    @if (Auth::user()->role_id == '1')
        <div class="row">
            <div class="col-md-8 m-auto " id="guest-container" style="margin-top: 15% !important">
                <div class="card card-primary card-outline">
                    <div class="card-body text-center">
                        <h5 class="card-title w-100 mb-2">Здравей {{ Auth::user()->name }} </h5>

                        <p class="card-text">
                            Имате 3 възможности като посетител и те са                        
                        </p>
                        <a href="{{route('profile.index')}}" class="btn btn-primary">Моят профил</a>
                        <a href="{{route('visitors.books')}}" class="btn btn-primary">Моите книги</a>
                        <a href="{{route('edit.profile',Auth::id())}}" class="btn btn-primary">Редактиране на профил</a>
                        {{-- <a href="#" class="btn btn-primary">My Favorite books</a> --}}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
