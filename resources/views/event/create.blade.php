@extends('layout.app')

@section('title', 'Create Event')

@section('content')
    <div class="hero is-link is-fullheight-with-navbar">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-half is-offset-3">
                        <p class="title">Create Event</p>
                        <div class="box">
                            <form action="{{ route('event.create') }}" method="post" x-data="{ unlimited: false, free: false }">
                                @csrf

                                <div class="field">
                                    <label for="seats" class="label">Seats</label>
                                    <div class="control">
                                        <input type="number" id="seats"
                                               class="input" name="seats"
                                               step="1" min="1" required
                                               x-bind:disabled="unlimited" />
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <label for="unlimited" class="checkbox">
                                            <input id="unlimited" type="checkbox" name="unlimited" x-model="unlimited" />
                                            Seats are unlimited
                                        </label>
                                    </div>
                                </div>

                                <hr />

                                <div class="field">
                                    <label for="price" class="label">Ticket Price</label>
                                    <div class="control">
                                        <input type="number" id="price" class="input"
                                               name="price" min="0" required
                                               x-bind:disabled="free" />
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <label for="free" class="checkbox">
                                            <input id="free" type="checkbox" name="free" x-model="free" />
                                            Entry is free
                                        </label>
                                    </div>
                                </div>


                                <hr />

                                <div class="field">
                                    <label for="starts_at" class="label">Starting At</label>
                                    <div class="control">
                                        <input type="datetime-local" id="starts_at" class="input" name="starts_at" required />
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="ends_at" class="label">Ends At</label>
                                    <div class="control">
                                        <input type="datetime-local" id="ends_at" class="input" name="ends_at" required />
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input type="submit" class="input button is-dark is-fullwidth" value="Submit">
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
