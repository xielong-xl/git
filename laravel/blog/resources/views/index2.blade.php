@extends('header')
@section('title','表单')
@section('content')

<form action="{{url('ceshi3')}}" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="hidden" name="id" value="{{$data->Users_Id}}">
	姓名：<input type="text" name="name" value="{{$data->Name}}" /><br/>
	密码：<input type="password" name="pword" value="{{$data->Pword}}" ><br>
	年龄：<input type="number" name="age" value="{{$data->Age}}"><br/>
	性别：<input type="radio" name="sex" checked="checked" value="男">男<input type="radio" name="sex" value="女">女<br>
	地址：<input type="text" name="addres" value="{{$data->Addres}}"><br>
	<input type="submit" name="sub" value="修改">
</from>


@endsection