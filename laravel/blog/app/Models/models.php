<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Models extends Model
{
     protected $table='study';

     public function studyA()
     {
        return  DB::table('study1')->where(['id'=>99])->select('name')->first();
     }
     
}
