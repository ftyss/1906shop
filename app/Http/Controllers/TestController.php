<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function redis1()
    {
        $key='aaa';
        $val='hello world';
        Redis::set($key,$val);
        echo "set 成功";
    }

    public function redis2()
    {
        $key='aaa';
        $val=Redis::get($key);

        echo "val:".$val;
    }

    public function mysql1()
    {
//        $list=DB::table('nav')->first();
//        var_dump($list);

        $data=[
            'navname'=>'中餐厅',
        ];
        $res=DB::table('nav')->insert($data);
        echo '<hr>';
        var_dump($res);
    }

    public function mysql2()
    {
        $res=DB::table('nav')->where(['navid'=>7])->get()->toArray();
        print_r($res);
    }

    public function mysql3()
    {
        $users = DB::connection('shop1')->table('nav')->where(['navid'=>6])->get()->toArray();
        print_r($users);
    }

    public function mysql4()
    {
        $users = DB::connection('shop2')->table('nav')->where(['navid'=>6])->get()->toArray();
        print_r($users);
    }

}
