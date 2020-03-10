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
        $list=DB::table('nav')->first();
        var_dump($list);

    }

}
