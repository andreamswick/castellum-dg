@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('docs.partials.links')
            </div>

            <div class="col-md-9">
                {!! Form::open(['route' => 'docs.store']) !!}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Create Document
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="file_name">File Name</label>
                            <input type="text" name="file_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="docs_content">Document Content</label>
                            <textarea name="docs_content" id="docs_content" class="form-control simplemde"></textarea>
                        </div>
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
