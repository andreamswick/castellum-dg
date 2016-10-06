<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Name</label>

    <div class="col-md-6">
        {{ Form::text('name', null, ['required', 'class'=> 'form-control', 'autofocus']) }}

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        {{ Form::text('email', null, ['required', 'class'=> 'form-control']) }}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    <label for="phone" class="col-md-4 control-label">Phone Number</label>

    <div class="col-md-6">
        {{ Form::text('phone', null, ['required', 'class'=> 'form-control']) }}

        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
    <label for="contact" class="col-md-4 control-label">Preferred Contact Method</label>

    <div class="col-md-6">
        <label class="radio-inline">
            {{ Form::radio('contact', 'email') }} Email
        </label>
        <label class="radio-inline">
            {{ Form::radio('contact', 'sms') }} SMS
        </label>
        @if ($errors->has('contact'))
            <span class="help-block">
                <strong>{{ $errors->first('contact') }}</strong>
            </span>
        @endif
    </div>
</div>
