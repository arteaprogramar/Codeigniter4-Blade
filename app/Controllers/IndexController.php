<?php

namespace App\Controllers;

class IndexController extends BaseController {

    public function index() {
        return $this -> blade -> run('index', ['title' => 'Codeigniter with blade']);
    }

}
