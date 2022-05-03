@extends('admin.home')
@section('title', 'Managment System - Edit User')

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
            <h5 class="m-0">Редактирай потребител</h5>
        </div>
        <div class="card-body">
            <form method="POST" multipart="true" enctype="multipart/form-data"
                action="{{ route('user.update', $user->id) }}" class="d-flex flex-wrap flex-column">
                @csrf

                <div class="col-md-6 d-flex justify-content-left">
                    <img src="{{ !empty($user->image) ? url('upload/images/' . $user->image) : url('upload/images/noimage.png') }}  "
                        class="mb-1" alt="...">
                </div>

                <div class="form-group col-md-6">
                    <label for="image" class="form-label">Снимка</label>
                    <input class="form-control form-control-sm" name="image" type="file" id="image">
                </div>

                <div class="form-group col-md-6">
                    <label for="name">Име</label>
                    <input class="form-control form-control-sm" id="name" value="{{ $user->name }}" type="text"
                        name="name" placeholder="Name">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="role_id">Избери роля</label>
                    <select class="form-control form-control-sm" name="role_id" id="role_id" aria-invalid="false">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }} "
                                {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="gender_id">Избери пол</label>
                    <select class="form-control form-control-sm" name="gender_id" id="gender_id" aria-invalid="false">
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->id }} "
                                {{ $user->gender_id == $gender->id ? 'selected' : '' }}>
                                {{ $gender->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input class="form-control form-control-sm" id="email" value="{{ $user->email }}"
                        type="email" name="email" placeholder="email">

                </div>

                <div class="form-group col-md-6">
                    <label for="dob">Дата на раждане</label>
                    <input class="form-control form-control-sm" id="dob" value="{{ $user->dob }}" type="date"
                        name="dob" placeholder="dob">

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

                <div class="form-group col-md-6">
                    <label for="password">Парола</label>
                    <input class="form-control form-control-sm" id="password" value="" type="password" name="password"
                        placeholder="password">
                </div>

                <div class="form-group col-md-6">
                    <button style="margin-top: 2rem;" type="submit" name="submit" value="submit"
                        class="btn btn-primary btn-sm col-md-12">Изпращане</button>
                </div>
            </form>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>

@endsection
