<?php 
class Book extends Eloquent {
	public $timestamps = false;
	protected $fillable = array('title','author','booktype_id');	
	
	public function booktype() {
		return $this->belongsTo('Booktype');
	}
}

?>