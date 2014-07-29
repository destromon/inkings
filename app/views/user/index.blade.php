@extends('back')
<p class="lead">
List of Users
</p>
@if (Session::has('message'))
  <div class="alert bg-success">{{ Session::get('message') }}</div>
@endif
@if (Session::has('delete'))
  <div class="alert bg-danger">{{ Session::get('delete') }}</div>
@endif

<a href="/user/create"> Create New User </a> <br/>
@if(count($users) != 0)
<table class="table table-striped">
  <th colspan="2"> Action </th>
  <th> ID </th>
  <th> Email </th>
  <th> Created at </th>
  @foreach($users as $user)
  <tr>
    <td>
    {{ Form::open(array('url' => 'user/' . $user->id, 'class' => 'pull-right')) }}
      {{ Form::hidden('_method', 'DELETE') }}
      {{ Form::submit('Delete ', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }} 
    </td>
    <td> <a class="btn btn-small btn-info" href="{{ URL::to('user/' . $user->id . '/edit') }}">Edit</a> </td>
    <td> {{ $user->id }}  </td>
    <td> {{ $user->user_email }} </td>
    <td> {{ $user->created_at }} </td>
  </tr>
  @endforeach
</table>
@else
<div class="alert bg-info">
  No Record Found
</div>
@endif