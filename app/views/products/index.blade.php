@extends('master')

@section('content')

  <div class="row">
    <div class="large-12 columns">
      <div class="row">
        @foreach ($products as $product)
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x200&text=Thumbnail"/>
            <h6 class="panel">{{ $product->title }} ${{ $product->price }}</h6>
          </div>
        @endforeach
      </div>
    </div>
  </div>

@stop