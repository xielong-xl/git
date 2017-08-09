<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ceshi extends Controller
{
    //
    public function ceshi1(Request $request)
    {

    	/*表单验证*/
    	$this->validate($request,[
    		'name'=>'required',
    		'pword'=>'required',
    		'age'=>'required|integer|between:0,130',
    		'addres'=>'required'
    		],['name.required'=>'姓名不能为空',
    		'pword.required'=>'密码不能为空',
    		'age.between'=>'年龄必须在0-130之间']);
    	/*文件上传*/
    	$path=$request->file('img');//获取文件属性
    	$dir=$path->store('uploads');//给文件起一个名字,
    	$destinationpath='uploads';//文件夹的名字
    	// var_dump($destinationpath);
    	// echo "<hr>";
    	//var_dump($dir);
    	$bool=$path->move($destinationpath,$dir);
    	//var_dump($bool);
    	$data=$request->only(['name','pword','age','sex','addres']);//获取指定字段数据
    	$data['img']=$dir;
    	//var_dump($data);
    	$bool=DB::table('userinfo')->insert($data);
    	//var_dump($bool);
    }
    public function ceshi()
    {
    	$data=DB::table('userinfo')->paginate(5);//分页
    	return view('index1',['data'=>$data]);
    }
    public function ceshi2($id='')
    {
    	$bool=DB::table('userinfo')->where('Users_Id',$id)->delete();
    	var_dump($bool);
    }
    public function ceshi3(Request $request,$id='')
    {
    	if($request->isMethod('get'))
    	{
    		$data=DB::table('userinfo')->where('Users_Id',$id)->first();
    		//var_dump($data);
    		return view('index2',['data'=>$data]);
    	}
    	else{
    		$all=$request->all();
    		$data=$request->only(['name','pword','age','sex','addres']);
    		$id=$request->input('id');
    		
    		// var_dump($id);
    		// var_dump($data);
    		// echo "<hr>";
    		// var_dump($all);
    		$bool=DB::table('userinfo')->where(['Users_Id'=>$id])->update($data);
    		var_dump($bool);
    	}
    } 
    
}
