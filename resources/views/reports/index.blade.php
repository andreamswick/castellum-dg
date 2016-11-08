@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Volunteers Report
                    <a href="/reports/volunteers" class="btn btn-default pull-right btn-xs">
                        Download Report
                    </a>
                </div>
                <div class="panel-body">
                    @include('reports.volunteers')
                </div>
            </div>
        </div>
    </div>
@endsection
