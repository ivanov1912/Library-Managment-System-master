@extends('admin.home')
@section('title', 'Managment System - Create User')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="col d-flex align-center justify-content-between col-md-8 mb-4">
    </div>


    <div class="card card-form card-default col-md-10 ml-4 p-0">

        <div class="card-header">
            <h5 class="m-0">Създай потребител</h5>
        </div>
        <div class="card-body">
            @include('components.error-box.errors')
            <form method="POST" action="{{ route('user.store') }}" multipart="true" enctype="multipart/form-data"
                class="d-flex flex-wrap flex-column">
                @csrf
                <div class="row">
                <div class="form-group col-md-5">
                    <label for="image" class="form-label">Снимка</label>
                    <input class="form-control form-control-sm" name="image" type="file" id="image">
                </div>
                <div class="form-group col-md-5">
                    <label for="name">Име</label>
                    <input class="form-control form-control-sm" id="name" type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-5">
                    <label for="role_id">Създай роля</label>
                    <select class="form-control form-control-sm" name="role_id" id="role_id" aria-invalid="false">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-5">
                    <label for="role_id">Създай роля</label>
                    <select class="form-control form-control-sm" name="gender_id" id="gender_id" aria-invalid="false">
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-5">
                    <label for="email">Email</label>
                    <input class="form-control form-control-sm" id="email" type="email" name="email" placeholder="Email">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>
                <div class="form-group col-md-5">
                    <label for="dob">Дата на раждане</label>
                    <input class="form-control form-control-sm" id="dob" type="date" name="dob" placeholder="">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>
                <div class="form-group col-md-5">
                    <label for="password">Парола</label>
                    <input class="form-control form-control-sm" id="password" type="password" name="password"
                        placeholder="Password">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>

                <div class="col-4 p-0">
                        <div class="form-group">
                            <label>Избери флаг</label>
                            <select class="form-control form-control-sm" name="flag_id" id="flag_id">
                                @foreach ($flags as $flag)
                                    <option value="{{ $flag->id }}">{{ $flag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                <div class="form-group col-md-5">
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
        <script type="text/javascript" src="{{ mix('js/messages.js') }}"> </script>
    @endpush
@endsection
