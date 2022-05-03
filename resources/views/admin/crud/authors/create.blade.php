@extends('admin.home')
@section('title', 'Managment System - Create Author')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection
@section('content')

    <div class="col d-flex align-center justify-content-between col-md-8 mb-4">
    </div>

    <div class="card card-form card-default col-md-8 ml-4 p-0">
        <div class="card-header">
            <h5 class="m-0">Създай автор</h5>
        </div>
        <div class="card-body">
            @include('components.error-box.errors')
            <form method="POST" action="{{ route('author.store') }}" class="d-flex flex-wrap flex-column">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Име</label>
                        <input class="form-control form-control-sm" id="name" type="text" name="name" placeholder="Name">
                        @error('name')
                            <span class="text-danger"> </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gender_id">Пол</label>
                        <select class="form-control form-control-sm" name="gender_id" id="gender_id" aria-invalid="false">
                            @foreach ($genders as $gender)
                                <option value=" {{ $gender->id }} ">{{ $gender->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="genre_id">Жанрове</label>
                        <select class="form-control form-control-sm" name="genre_id" id="genre_id" aria-invalid="false">
                            @foreach ($genres as $genre)
                                <option value=" {{ $genre->id }} ">{{ $genre->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <button style="margin-top: 1.8rem;" type="submit" name="submit" value="submit"
                            class="btn btn-primary btn-sm col-md-12">Изпращане</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src={{ mix('js/messages.js') }}> </script>
    @endpush
@endsection
