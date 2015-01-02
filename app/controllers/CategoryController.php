<?php

class CategoryController extends BaseController {

	public function index()
	{
	   $categories = Category::all();
       return View::make('admin.categories.index')->with('categories', $categories);
	}

	public function store()
	{
	   $name = Input::get('name');
	   $description = Input::get('description');
	   $category = new Category;
	   $category->name = $name;
	   $category->description = $description;
	   if($category->save()) {
	   		return Redirect::to('admin/categories')->with('message', 'Category successfully created');
	   }
	}

	public function create()
	{	
       return View::make('admin.categories.create');
	}

	public function edit($id) 
	{
		$category = Category::find($id);
		return View::make('admin.categories.edit')->with('category', $category);
	}

	public function update($id) 
	{
		$category = Category::find($id);
		$name = Input::get('name');
		$description = Input::get('description');
		$category->name = $name;
		$category->description = $description;
		if($category->save()) {
			return Redirect::to('admin/categories')->with('message', 'Category successfully updated');
		}
	}

	public function destroy($id) 
	{
		$category = Category::find($id);
		if($category->delete()) {
	   		return Redirect::to('admin/categories')->with('message', 'Category successfully deleted');
	    }
	}

}
