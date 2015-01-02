<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->call('CategoryTableSeeder');
        $this->call('ProductTableSeeder');
	}

}


class ProductTableSeeder extends Seeder {

    public function run()
    {
        DB::table('products')->delete();

        Product::create(array(
        	'title' => 'Metallica T-Shirt',
        	'price' => 24.95,
        	'description' => 'Metallica artwork from the Master of Puppets albumn.',
            'category_id' => 1,
        	)
        );

        Product::create(array(
        	'title' => 'Iron Maiden T-Shirt',
        	'price' => 24.95,
        	'description' => 'Classic Iron Maiden design.',
            'category_id' => 1,
        	)
        );

        Product::create(array(
            'title' => 'The Hobbit',
            'price' => 66,
            'description' => 'The Hobbit, or There and Back Again is a fantasy novel and by English author J. R. R. Tolkien.',
            'category_id' => 2,
            )
        );

        Product::create(array(
            'title' => 'Javascript: The Good Parts',
            'price' => 123,
            'description' => "Most programming languages contain good and bad parts, but JavaScript has more than its share of the bad, having been developed and released in a hurry before it could be refined. This authoritative book scrapes away these bad features to reveal a subset of JavaScript that's more reliable, readable, and maintainable than the language as a whole—a subset you can use to create truly extensible and efficient code.",
            'category_id' => 2,
            )
        );
    }

}

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->delete();

        Category::create(array(
            'name' => 'Apparel',
            'description' => 'Clothing for men & woman',
            )
        );

        Category::create(array(
            'name' => 'Books',
            'description' => "Everyone's favorite pasttime",
            )
        );
    }

}