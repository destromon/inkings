@extends('back')
<p class="lead">
List of Users
</p>
<table class="table table-striped">
 	<th> ID </th>
 	<th> Email </th>
 	<th> Created at </th>
 	@foreach($users as $user)
 	<tr>
		<td> {{ $user->id }} </td>
		<td> {{ $user->user_email }} </td>
		<td> {{ $user->created_at }} </td>
	</tr>
	@endforeach
</table>

