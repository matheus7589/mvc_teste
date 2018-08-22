<?php

include_once './models/testeModel.php';

class testeController {

	private $viewsPath;
	private $testeModel;

	public function __construct() {
		$this->viewsPath = './views/';
		$this->testeModel = new testeModel();
}


	public function index(){
		$title = 'primeiro teste';
		$this->testeModel->save();
		include $this->viewsPath . 'testeView.php';
	}

	public function view(){
		$title = 'Render after first view';
		include $this->viewsPath . 'afterView.php';
	}

}
