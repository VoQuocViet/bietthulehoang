<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'tbl_entry';
	protected $fillable = ['entry_id','entry_name','tieude_khongdau','entry_name_en','entry_content','entry_content_en','entry_img','entry_datetime','menu_id','entry_status','meta_title','meta_description','meta_keywords'];
	public $timestamps = false;
	
// 	public function cate() {
// 		return $this->belongsTo('App\Cate');
// 	}
// 	public function user() {
// 		return $this->belongsTo('App\User');
// 	}
// 	public function pimages(){
// 		return $this->hasMany('App\ProductImage');
// 	}
}
