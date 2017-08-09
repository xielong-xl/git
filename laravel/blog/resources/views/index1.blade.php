@include ('header')
<form action="{{url('ceshi1')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
	姓名：<input type="text" name="name" /><br/>
	密码：<input type="password" name="pword" ><br>
	年龄：<input type="text" name="age" value=""><br/>
	性别：<input type="radio" name="sex" checked="checked" value="男">男<input type="radio" name="sex" value="女">女<br>
	头像：<input type="file" name="img"><br>
	地址：<input type="text" name="addres" value=""><br>
	<input type="submit" name="sub" value="注册">
</from>
@if(count($errors)>0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

<table width="50%" border="1px" height="300px">
	<tr>
		<th>姓名</th>
		<th>年龄</th>
		<th>性别</th>
		<th>头像</th>
		<th>地址</th>
		<th>操作</th>
	</tr>
	@foreach($data as $v)
	<tr>
		<td>{{$v->Name}}</td>
		<td>{{$v->Age}}</td>
		<td>{{$v->Sex}}</td>
		<td>
		@if(($v->img)!='')
			<img src="{{$v->img}}">
		@else
			<p>no 图片</p>
		@endif
		</td>
		<td>{{$v->Addres}}</td>
		<td><a href="{{url('ceshi2',['id'=>$v->Users_Id])}}">删除</a>&nbsp;&nbsp;&nbsp;<a href="{{url('ceshi3',['id'=>$v->Users_Id])}}">修改</a></td>
	</tr>
	@endforeach
</table>
{{$data->links()}}