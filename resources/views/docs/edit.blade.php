@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('docs.partials.links')
            </div>

            <div class="col-md-9">
                {!! Form::open(['route' => ['docs.update', $page], 'class' => 'form-horizontal', 'method' => 'patch']) !!}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Edit Document
                    </div>
                    <div class="panel-body">
                        <textarea name="docs_content" id="content" class="form-control simplemde">{!! $content !!}</textarea>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('extras')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

    <script>
        var simplemde = new SimpleMDE();
    </script>
@endsection
