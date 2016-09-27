@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Visits</div>

                <div class="panel-body">
                    Calendar
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Items <a href="/items/create" class="btn btn-primary pull-right btn-xs"><i class="fa fa-plus"></i></a></div>
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
</div>
@endsection
