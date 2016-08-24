<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Cate;
use App\Http\Requests\ProductRequest;
use App\Product;
use Input,File;
use App\ProductImage;
use Illuminate\Support\Facades\Auth;
use DB;

class ProductController extends Controller {

	public function getList(){
		$data = Product::select('entry_id','entry_name','entry_datetime','entry_img')->orderBy('entry_id','DESC')->get()->toArray();
		return view('admin.product.list', compact('data'));
	}
	public function getAdd(){
		//$cate = Cate::select('name','id','parent_id')->get()->toArray();
		return view('admin.product.add');
	}
	public function postAdd(ProductRequest $product_request){
		$file_name = $product_request->file('fImages')->getClientOriginalName();
		$product_select = Product::select('entry_id')->orderBy('entry_id','DESC')->get()->toArray();
		$product = new Product();
		foreach ($product_select as $p) {
			$product->entry_id = (string) ($p['entry_id'] + 1);
			break;
		}
		$product->entry_name = $product_request->txtEntryName;
		$product->tieude_khongdau = changeTitle($product_request->txtEntryName);
		$product->entry_name_en = $product_request->txtEntryName;
		$product->entry_content = $product_request->txtEntryContent;
		$product->entry_content_en = $product_request->txtEntryContent;
		$product->entry_img = $file_name;
		$product->entry_datetime =  date('Y-m-d H:i:s');;
		$product->menu_id = 8;
		$product->entry_status = 1;
		$product->meta_title = $product_request->txtMetaTitle;
		$product->meta_description = $product_request->txtMetaDescription;
		$product->meta_keywords = $product_request->txtMetaKeywords;
		$product_request->file('fImages')->move('../images/tintuc/',$file_name);
		$product->save();
		
// 		$product_id = $product->id;
// 		if(Input::hasFile('fProductDetail')){
// 			foreach (Input::file('fProductDetail') as $file){
// 				$product_img = new ProductImage();
// 				if(isset($file)){
// 					// Tiến hành upload hình lên server
// 					$product_img->image = $file->getClientOriginalName();
// 					$product_img->product_id = $product_id;
// 					$file->move('resources/upload/detail/',$file->getClientOriginalName());
					
// 					// Lưu vào table product_image
// 					$product_img->save();
// 				}
// 			}
// 		}
		return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Add Entry']);
	}
	public function getDelete($id){
		
		//Bước 1: xóa hình Detail (table product_image)
		$product_detail = Product::find($id)->pimages->toArray();
		/*
		echo "<pre>";
		print_r($product_detail);
		echo "</pre>";
		*/
		foreach ($product_detail as $value){
			File::delete('resources/upload/detail/'.$value["image"]);
		}
		
		// Bước 2: Xóa hình chính (table Product)
		$product = Product::find($id);
		File::delete('resources/upload/'.$product->image);// image : trường trong csdl
		
		// Bước 3: Xóa Product (khi xóa Product sẽ tự động xóa trong Detail, do đã có ràng buộc 
		$product->delete($id);
		
		// Sau khi xóa thì chuyển trang về ListProduct
		return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Delete Product']);
	}
	
	public function getEdit($entry_id){
		
		$product = DB::table('tbl_entry')->where('entry_id', $entry_id)->first();
		//$product_image = Product::find($id)->pimages;
		return view('admin.product.edit', compact('product'));
	}
	public function postEdit($entry_id, Request $request){
		
// 		if(!empty(Request::file('fEditDetail'))){
// 			print_r(Request::file('fEditDetail'));
// 		}
		
// 		die();
		//$product = Product::find($id);

		//$product = DB::table('tbl_entry')->where('entry_id', $entry_id)->first();
		// $product = Product::find($entry_id);
		// $product->entry_name = Request::input('txtEntryName');
		// $product->entry_content = Request::input(Request::input('txtEntryContent'));
		// $product->meta_title = Request::input('txtMetaTitle');
		// $product->meta_description = Request::input('txtMetaDescription');
		// $product->meta_keywords = Request::input('txtContent');
		
		// $img_current = 'resources/upload/'.Request::input('entry_img');
		// if(!empty(Request::file('fImages'))){
		// 	$file_name = Request::file('fImages')->getClientOriginalName();
		// 	//echo $file_name;
		// 	$product->image = $file_name;
		// 	Request::file('fImages')->move('../images/tintuc/', $file_name);
		// 	if(File::exists($img_current)){
		// 		File::delete($img_current);
		// 	}
		// } else {
		// 	echo "Không có file";
		// }
		// $product->save();	




		DB::table('tbl_entry')
            ->where('entry_id', $entry_id)
            ->update(['entry_name' => Request::input('txtEntryName'),
            		  'entry_content' => Request::input('txtEntryContent'),
            		  'meta_title' => Request::input('txtMetaTitle'),
            		  'meta_description' => Request::input('txtMetaDescription'),
            		  'meta_keywords' => Request::input('txtMetaKeywords'),
            		  ]);


		/*
		if(!empty(Request::file('fEditDetail'))){
			foreach(Request::file('fEditDetail') as $file){
				$product_img = new ProductImage();
				if(isset($file)){
					$product_img->image = $file->getClientOriginalName();
					$product_img->product_id = $id;
					$file->move('resources/upload/detail/', $file->getClientOriginalName());
					$product_img->save();
				}
			}			
		}
		*/
		return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Update Product']);
	}
	public function getDelImg($id){
		if(Request::ajax()){
			$idHinh = (int)Request::get('idHinh');
			$image_detail = ProductImage::find($idHinh);
			if(!empty($image_detail)){
				$img = 'resources/upload/detail'.$image_detail->$image;
				if(File::exists($img)){
					File::delete($img);
				}
				$image_detail->delete();
			}
			return "OK";
		}
	}
}
