@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Visits <a href="/visits/create" class="btn btn-primary pull-right btn-xs"><i
                                class="fa fa-plus"></i></a></div>
                <div class="panel-body">
                    @include('visits.partials.table')
                </div>
            </div>
        </div>
    </div>
@endsection
