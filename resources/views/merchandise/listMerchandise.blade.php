@extends('layout.master')
@section('title', $title)
@section('content')
<div class="container">
<h1>{{ $title }}</h1>
@include('components.validationErrorMessage')
<table border="solid" style="text-align:center">
<tr>
	<th>名稱</th>
	<th>照片</th>
	<th style="width:10	0px">價格</th>
	<th>剩餘數量</th>
</tr>
@foreach($MerchandisePaginate as $Merchandise)
<tr>
	<td><a href="/merchandise/{{ $Merchandise->id }}">{{ $Merchandise->name }}</a></td>
	<td>
		<a href="/merchandise/{{ $Merchandise->id }}">
			<img style="width:150px;height:150px" src="{{ $Merchandise->photo = $Merchandise->photo ?? '/assets/images/default-merchandise.jpg' }}"/>
		</a>
	</td>
	<td>{{ $Merchandise->price }}</td>
	<td>{{ $Merchandise->remain_count }}</td>
</tr>
@endforeach
</table>
	{{-- 分頁頁數按鈕 --}}
	{{ $MerchandisePaginate->links() }}
</div>
@endsection
