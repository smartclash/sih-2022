<nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{ url('/') }}" class="navbar-item is-size-5 has-text-weight-semibold">
                {{ config('app.name') }}
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-end">
                @auth
                    {{-- Links for authenticated user --}}
                @else
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="{{ route('auth.register') }}" class="button is-link">
                                Sign Up
                            </a>
                            <a href="{{ route('auth.login') }}" class="button is-dark">
                                Log In
                            </a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
