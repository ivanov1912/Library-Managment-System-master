@extends('admin.home')
@section('title', 'Managment System - Edit Profile')

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
            <h5 class="m-0">Редактиране на потребител</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('update.admin.profile', $user->id) }}" enctype="multipart/form-data"
                class="d-flex flex-wrap flex-column">
                @csrf
                <div class="form-group col-md-6">
                    <img src="{{ !empty($user->image) ? url('upload/images/' . $user->image) : url('upload/images/noimage.png') }}  "
                    class="w-25" alt="...">
                </div>
                <div class="form-group col-md-6">
                    <label for="image" class="form-label">Снимка</label>
                    <input class="form-control form-control-sm" name="image" type="file" id="image">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Име</label>
                    <input class="form-control form-control-sm" id="name" value="{{ $user->name }}" type="text"
                        name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input class="form-control form-control-sm" id="email" value="{{ $user->email }}" type="email"
                        name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Дата на раждане</label>
                    <input class="form-control form-control-sm" id="dob" type="date" value="{{ $user->dob }}"
                        type="text" name="dob">
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
                    <button type="submit"
                        class="btn btn-block bg-gradient-primary btn-sm text-light col-md-12">Update</button>
                </div>
            </form>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>

@endsection
