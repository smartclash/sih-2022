@extends('layout.app')

@section('content')
    <div class="hero is-fullheight-with-navbar is-link">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                        <h1 class="title">Log In</h1>
                        <div class="box">
                            <form action="{{ route('auth.login') }}" method="post">
                                @csrf

                                @if(session('error'))
                                    <p class="help is-danger pb-5 has-text-centered">{{ session('error') }}</p>
                                @endif

                                @if(session('success'))
                                    <p class="help is-success pb-5 has-text-centered">{{ session('success') }}</p>
                                @endif

                                <div class="field">
                                    <label for="email" class="label">Email</label>
                                    <div class="control">
                                        <input
                                                type="email"
                                                class="input @error('email') is-danger @enderror"
                                                id="email" required
                                                value="{{ old('email') }}"
                                                name="email">
                                    </div>
                                    @error('email')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <div class="control">
                                        <input type="password" class="input" id="password" name="password" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input type="submit" class="button is-dark is-fullwidth" value="Log In">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
