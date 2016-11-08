@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Users

                    @role('admin')
                    <a href="/reports/volunteers" class="btn btn-default btn-xs pull-right">Download Volunteer Report</a>
                    @endrole
                </div>
                <div class="panel-body">
                    @include('users.partials.table')
                </div>
            </div>
        </div>
    </div>
@endsection
