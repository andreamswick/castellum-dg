<div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group">
    <label for="description" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
        {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) }}
    </div>
</div>
<div class="form-group">
    <label for="priority" class="col-sm-2 control-label">Priority</label>
    <div class="col-sm-10">
        {{ Form::select('priority', ['High' => 'High', 'Medium' => 'Medium', 'Low' => 'Low'], null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group">
    <label for="user_id" class="col-sm-2 control-label">Purchased By</label>
    <div class="col-sm-10">
        {{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
    </div>
</div>
