@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            @include('docs.partials.links')
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                @role('admin')
                <div class="panel-heading text-right">
                    <a href="/docs/create" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Create New Page</a>
                    <a href="/docs/{{ $page }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>
                        Edit {{ $title }}</a>
                </div>
                @endrole
                <div class="panel-body docs">
                    {!! $content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
