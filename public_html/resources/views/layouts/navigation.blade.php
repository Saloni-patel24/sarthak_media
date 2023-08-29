<ul>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm underline">Home</a>
                <a href="{{ route('logout') }}" class="text-sm  underline">Logout</a>
            @else
                <a href="{{ route('login') }}" class="text-sm underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4  underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
</ul>
