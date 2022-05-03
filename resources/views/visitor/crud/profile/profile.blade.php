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
            <div class="row">
                <div class="form-group col-md-7">
                    <img src="{{ !empty($user->image) ? url('upload/images/' . $user->image) : url('upload/images/noimage.png') }}  "
                        class="w-25" alt="...">
                </div>
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
                    @if ($user->role_id === 1)
                        <input class="form-control form-control-sm" id="dob" disabled value="visitor" type="text">
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">Жанр</label>
                    @if ($user->gender_id === 1)
                        <input class="form-control form-control-sm" id="gender_id" disabled value="m" type="text">
                    @elseif ($user->gender_id === 2)
                        <input class="form-control form-control-sm" id="gender_id" disabled value="f" type="text">
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="created_at">Създаден</label>
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
