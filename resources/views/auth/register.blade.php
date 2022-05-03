@extends('layouts.app')
@section('title', '- Register')

@section('content')

    <div class="register-box d-flex flex-column align-items-center m-auto">
        <div class="card card-outline card-primary w-100 mt-3">
            <div class="card-body login-card-body">
                <h3 class="login-box-msg"> Регистрация </h3>
                @include('components.error-box.error-auth')
                <form method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <input id="name" type="text" class="form-control form-control-sm" name="name"
                            value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Име">
                    </div>

                    <div class="form-group mb-3">
                        <input id="email" type="email" class="form-control form-control-sm" name="email"
                            value="{{ old('email') }}" autocomplete="email" placeholder="Email">
                    </div>

                    <div class="form-group mb-3">
                        <input id="password" type="password" class="form-control form-control-sm" name="password"
                            autocomplete="new-password" placeholder="Парола">
                    </div>

                    <div class="form-group mb-3">
                        <input id="password-confirm" type="password" class="form-control form-control-sm"
                            name="password_confirmation" autocomplete="new-password" placeholder="Потвърди парола">
                    </div>

                    <div class="col-12 p-0">
                        <div class="form-group">
                            <label>Избери роля</label>
                            <select class="form-control form-control-sm" name="role_id" id="role_id">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 p-0">
                        <div class="form-group">
                            <label>Избери флаг</label>
                            <select class="form-control form-control-sm" name="flag_id" id="flag_id">
                                @foreach ($flags as $flag)
                                    <option value="{{ $flag->id }}">{{ $flag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Регистрация
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/messages.js') }}"> </script>
    @endpush
@endsection
