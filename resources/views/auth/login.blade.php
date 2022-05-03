<div class="login-box d-flex flex-column align-items-center m-auto">
    <div class="card card-outline card-primary w-100 mt-3">
        <div class="card-body login-card-body rounded ">
            <h3 class="login-box-msg">Вход</h3>
            @include('components.error-box.error-auth')
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <input id="email" type="email" class="form-control form-control-sm" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="form-group mb-3">
                    <input id="password" type="password" class="form-control form-control-sm" name="password" required
                        autocomplete="current-password">
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                Запомни ме
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4 d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Вход
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            @if (Route::has('password.request'))
                <p class="mb-1">
                    <a class="btn btn-sm btn-link pl-0" style="text-decoration:none;"
                        href="{{ route('password.request') }}">
                        Забравена парола
                    </a>
                </p>
            @endif
        </div>
    </div>
</div>
@push('scripts')
    <script type="text/javascript" src="{{ mix('js/messages.js') }}"> </script>
@endpush
