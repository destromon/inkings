@extends('back')
<style>
  .form-artwork{
    width: 300px;
  }
</style>
Upload New Artwork
<div class="form-artwork">
{{ Form::open(array('url' => 'artwork', 'files'=>'true')) }}
    <div class="form-group">
        {{ Form::label('artwork_title', 'Title') }}
        @if ($errors->has('artwork_title'))
        <span class="bg-danger"> {{ $errors->first('artwork_title') }} </span>
        @endif
        {{ Form::text('artwork_title', Input::old('artwork_title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('artwork_tags', 'Tags') }}
        @if ($errors->has('artwork_tags'))
        <span class="bg-danger"> {{ $errors->first('artwork_tags') }} </span>
        @endif
        <input name="artwork_tags" id="tags" value="" />
    </div>

    <div class="form-group">
        {{ Form::label('artwork_image', 'Image') }}
        @if ($errors->has('artwork_image'))
        <span class="bg-danger"> {{ $errors->first('artwork_image') }} </span>
        @endif
        {{ Form::file('artwork_image', Input::old('artwork_image'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Save ', array('class' => 'btn btn-primary')) }}

  {{ Form::close() }}
</div>
