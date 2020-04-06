@extends('layout.master')
@section('title', $title)
@section('content')
<div class="container">
<h1>{{ $title }}</h1>
@include('components.ValidationErrorMessage')
<table>
<tr>
  <th>名稱</th>
  <td>{{$Merchandise->name}}</td>
</tr>
<tr>
  <th>照片</th>
  <td>
    <img src="{{$Merchandise->photo = $Merchandise->photo ?? '/assets/images/default-merchandise.jpg'}}"/>
  </td>
</tr>
<tr>
  <th>價格</th>
  <td>{{$Merchandise->price}}</td>
</tr>
<tr>
  <th>剩餘數量</th>
  <td>{{$Merchandise->remain_count}}</td>
</tr>
<tr>
  <th>介紹</th>
  <td>{{$Merchandise->introduction}}</td>
</tr>
<tr>
  <td colspan="2">
    <form method="post" action="/merchandise/{{$Merchandise->id}}/buy">
      購買數量
      <select name="buy_count">
        @for($count=0; $count<=$Merchandise->remain_count;$count++)
        <option value="{{$count}}">{{$count}}</option>
        @endfor
      </select>
      @if($Merchandise->remain_count > 0)
      <button type="submit">購買</button>
      @else
      <button type="submit" disabled>購買</button>
      @endif
      {!! csrf_field() !!}
    </form>
  </td>
</tr>
</table>
</div>
@endsection
