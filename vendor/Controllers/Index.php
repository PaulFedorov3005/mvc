<?php

namespace Controllers;

use Core\View;

class index extends AbstractController
{


    public function index(){
        $this->view->render('index_index_page');
    }
}
