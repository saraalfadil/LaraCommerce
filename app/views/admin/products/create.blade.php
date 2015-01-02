@extends('admin.master')

@section('content')

    <!-- Page header -->
    <div class="row heading">
      <div class="large-11 columns large-centered">
        <h4>Create Product</h4>
      </div>
    </div>

    <!-- Page content -->
    <div class="row">
      <div id="content" class="large-11 columns large-centered">

        <form method="post" action="/admin/products" class="page_form">
          <div class="row">
            <div class="large-12 columns">
              <label>Product Title
                <input type="text" name="title" placeholder="Title" />
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Price
                <input type="text" name="price" placeholder="Price" />
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Product Description
                <textarea name="description"></textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Product Category
                <select name="category">
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Product Image
                <input type="file" name="photo" />
              </label>
            </div>
          </div>
          <div class="row">
            <input type="submit" class="button" value="Save Product" />
          </div>
        </form>

      </div>
    </div>

@stop