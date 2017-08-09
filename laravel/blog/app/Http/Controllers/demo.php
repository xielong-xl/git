<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\models as Study;


class demo extends Controller
{
    public function aaa($id='kkkk')
     {
     	 echo 'aaaaddddddddddddd'.$id;
     }
     public function bbb(Request $request)
     {
         $data=$request->all();//获取全部的值
         $name=$request->input('name');//获取name 的值
         //var_dump($data);
         dd($data);
         dd($name);

     }
     public function ccc(Request $request)
     {
        $data=$request->path();

        var_dump($data);
        echo '<hr>';
        $url=$request->url();
        var_dump($url);
        echo '<hr>';
        $ss=$request->fullUrl();
        var_dump($ss);
        $bool=$request->isMethod('post');
        var_dump($bool);
     }
     public function ddd(Request $request)
     { 
         /*添加cookie*/
    //      return response('Hello World')->cookie(
				//     'name1', 'vaddddddddlue', 3600
				// );
         
     	/*获取cookie*/
       // $dd= $request->cookie('name');
       // var_dump($dd);
     }
    
     public function fff1()
     {
        echo 'fff1pppppppppppp';
     }
     public function fff2()
     { 
        //return redirect()->action('HomeController@index');
         return redirect()->action('Bbb@success');
        // return back()->withInput();

        //return redirect('bbb/fff1');
         return redirect()->route('profile');

     }

     public function zhong()
     {
         echo 'lllllllll';
     }


     public function success($id='')
     {
         echo '页面重定向'.$id;
     }

     public function db1()
     {
        //$data=DB::select('select * from study1');
        //$data=DB::select('select name from study1 where id=1');
        /*框架都是读写分离  是为了提高效率*/
        //$data=DB::insert("insert into study1(name)values('不知先生')");
       // $data=DB::update("update study1 set name ='知道先生'where id=86");
        // $data=DB::delete("delete from study1 where id='87'");
        //$data=DB::select("select * from study1 inner join study on study1.id=study.id");
         //var_dump($data);

       // $data=DB::table('study1')->get();
        //$data=DB::table('study1')->first();
        //$data=DB::table('study1')->where(['id'=>10])->first();
       // $data=DB::table('study1')->where('id',14)->first();
        //$data=DB::table('study1')->where(['id'=>10])->value('name');
       /*不知道是什么顺序*/
        // $data=DB::table('study1')->pluck('name','age');

        // foreach ($data as $key => $value) {
        //     var_dump($value);
        //     echo '<hr>';
        //     var_dump($key);
        //     echo '<hr>';
        // }
    

   

       //  echo '<pre>';
       // var_dump($data);

       //$data=DB::table('study1')->count();
       //$data=DB::table('study1')->max('age');
       //$data=DB::table('study1')->min('age');
       //$data=DB::table('study1')->sum('age');
       //$data=DB::table('study1')->where('age','>',80)->get();
       //$data=DB::table('study1')->where(['name'=>'张思'])->get();
       //$data=DB::table('study1')->where('name','like','%张%')->get();
        // $data=DB::table('study1')->where([
        //        ['name','like','%张%'],
        //        ['age','>',40]
               
        //     ])->get();


      // $data = DB::table('study1')->select('name')->get();
      // $data = DB::table('study1')->distinct()->select('name')->get();
       //echo '<pre>';
       // DB::table('study1')->orderBy('id','desc')->chunk(100, function ($users) {
       //          foreach ($users as $user) {
       //             echo  $user->name.'<br/>';
       //             echo  $user->age.'<br/>';
       //          }
       //      });


       // $data=DB::table('study1')->select('name','age')->get();
       // //var_dump($data);
       // foreach ($data as $key => $value) {
       //      echo  $value->name.'<br>';
            
       // }
      //调试模式查看原生的sql语句
      /// DB::connection()->enableQueryLog();

       // $data=DB::table('study1')->distinct()->select('name')->get();
       // $data=DB::table('study1')->distinct()->pluck('name');    
     //  echo '<pre>';
       // $data=DB::table('study1')->select('name'); 
       // $dd=$data->addSelect('age')->get();

        //Elequent ORM ->toSql();
        //$data->toSql();
      //$dd=DB::getQueryLog();

      // return response()->json(DB::getQueryLog());
       //var_dump($dd);
      //$sql= DB::getQueryLog();

     //   echo '<pre>';
     //   DB::connection()->enableQueryLog();
     // // $data=DB::table('study1')->where('age','<',50)->orWhere('name','=','少林武功')->get();
     //    $data=DB::table('study1')->whereNotBetween('age',[20,30])->get();
     //   //select * from `study1` where `age` < 50 or `name` = '少林武功'"
     //   $sql= DB::getQueryLog();

     //     var_dump($sql);

       // $obj=new Study();
       // $data=$obj::all();


       // echo '<pre>';
       // foreach ($data as $key => $value) {
       //     //echo  $value->xingming;
       //     var_dump($value['xingming']);
       // }
       

       //$obj=new Study();

       // $obj::all();
       //$data=$obj->studyA();


       // if($data){
       //  echo 'true';
       // }else{
       //   echo 'false';
       // }
        //  echo '<pre>';
        // foreach ($data as $key => $value) {
        //      echo $value->name;

        // }  
     }

     public function view1()
     {


         $data='php学习进阶班';
         $datas='php和web班';
         $sss=DB::table('study1')->get();
         $sss1=DB::table('study1')->where(['id'=>1])->first();

         return view('index',['data'=>$data,'datas'=>$datas,'sss'=>$sss,'sss1'=>$sss1,'name'=>11]);
     }
     public function bbb1(Request $request,$id)
     {
     	$data=DB::table('study1')->where(['id'=>$id])->get();
     	var_dump($data);

     // 	if($bool=='true')
     // 	{
     // 		echo 123;
     // 	}
     // 	else
     // 		{return redirect()->route('jjjj',['id'=>4]);
     // }
     }
     public function models1()
     {
        $obj=new Study();
        $obj->all();
        echo $obj->toSql(); //在模型中输出sql语句
     }
    public function models2()
    {
      echo 123;
    }


}
