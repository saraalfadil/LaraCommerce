@extends('admin.master')

@section('content')

    <!-- Page header -->
    <div class="row heading">
      <div class="large-11 columns large-centered">
        <h4>Edit Product</h4>
      </div>
    </div>

    <!-- Page content -->
    <div class="row">
      <div id="content" class="large-11 columns large-centered">
        <form method="post" action="/admin/products/{{ $product->id }}" class="page_form">
          <div class="row">
            <div class="large-12 columns">
              <label>Product Title
                <input type="text" name="title" placeholder="Title" value="{{ $product->title }}" />
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Price
                <input type="text" name="price" placeholder="Price" value="{{ $product->price }}" />
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Product Description
                <textarea name="description">{{ $product->description }}</textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Product Category
              {{ Form::select('category', $categories->lists('name', 'id'), $product->category->id) }}
              </label>
            </div>
          </div>
          <div class="row">
            <input type="hidden" name="_method" value="put" />
            <input type="submit" class="button" value="Save Product" />
          </div>
        </form>
      </div>
    </div>

@stop