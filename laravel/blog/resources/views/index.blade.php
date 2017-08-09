@extends('head')
@section('title', '这个我也不知道')
@section('pp','这里是p标签的内容')
@section('content')
   @parent
   <p>这里的东西是在index立面</p>
   section和yield都是块  yield是一行 section是一块
   <hr/>
   {{$data}}
   {{time()}}
      <hr/>
   {{md5('123456')}}
   <hr/>
   {{date('Y-m-d H:i:s',time())}}
      <hr/>
   {{$datas}}
    <hr/>
    @foreach ($sss as $v)
        {{$v->name}}{{$v->age}}
    @endforeach
      <hr/> 
    {{$sss1->name}} {{$sss1->age}}

    {{URL::asset('/css/index.css')}}

    @if($name==1)
        {{$name}}
    @else
         <p>name判断失败</p>
    @endif
    
    <form action="{{url('bbb1')}}" method="post">
         <input type="hidden" name="_token" value="{{ csrf_token()}}">
    	 <input type="text" name="name"><br/>
    	 <input type="text" name="age"><br/>
    	 <input type="text" name="sex"><br/>
    	 <input type="submit" value="提交">
    </form>
    @include('div')
    
    <a href="{{url('aaa',['id'=>$name])}}">传参数</a>

     
@endsection


