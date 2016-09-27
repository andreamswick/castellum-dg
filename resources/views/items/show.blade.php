@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $item->title }} Item
                    <div class="toolbox pull-right">
                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'items.destroy', $item->id ] ]) }}
                            @if(!$item->user)
                                <a href="/items/{{ $item->id }}/purchased" class="btn btn-success btn-sm">Mark as Purchased</a>
                            @endif
                            <a href="/items/{{ $item->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        {{ Form::close() }}
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>Title</td>
                            <td>{{ $item->title }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $item->description }}</td>
                        </tr>
                        <tr>
                            <td>Priority</td>
                            <td>{{ $item->priority }}</td>
                        </tr>
                        <tr>
                            <td>Purchased By</td>
                            @if($item->user)
                            <td>{{ $item->user->name }}</td>
                            @else
                            <td>Not purchased yet.</td>
                            @endif
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
