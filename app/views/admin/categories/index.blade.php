@extends('admin.master')

@section('content')

    <!-- Page header -->
    <div class="row heading">
      <div class="large-11 columns large-centered">
        <h4>Manage Categories</h4>
      </div>
    </div>

    <!-- Page content -->
    <div class="row">
      <div class="large-11 columns large-centered">

        <!-- Search bar-->
        <div id="search" class="row">
          <div class="large-3 columns">
              <a class="button" href="categories/create">Add New Category</a>
              <select name="sort" class="medium">
                <option value="">Sort By</option>
                <option value="Price">Price</option>
                <option value="Category">Category</option>
              </select>
          </div>
          <div class="large-3 columns">
              <input type="text" name="search" placeholder="Search" />
          </div>
        </div>

        <!-- Category table-->
        <div class="row">
          <table class="page_table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Options</th>
              </tr>
            </thead>
            @foreach ($categories as $category)
              <tr>
                <td>{{ $category->name }}</td>
                <td>
                  <ul class="button-group">
                    <li>
                      <a href="categories/{{ $category->id }}/edit" class="button tiny"><i class="fa fa-pencil fa-fw"></i></a>
                    </li>
                    <li>
                      {{ Form::open(array('route' => array('admin.categories.destroy', $category->id), 'method' => 'delete')) }}
                      <button type="submit" class="button tiny"><i class="fa fa-trash-o fa-fw"></i></button>
                      {{ Form::close() }}
                    </li>
                  </ul>
                </td>
              </tr>
            @endforeach
          </table>
      </div>
    </div>
@stop