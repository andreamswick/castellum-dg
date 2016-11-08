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
