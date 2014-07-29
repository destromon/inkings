@extends('back')
<p class="lead">
List of Users
</p>
@if (Session::has('message'))
<div class="bs-example">
    <div class="alert bg-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('message') }}
    </div>
</div>
@endif
@if (Session::has('delete'))
<div class="bs-example">
    <div class="alert bg-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('delete') }}
    </div>
</div>
@endif
<a href="/user/create"> Create New User </a> <br/>

@if(count($users) != 0)
<table class="table table-striped table-hover table-bordered">
    <th colspan="2"> Action </th>
    <th> ID </th>
    <th> Email </th>
    <th> Created at </th>  
    <tbody>
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
    </tbody>
</table>
@else
<div class="alert bg-info">
  <p> No Record Found </p>
</div>
@endif