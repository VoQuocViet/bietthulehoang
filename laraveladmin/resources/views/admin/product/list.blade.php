@extends('admin.master') @section('controller','Product')
@section('action','List') @section('content')
<table class="table table-striped table-bordered table-hover"
	id="dataTables-example">
	<thead>
		<tr align="center">
			<th>ID</th>
			<th>Name</th>
			<th>Date</th>
			<th>Image</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
	@foreach($data as $item)
		<tr class="odd gradeX" align="center">
			<td>{!! $item["entry_id"] !!}</td>
			<td style="text-align: left;">{!! $item["entry_name"] !!}</td>
			<td>{!! \Carbon\Carbon::createFromTimestampUTC(strtotime($item["entry_datetime"]))->diffForHumans(); !!}</td>
			<td>{!! $item["entry_img"] !!}</td>
			
			<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="product/edit/{{ $item["entry_id"] }}" onclick="return xacnhanxoa('Do you want to delete this Product?')">
					Delete</a></td>
			<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.product.getEdit',$item['entry_id']) !!}">Edit</a></td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection()
