@extends('back')
<p class="lead">
List of Users
</p>

<a href="/user/create"> Create New User </a> <br/>
@if(count($users) != 0)
<table class="table table-striped">
  <th colspan="2"> Action </th>
  <th> ID </th>
  <th> Email </th>
  <th> Created at </th>
  @foreach($users as $user)
  <tr>
    <td> <a href="/user/delete/{{ $user->id }}"> Delete </a> </td>
    <td> <a href="/user/edit/{{ $user->id }}"> Edit </a> </td>
    <td>  {{ $user->id }}  </td>
    <td> {{ $user->user_email }} </td>
    <td> {{ $user->created_at }} </td>
  </tr>
  @endforeach
</table>
@else
No Record Found
@endif