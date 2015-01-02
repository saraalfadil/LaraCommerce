@extends('admin.master')

@section('content')

    <!-- Page header -->
    <div class="row heading">
      <div class="large-11 columns large-centered">
        <h4>Create Category</h4>
      </div>
    </div>

   <!-- Page content -->
    <div class="row">
      <div id="content" class="large-11 columns large-centered">
        <form method="post" action="/admin/categories" class="page_form">
          <div class="row">
            <div class="large-12 columns">
              <label>Category Name
                <input type="text" name="name" placeholder="Name" />
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Category Description
                <textarea name="description"></textarea>
              </label>
            </div>
          </div>
          <div class="row">
            <input type="submit" class="button" value="Save Category" />
          </div>
        </form>
      </div>
    </div>

@stop