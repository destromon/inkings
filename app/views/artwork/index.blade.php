@extends('back')
<p class="lead">
List of artworks
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
<a href="/artwork/create"> Create New artwork </a> <br/>

@if(count($artworks) != 0)
<table class="table table-striped table-hover table-bordered">
    <th colspan="2"> Action </th>
    <th> ID </th>
    <th> Title </th>
    <th> Tags </th>  
    <tbody>
        @foreach($artworks as $artwork)
        <tr>
            <td>
            {{ Form::open(array('url' => 'artwork/' . $artwork->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete ', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }} 
            </td>
            <td> <a class="btn btn-small btn-info" href="{{ URL::to('artwork/' . $artwork->id . '/edit') }}">Edit</a> </td>
            <td> {{ $artwork->id }}  </td>
            <td> {{ $artwork->artwork_title }} </td>
            <td> {{ $artwork->artwork_tags }} </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="alert bg-info">
  <p> No Record Found </p>
</div>
@endif