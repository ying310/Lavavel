@extends('layouts.master')

@section('title', $title)

@section('content')
<h1>{{$title}}</h1>
@include('components.socialBotton')
E-mail:
<input type="text" name="email" placeholder="Email"/>

密碼:
<input type="password" name="password" placeholder="密碼"/>
@endsections
