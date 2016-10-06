@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Deleted Items</div>
                <div class="panel-body">
                    @include('items.partials.trash-table')
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Deleted Visits</div>
                <div class="panel-body">
                    @include('visits.partials.trash-table')
                </div>
            </div>
        </div>
    </div>
@endsection
