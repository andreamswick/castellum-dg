@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::open(['route' => ['purchases.store', $item], 'class' => 'form-horizontal']) !!}
            <div class="panel panel-default">
                <div class="panel-heading">Mark Item as Purchased</div>
                <div class="panel-body">
                    @include('purchases.partials.form')
                </div>
                <div class="panel-footer text-right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
