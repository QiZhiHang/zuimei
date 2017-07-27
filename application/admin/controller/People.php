<?php
namespace app\admin\controller;
use app\common\controller\Curd;
use think\Request;

class People extends Curd {


    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->init();

    }
    public function init(){

        $this->route = 'people';  //路由(填写资源路由)
        $this->label = '';  //标题展示

        //字典
        $this->translations = ['id'  => ['text' => ''],
            'name'  => ['text' => ''],
            'age'  => ['text' => ''],
            ];

        //列表页字段
        $this->listFields = [
            'id', 'name', 'age', 
        ];

        //表单页字段
        $this->formFields = [
            'id', 'name', 'age', 
        ];

    }
    //实例化model类（不可删，必写）
    public function model()
    {
        return \app\common\model\People::class;
    }
}