<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Item</label>
    <div class="col-sm-8">
        <p class="form-control-static">{{ $item->title }}</p>
    </div>
</div>

<div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
    <label for="quantity" class="col-sm-3 control-label">How many do you have?</label>
    <div class="col-sm-8">
        {{ Form::number('quantity', null, ['class' => 'form-control', 'max' => $item->needed()]) }}
        <span class="help-block">There is only a need for {{ $item->needed() }} more.</span>

        @if ($errors->has('quantity'))
            <span class="help-block">
                <strong>{{ $errors->first('quantity') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
    <label for="notes" class="col-sm-3 control-label">Notes</label>
    <div class="col-sm-8">
        {{ Form::textarea('notes', null, ['class' => 'form-control', 'rows' => 3]) }}

        @if ($errors->has('notes'))
            <span class="help-block">
                <strong>{{ $errors->first('notes') }}</strong>
            </span>
        @endif
    </div>
</div>
