@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

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
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required>

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
                                    <input id="phone" type="number" class="form-control" name="phone"
                                           value="{{ old('phone') }}" required>

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
                                        <input type="radio" name="contact" id="contactEmail" value="email"> Email
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="contact" id="contactPhone" value="sms"> SMS
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
                                            multiple="multiple" name="volunteer_categories[]">
                                        @foreach($volunteer_categories as $id => $category)
                                            <option value="{{ $id }}">{{ $category }}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block">Information on volunteer categories can be found <a
                                                href="/docs/volunteer-categories" target="_blank">here</a>. More than one may be selected.</span>
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
                                    <textarea id="volunteer_details" type="number" class="form-control"
                                              name="volunteer_details">{{ old('volunteer_details') }}</textarea>

                                    @if ($errors->has('volunteer_details'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('volunteer_details') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
