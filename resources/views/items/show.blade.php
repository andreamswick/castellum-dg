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
                            <a href="/items/{{ $item->id }}/purchased" class="btn btn-success btn-sm">Mark as
                                Purchased</a>
                        @endif
                        <a href="/items/{{ $item->id }}/edit" class="btn btn-warning btn-sm"><i
                                    class="fa fa-pencil"></i></a>
                        @role('admin')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        @endrole
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
                            <td>Needed</td>
                            <td>{{ $item->needed() }} of {{ $item->quantity }}</td>
                        </tr>
                        <tr>
                            <td>Purchased By</td>
                            <td>
                                @if($item->purchases !== null)
                                    <dl class="dl-horizontal">
                                        @foreach($item->purchases as $purchase)
                                            <dt>{{ $purchase->user->name }} ({{ $purchase->quantity }})</dt>
                                            <dd>{!! $purchase->notes !!}</dd>
                                        @endforeach
                                    </dl>
                                @else
                                    This item has not been purchased by anyone yet.
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
