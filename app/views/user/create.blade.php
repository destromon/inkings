@extends('back')
<style>
  .form-user{
    width: 500px;
  }
</style>
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'user')) }}

  <div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('user_email', Input::old('email'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('user_password', Input::old('user_password'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('access', 'Access Level') }}
    {{ Form::select('user_access', array('admin' => 'Administrator', 'user' => 'User'), Input::old('user_accesslevel'), array('class' => 'form-control')) }}
  </div>

  {{ Form::submit('Save ', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}