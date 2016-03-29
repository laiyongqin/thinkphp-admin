<?php

namespace Admin\Controller;

class UserController extends __Controller {

    public function index() {
        $this->meta_title = '前台用户管理';
        $list = $this->model->get('select',false,false,array('id' => 'desc'));
        $this->assign('_list_',$list);
        $this->display();
    }

    public function status($id, $value)
    {
        parent::status($id, $value); // TODO: Change the autogenerated stub
    }

}