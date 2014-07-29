@extends('back')
<style>
  .form-artwork{
    width: 300px;
  }
</style>
Update Artwork
<div class="form-artwork">
  {{ Form::model($artwork, array('route' => array('artwork.update', $artwork->id), 'method' => 'PUT')) }}
    <div class="form-group">
      {{ Form::label('artwork_title', 'Title') }}
      @if ($errors->has('artwork_title'))
      <span class="bg-danger"> {{ $errors->first('artwork_first') }} </span>
      @endif
      {{ Form::text('artwork_title', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
      {{ Form::label('artwork_tags', 'Tags') }}
      @if ($errors->has('artwork_tags'))
      <span class="bg-danger"> {{ $errors->first('artwork_tags') }} </span>
      @endif
      <input name="artwork_tags" id="tags" value="{{$artwork->artwork_tags}}" />
    </div>

    <div class="form-group">
        {{ Form::label('artwork_image', 'Image') }}
        @if ($errors->has('artwork_image'))
        <span class="bg-danger"> {{ $errors->first('artwork_image') }} </span>
        @endif
        {{ Form::file('artwork_image', Input::old('artwork_image'), array('class' => 'form-control')) }}
    </div>
    
    {{ Form::submit('Update ', array('class' => 'btn btn-primary')) }}

  {{ Form::close() }}
</div>
