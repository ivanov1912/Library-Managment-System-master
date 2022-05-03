@extends('admin.home')
@section('title', 'Managment System - Profile')

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
            <h5 class="m-0">Профил</h5>
        </div>
        <div class="card-body profile">
            <div class="form-group col-md-6">
                <img class="w-25"
                    src="{{ !empty($user->image) ? url('upload/images/' . $user->image) : url('upload/images/noimage.png') }}  "
                    alt="...">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Име</label>
                    <input class="form-control form-control-sm" id="name" disabled value="{{ $user->name }}" type="text"
                        name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input class="form-control form-control-sm" id="email" disabled value="{{ $user->email }}"
                        type="email" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Дата на раждане</label>
                    <input class="form-control form-control-sm" id="dob" disabled value="{{ $user->dob }}" type="text"
                        name="dob">
                </div>
                <div class="form-group col-md-6">
                    <label for="role">Роля</label>
                    @if ($user['roles']['name'] === 'admin')
                        <input class="form-control form-control-sm" id="role_id" disabled value="admin" type="text">
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">Пол</label>
                    @if ($user['genders']['name'] == 'm')
                        <input class="form-control form-control-sm" id="gender_id" disabled value="m" type="text">
                    @elseif ($user['genders']['name'] == 'f')
                        <input class="form-control form-control-sm" id="gender_id" disabled value="f" type="text">
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="created_at">Cъздаден</label>
                    <input class="form-control form-control-sm" id="created_at" disabled value="{{ $user->created_at }}"
                        type="text" name="created_at">
                </div>
                <div class="form-group col-md-6">
                    <label for="updated_at">Актуализиран</label>
                    <input class="form-control form-control-sm" id="updated_at" disabled value="{{ $user->updated_at }}"
                        type="text" name="updated_at">
                </div>
            </div>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/messages.js') }}"> </script>
    @endpush
@endsection
