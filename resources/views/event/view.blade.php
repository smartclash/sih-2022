@extends('layout.app')

@section('title', 'View Event')

@section('content')
    <div class="hero is-fullheight-with-navbar is-link">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-half is-offset-3">
                        <div class="card">
                            <div class="card-header">
                                <p class="card-header-title">Event Details</p>
                            </div>
                            <div class="card-content">
                                <div class="table-container">
                                    <table class="table is-fullwidth is-bordered">
                                        <tbody>
                                        <tr>
                                            <th>Tickets available</th>
                                            <td>{{ $event->unlimited ? 'Unlimited' : $event->seats }}</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{ $event->price == 0 ? 'Free' : $event->price }}₹</td>
                                        </tr>
                                        <tr>
                                            <th>Starts At</th>
                                            <td>{{ $event->starts_at->toDayDateTimeString() }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ends At</th>
                                            <td>{{ $event->ends_at->toDayDateTimeString() }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
