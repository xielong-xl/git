<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/profile', function () {
    return '命名路由';
})->name('profile');



// Route::get('/', function () {
//     return '你好中国';
// });
// /*路由和控制器方法定义*/
// Route::any('aaa/{id}', 'Bbb@aaa');
// Route::any('bbb', 'Bbb@bbb');
// Route::get('ccc1/{id?}', 'Bbb@ccc');
// Route::get('ddd1', 'Bbb@ddd');


// /*必选参数的路由*/
// Route::get('bbb/{id}', function ($id){
//      return $id;
// });
// /*可选参数的路由*/
// // Route::get('ccc/{id?}',function($id='ddddddd'){
// // 	 return $id;
// // });

// /*定义多个路由*/
// Route::get('ddd/{post}/kkk/{llll}',function($id,$ids){
//     return $id.'-----'.$ids;
// });
// /*正则约束路由*/
// Route::get('user/{name}',function($name){
// 	  return $name;

// })->where('name','[A-Za-z]+');
// /*数字约束*/
// Route::get('user1/{num}',function($num){
// 	return $num;
// })->where('num','[0-9]+');
// /*定义两个路由 正则约束*/
// Route::get('user2/{id}/kkk/{name}',function($id,$name){
//     return $id.'====='.$name;
// })->where(['id'=>'[0-9]+','name'=>'[a-z]+']);


// Route::group(['prefix'=>'bbb'],function(){
//        Route::get('fff1', 'demo@fff1');
//        Route::get('fff2', 'demo@fff2');
//        Route::get('fff3',function(){
//           return redirect('/');
//        });
//   });



// Route::group(['middleware' =>'CheckAge'], function () {
  
//       Route::get('zhong', 'demo@zhong');
      
//       Route::get('jjjj',function(){
//            return 'jjjjjjjjjj';
//       });

// });


Route::get('success/{id?}', 'demo@success')->name('jjjj');
Route::get('db1', 'demo@db1');
Route::get('view1', 'demo@view1');
Route::post('bbb1', 'demo@bbb1');
Route::any('aaa/{id?}','demo@bbb1');

Route::any('models1','demo@models1');



/* 下面是小测试的路由*/

Route::any('ceshi1','ceshi@ceshi1');
Route::any('ceshi','ceshi@ceshi');
Route::any('ceshi2/{id?}','ceshi@ceshi2');
Route::any('ceshi3/{id?}','ceshi@ceshi3');

