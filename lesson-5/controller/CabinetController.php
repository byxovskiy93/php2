<?php
class CabinetController extends Controller {

    public function __construct(){
        $this->isAuth();
        parent::__construct();
        $this->template = 'index.tpl';
    }

    public function index(){
        $this->title = 'Личный кабинет';
        $this->vars['content'] = $this->twig->render('cabinet.tpl',['title' =>  $this->title]);
        return $this->renderOutput();
    }


    public function isAuth(){
        if(empty($_SESSION['login'])){
            header('Location: /autorisation/?action=login');
        }
    }

}