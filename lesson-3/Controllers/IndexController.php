<?php
namespace Controllers;

class IndexController {

    protected $twig;
    protected $template;
    protected $vars = [];

    public function __construct(){
        $loader = new \Twig\Loader\FilesystemLoader(SITE_DIR."/views");
        $this->twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache',
            'auto_reload' => true,
            'autoescape' => false
        ]);
    }

    public function renderOutput(){
        $this->vars['navigator'] = $this->twig->render('layouts/topMenu.tpl');
        $this->vars['footer'] = $this->twig->render('layouts/footer.tpl');
        return $this->twig->render($this->template,$this->vars);
    }


}