@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/visits">Scheduled Visits</a>
                    <a href="/visits/create" class="btn btn-primary pull-right btn-xs">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>

                <div class="panel-body">
                    <div class='fullcalendar'></div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/visits">Getting Started</a></div>

                <div class="panel-body">
                    <h3>Visits</h3>

                    <p>On the this page you can view all of the events that have been scheduled.
                        If you prefer a list view, click <a href="/visits">Visits</a> in the navigation bar or on <a
                                href="/visits">Scheduled Visits</a> title of the calendar panel.</p>

                    <h4><a href="/visits/create">Creating a Visit</a></h4>

                    <p>To create a visit click on the "+" button in the </p>

                    <h3>Items</h3>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/items">Needed Items</a>
                    <a href="/items/create" class="btn btn-primary pull-right btn-xs">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                <div class="panel-body">
                    <ul>
                        @forelse($items as $item)
                            <li>{{ $item->title }}</li>
                        @empty
                            <li>No items</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
