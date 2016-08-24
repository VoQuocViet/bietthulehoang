@extends('admin.master') 
@section('controller','Tin Tức')
@section('action','Thêm') 
@section('content')
<form action="{!! url('admin/product/add') !!}" method="POST" enctype="multipart/form-data">
<div class="col-lg-12" style="padding-bottom: 120px">
	@include('admin.blocks.error')
	<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
		<div class="form-group">
			<label>Tựa đề</label> <input class="form-control" name="txtEntryName" value="{!! old('txtEntryName') !!}"
				placeholder="Please Enter Username" />
		</div>
		<div class="form-group">
			<label>Nội dung tin tức</label>
			<textarea class="form-control" rows="3" style="width: 100%" name="txtEntryContent">{!! old('txtEntryContent') !!}</textarea>
			<script type="text/javascript">ckeditor("txtEntryContent")</script>
		</div>
		<div class="form-group">
			<label>Meta Title</label> <input class="form-control" name="txtMetaTitle" value="{!! old('txtMetaTitle') !!}"
				placeholder="Please Enter MetaTitle" />
		</div>
		<div class="form-group">
			<label>Meta Description</label>
			<textarea class="form-control" rows="3" style="width: 100%" name="txtMetaDescription">{!! old('txtMetaDescription') !!}</textarea>
			<!-- <script type="text/javascript">ckeditor("txtEntryContent")</script> -->
		</div>
		<div class="form-group">
			<label>Meta Keywords</label> <input class="form-control" name="txtMetaKeywords" value="{!! old('txtMetaKeywords') !!}"
				placeholder="Please Enter MetaKeywords" />
		</div>
		<div class="form-group">
			<label>Hình ảnh đại diện</label> <input type="file" name="fImages" value="{!! old('fImages') !!}">
		</div>
		<button type="submit" class="btn btn-default" style="background: orange; color: white; font-weight: bold;">Thêm tin tức</button>
		<button type="reset" class="btn btn-default">Nhập lại</button>
</div>
<form>
@endsection()
