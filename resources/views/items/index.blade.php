@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Items

                    <a href="/items/create" class="btn btn-primary pull-right btn-xs"><i
                                class="fa fa-plus"></i></a></div>
                <div class="panel-body">
                    @include('items.partials.table')
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-success">
                <div class="panel-heading">Purchased Items</div>
                <div class="panel-body">
                    <h1 class="text-success text-center" style="margin: 0;">{{ $purchased_count }}</h1>
                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">Needed Items</div>
                <div class="panel-body">
                    <h1 class="text-warning text-center" style="margin: 0;">{{ $needed_count }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
