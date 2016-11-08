@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Volunteer Categories</div>

                <div class="panel-body">
                    <dl class="dl-horizontal">
                        @foreach($volunteer_categories as $category)
                            <dt>{{ $category->name }}</dt>
                            <dd>{{ $category->description }}</dd>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
