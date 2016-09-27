@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::model($visit, ['url' => 'visits/' . $visit->id, 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
            <div class="panel panel-default">
                <div class="panel-heading">Edit Visit</div>
                <div class="panel-body">
                    @include('visits.partials.form')
                </div>
                <div class="panel-footer text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
