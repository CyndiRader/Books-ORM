<?php

class BooksTableSeeder extends Seeder {
	public function run() {
		DB::table('books')->delete();
		
		DB::table('books')->insert(array(
			array('id'=>1, 'title'=>'Animal Minds', 'author'=>'Griffin', 'booktype_id'=>'1'),
			array('id'=>2, 'title'=>"Nature's Keeper", 'author'=>'Budiansky', 'booktype_id'=>'1'),
			array('id'=>3, 'title'=>'Lifting the Veil', 'author'=>'Shepherd', 'booktype_id'=>'1'),		
			array('id'=>4, 'title'=>'The Murder of Roger Ackroyd', 'author'=>'Christie', 'booktype_id'=>'2'),		
			array('id'=>5, 'title'=>'The Catcher in the Rye', 'author'=>'Salinger', 'booktype_id'=>'2')		
		));
		DB::table('booktypes')->insert(array(
			array('id'=>1,  'name'=>"non-fiction"),
			array('id'=>2,  'name'=>"fiction")
    ));
	}
}

?>