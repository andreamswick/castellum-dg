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

<div class="form-group{{ $errors->has('volunteer_categories') ? ' has-error' : '' }}">
    <label for="volunteer_categories" class="col-md-4 control-label">Volunteer
        Categories</label>

    <div class="col-md-6">
        <select id="volunteer_categories" class="form-control select2-multiple"
                multiple="multiple" name="volunteer_categories[]"
                value="{{ old('volunteer_categories') }}" required>
            @foreach($volunteer_categories as $id => $category)
                <option value="{{ $id }}">{{ $category }}</option>
            @endforeach
            @foreach($volunteer_categories as $id => $name)
                <option value="{{ $id }}" {{ (Auth::user()->volunteer_categories->contains($id)) ? 'selected' : '' }} >{{ $name }}</option>
            @endforeach
        </select>
        <span class="help-block">Information on volunteer categories can be found <a href="/docs/volunteer-categories" target="_blank">here</a>. More than one may be selected.</span>
        @if ($errors->has('volunteer_categories'))
            <span class="help-block">
                <strong>{{ $errors->first('volunteer_categories') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('volunteer_details') ? ' has-error' : '' }}">
    <label for="volunteer_details" class="col-md-4 control-label">Volunteer Details</label>

    <div class="col-md-6">
        {{ Form::textarea('volunteer_details', null, ['class' => 'form-control', 'rows' => 3]) }}

        @if ($errors->has('volunteer_details'))
            <span class="help-block">
                <strong>{{ $errors->first('volunteer_details') }}</strong>
            </span>
        @endif
    </div>
</div>
