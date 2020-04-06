@extends('layout.master')
@section('title', $title)
@section('content')
<div class="container">
<h1>{{$title}}</h1>
<table>
<tr>
  <th>商品資料</th>
  <th>照片</th>
  <th>單價</th>
  <th>數量</th>
  <th>總金額</th>
  <th>購買時間</th>
</tr>
@foreach($TransactionPaginate as $Transation)
<tr>
  <td>
  <a href="/merchandise/{{$Transation->Merchandise->id}}">
    {{$Transation->Merchandise->name}}
  </a>
  </td>
  <td>
    <a href="/merchandise/{{$Transation->Merchandise->id}}">
      <img style="width:100px;height:100px" src="{{$Transation->Merchandise->photo = $Transation->Merchandise->photo ?? '/assets/images/default-merchandise.jpg'}}"/>
    </a>
  </td>
  <td>{{$Transation->price}}</td>
  <td>{{$Transation->buy_count}}</td>
  <td>{{$Transation->total_price}}</td>
  <td>{{$Transation->created_at}}</td>
</tr>
@endforeach
</table>
{{--分頁頁數按鈕--}}
{{$TransactionPaginate->links()}}
</div>
@endsection
