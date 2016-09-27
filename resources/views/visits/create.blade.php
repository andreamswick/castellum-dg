@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::open(['url' => 'visits', 'class' => 'form-horizontal']) !!}
            <div class="panel panel-default">
                <div class="panel-heading">Create Visit</div>
                <div class="panel-body">
                    @include('visits.partials.form')
                </div>
                <div class="panel-footer text-right">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
