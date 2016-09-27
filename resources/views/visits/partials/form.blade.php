<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group">
    <label for="start" class="col-sm-2 control-label">Start</label>
    <div class="col-sm-10">
        {{ Form::date('start', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group">
    <label for="end" class="col-sm-2 control-label">End</label>
    <div class="col-sm-10">
        {{ Form::date('end', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group">
    <label for="user_id" class="col-sm-2 control-label">People Coming</label>
    <div class="col-sm-10">
        {{ Form::select('user_id', $users, null, ['class' => 'form-control', 'multiple' => 'multiple']) }}
    </div>
</div>
