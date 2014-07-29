@extends('back')
<style>
  .form-user{
    width: 300px;
  }
</style>
Create New User
<div class="form-user">
{{ HTML::ul($errors->all()) }}
  {{ Form::open(array('url' => 'user')) }}
    <div class="form-group">
      {{ Form::label('email', 'Email') }}
      {{ Form::email('user_email', Input::old('email'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
      {{ Form::label('user_password', 'Password') }}
      {{ Form::password('user_password', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('user_password_confirmation', 'Confirm Password') }}
      {{ Form::password('user_password_confirmation', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
      {{ Form::label('user_first', 'First Name') }}
      {{ Form::text('user_first', Input::old('user_first'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
      {{ Form::label('user_last', 'Last Name') }}
      {{ Form::text('user_last', Input::old('user_last'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
      {{ Form::label('user_middle', 'Middle Name') }}
      {{ Form::text('user_middle', Input::old('user_middle'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
      {{ Form::label('access', 'Access Level') }}
      {{ Form::select('user_access', array('admin' => 'Administrator', 'user' => 'User'), Input::old('user_accesslevel'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Save ', array('class' => 'btn btn-primary')) }}

  {{ Form::close() }}
</div>
