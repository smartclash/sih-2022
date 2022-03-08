@extends('layout.app')

@section('content')
    <section class="section">
        <div class="columns">
            <div class="column is-offset-3 is-half">
                <div class="card">
                    <div class="card-header">
                        <p class="card-header-title">
                            Events
                        </p>
                    </div>
                    <div class="card-content">
                        <div class="buttons">
                            <a href="{{ route('event.create') }}" class="button is-light is-fullwidth">Create Event</a>
                            <a href="#" class="button is-dark is-fullwidth">List Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
