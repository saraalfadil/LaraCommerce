<?php

class ProductController extends BaseController {

	public function index()
	{
	   $products = Product::all();
       return View::make('admin.products.index')->with('products', $products);
	}

	public function store()
	{
	   $title = Input::get('title');
	   $price = Input::get('price');
	   $description = Input::get('description');
	   $category = Input::get('category');
	   $product = new Product;
	   $product->title = $title;
	   $product->price = $price;
	   $product->description = $description;
	   $product->category_id = $category;
	   if($product->save()) {
	   		return Redirect::to('admin/products')->with('message', 'Product successfully created');
	   }
	}

	public function create()
	{	
	   $categories = Category::all();
       return View::make('admin.products.create')->with('categories', $categories);
	}

	public function edit($id) 
	{
		$categories = Category::orderBy('name', 'asc')->get();
		$product = Product::find($id);
		return View::make('admin.products.edit')->with(array('product' => $product, 'categories' => $categories));
	}

	public function update($id) 
	{
		$product = Product::find($id);
		$title = Input::get('title');
		$price = Input::get('price');
		$description = Input::get('description');
		$category = Input::get('category');
		$product->title = $title;
		$product->price = $price;
		$product->description = $description;
		$product->category_id = $category;
		if($product->save()) {
			return Redirect::to('admin/products')->with('message', 'Product successfully updated');
		}
	}

	public function destroy($id) 
	{
		$product = Product::find($id);
		if($product->delete()) {
	   		return Redirect::to('admin/products')->with('message', 'Product successfully deleted');
	    }
	}

}
