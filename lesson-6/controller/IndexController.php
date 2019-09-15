<?php

class IndexController extends Controller {

    public function __construct()
    {
        parent::__construct();
        //Определяем основной шаблон контроллера
        $this->template = 'index.tpl';
    }


    public function index(){
        $this->vars['content'] = '';
        return $this->renderOutput();
    }


}