@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Items

                    <a href="/items/create" class="btn btn-primary pull-right btn-xs"><i
                                class="fa fa-plus"></i></a></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">Purchased Items</div>
                                <div class="panel-body">
                                    <h1 class="text-success text-center" style="margin: 0;">{{ $purchased_count }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-warning">
                                <div class="panel-heading">Needed Items</div>
                                <div class="panel-body">
                                    <h1 class="text-warning text-center" style="margin: 0;">{{ $needed_count }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">New Items</div>
                                <div class="panel-body">
                                    View all items that need to be new, and purchase them by visiting our
                                    <a href="http://www.target.com/gift-registry/giftgiver?registryId=hnusemVFhm-M8seVKeZ-3w&ref=registryCopiedLink#1"
                                       target="_blank">Target Registry.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('items.partials.table')
                </div>
            </div>
        </div>
    </div>
@endsection
