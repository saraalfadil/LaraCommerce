@extends('admin.master')

@section('content')

    <!-- Page header -->
    <div class="row heading">
      <div class="large-11 columns large-centered">
        <h4>Manage Products</h4>
      </div>
    </div>

    <!-- Page content -->
    <div class="row">
      <div class="large-11 columns large-centered">

        <!-- Search bar-->
        <div id="search" class="row">
          <div class="large-3 columns">
              <a class="button" href="products/create">Add New Product</a>
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

        <!-- Products table-->
        <div class="row">
          <table class="page_table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Price</th>
              <th>Category</th>
              <th>Options</th>
            </tr>
          </thead>
          @foreach ($products as $product)
            <tr>
              <td class="image"><img src="http://placehold.it/100x100&text=Product" /></td>
              <td>{{ $product->title }}</td>
              <td>$ {{ $product->price }}</td>
              <td>{{ $product->category->name; }}</td>
              <td>
                <ul class="button-group">
                  <li>
                    <a href="products/{{ $product->id }}/edit" class="button tiny"><i class="fa fa-pencil fa-fw"></i></a>
                  </li>
                  <li>
                    {{ Form::open(array('route' => array('admin.products.destroy', $product->id), 'method' => 'delete')) }}
                    <button type="submit" class="button tiny"> <i class="fa fa-trash-o fa-fw"></i></button>
                    {{ Form::close() }}
                  </li>
                </ul>
              </td>
            </tr>
          @endforeach
          </table>
        </div>

      </div>
    </div>
@stop