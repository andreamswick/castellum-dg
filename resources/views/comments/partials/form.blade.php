{!! Form::open(['url' => "visits/$visit->id/comments"]) !!}
    @if(isset($parent))
        <input type="hidden" name="parent_id" value="{{ $parent }}">
    @endif

    <div class="form-group">
        <label for="body">{{ $label or 'How did it go? Do they need anything?'}}</label>
        <textarea name="body" id="body" rows="3" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
{!! Form::close() !!}
