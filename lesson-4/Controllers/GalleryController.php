<?php

namespace Controllers;

use Models\DbModel;
use Models\GalleryModel;

class GalleryController extends IndexController {

    private $gallery_model;

    public function __construct()
    {
        parent::__construct();
        $this->gallery_model = new GalleryModel(DbModel::getInstance());
        //Определяем основной шаблон контроллера
        $this->template = 'gallery.tpl';
    }

    public function index(){
            $gallery = $this->gallery_model->getAllImages();
            $this->vars['content'] = $this->twig->render('galleryContent.tpl',['gallery' => $gallery]);
            return $this->renderOutput();
    }

    public function show($id){
        $images = $this->gallery_model->getOneImages($id);
        $this->vars['content'] = $this->twig->render('galleryContentOne.tpl',['images' => $images]);
        return $this->renderOutput();
    }
}