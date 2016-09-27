@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::open(['url' => 'items', 'class' => 'form-horizontal']) !!}
            <div class="panel panel-default">
                <div class="panel-heading">Create Item</div>
                <div class="panel-body">
                    @include('items.partials.form')
                </div>
                <div class="panel-footer text-right">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
