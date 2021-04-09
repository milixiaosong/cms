<?php

namespace Code\Home;

use Core\Smarty_new;

class Page{
    public function index(){
        $smarty=Smarty_new::new_smarty();
        $smarty->display("index.html");
    }
}

