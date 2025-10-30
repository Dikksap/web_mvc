<?php

class Home extends Controller {
    public function index() {
        $data['judul'] = 'HOME';

        $this->view('home/index', $data);
    }
}
