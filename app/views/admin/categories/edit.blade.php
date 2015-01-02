@extends('admin.master')

@section('content')

    <!-- Page header -->
    <div class="row heading">
      <div class="large-11 columns large-centered">
        <h4>Edit Category</h4>
      </div>
    </div>

    <!-- Page content -->
    <div class="row">
      <div id="content" class="large-11 columns large-centered">
        <form method="post" action="/admin/categories/{{ $category->id }}" class="page_form">
          <div class="row">
            <div class="large-12 columns">
              <label>Category Name
                <input type="text" name="name" placeholder="Name" value="{{ $category->name }}" />
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Category Description
                <textarea name="description">{{ $category->description }}</textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <input type="hidden" name="_method" value="put" />
            <input type="submit" class="button" value="Save Category" />
          </div>
        </form>
      </div>
    </div>

@stop