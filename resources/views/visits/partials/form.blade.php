<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group">
    <label for="start" class="col-sm-2 control-label">Start</label>
    <div class="col-sm-10">
        {{ Form::text('start', null, ['class' => 'form-control flatpickr', 'data-date-format' => "m/d/Y h:i K", 'data-enable-time' => 'true']) }}
    </div>
</div>
<div class="form-group">
    <label for="end" class="col-sm-2 control-label">End</label>
    <div class="col-sm-10">
        {{ Form::text('end', null, ['class' => 'form-control flatpickr', 'data-date-format' => "m/d/Y h:i K", 'data-enable-time' => 'true']) }}
    </div>
</div>
<div class="form-group">
    <label for="user_id" class="col-sm-2 control-label">People Coming</label>
    <div class="col-sm-10">
        @if(isset($visit))
            <select name="user_id[]" id="user_id" class="form-control select2-multiple" multiple="multiple">
                @foreach($users as $id => $name)
                    <option value="{{ $id }}" {{ ($visit->users->contains($id)) ? 'selected' : '' }} >{{ $name }}</option>
                @endforeach
            </select>
        @else
        {{ Form::select('user_id[]', $users, null, ['class' => 'form-control select2-multiple', 'multiple' => 'multiple']) }}
        @endif
    </div>
</div>
