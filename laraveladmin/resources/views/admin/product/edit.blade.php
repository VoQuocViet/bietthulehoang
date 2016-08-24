@extends('admin.master') @section('controller','Product')
@section('action','Edit') @section('content')
<style>
<!--
	.icon_del {
		position: relative;
		top: 0px;
	}
	#insert { margin-top: 20px;}
-->
</style>
<form action="" method="POST" name="frmEditproduct" enctype="multipart/form-data">
<div class="col-lg-7" style="padding-bottom: 120px">
	@include('admin.blocks.error')
	
		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
		
		<form action="" method="POST">
		<div class="form-group">
			<label>Tựa đề</label> <input class="form-control" name="txtEntryName" value="{!! old('txtEntryName',isset($product) ? $product->entry_name : null) !!}"
				placeholder="Please Enter Username" />
		</div>
		<div class="form-group">
			<label>Nội dung tin tức</label>
			<textarea class="form-control" rows="3" style="width: 100%" name="txtEntryContent">{!! old('txtEntryContent',isset($product) ? $product->entry_content : null) !!}</textarea>
			<script type="text/javascript">ckeditor("txtEntryContent")</script>
		</div>
		<div class="form-group">
			<label>Meta Title</label> <input class="form-control" name="txtMetaTitle" value="{!! old('txtMetaTitle',isset($product) ? $product->meta_title : null) !!}"
				placeholder="Please Enter MetaTitle" />
		</div>
		<div class="form-group">
			<label>Meta Description</label>
			<textarea class="form-control" rows="3" style="width: 100%" name="txtMetaDescription">{!! old('txtMetaDescription',isset($product) ? $product->meta_description : null) !!}</textarea>
			<!-- <script type="text/javascript">ckeditor("txtEntryContent")</script> -->
		</div>
		<div class="form-group">
			<label>Meta Keywords</label> <input class="form-control" name="txtMetaKeywords" value="{!! old('txtMetaKeywords',isset($product) ? $product->meta_keywords : null) !!}"
				placeholder="Please Enter MetaKeywords" />
		</div>
		<div class="form-group">
				<label>Images Current</label> 
				<img width="150px" src="{!! asset('../images/tintuc/'.$product->entry_img) !!}" />
				<input type="hidden" name="fImages" value="{!! $product->entry_img !!}"/>
			</div>
		<!-- <div class="form-group">
			<label>Hình ảnh đại diện</label> <input type="file" name="fImages" value="{!! old('fImages') !!}">
		</div> -->
			
			
			
			<button type="submit" class="btn btn-default">Product Edit</button>
			<button type="reset" class="btn btn-default">Reset</button>
</div>


<form>
@endsection()
