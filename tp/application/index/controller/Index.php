<?php
namespace app\index\controller;

class Index extends\think\Controller
{
    public function index()
    {
        return  'hello,index';
    }

   
    public function student()
    {
        $student = \think\Db::query('SELECT * FROM `student`');
        $arr = [];
        foreach ($student as $v) {
            $arr[] =$v[`name`];
        }
            return implode(',' $arr);
    }
}
