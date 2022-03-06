@extends('layout.app')

@section('content')
    <div class="hero is-fullheight-with-navbar is-link">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                        <h1 class="title">Register</h1>
                        <div class="box">
                            <form action="{{ route('auth.register') }}" method="post">
                                @csrf
                                <div class="field">
                                    <label for="name" class="label">Name</label>
                                    <div class="control">
                                        <input
                                            type="text"
                                            class="input @error('name') is-danger @enderror"
                                            name="name" id="name"
                                            value="{{ old('name') }}"
                                            required>
                                    </div>
                                    @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
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
                                        <input type="password" class="input @error('password') is-danger @enderror" id="password" name="password" required>
                                    </div>
                                    @error('password')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="password_confirmation" class="label">Password Again</label>
                                    <div class="control">
                                        <input
                                            type="password"
                                            class="input @error('password') is-danger @enderror"
                                            name="password_confirmation"
                                            id="password_confirmation"
                                            required>
                                    </div>
                                    @error('password')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input type="submit" class="button is-dark is-fullwidth" value="Register now">
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
