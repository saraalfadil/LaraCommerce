<?php

class Product extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	public function category()
    {
        return $this->belongsTo('Category');
    }

}
