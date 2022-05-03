<div style="background-color:#e9ecef"
    class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-primary">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-primary">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-sm text-primary ml-3">Register</a>
                @endif
            @endauth
        </div>
    @endif
