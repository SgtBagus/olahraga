<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['Page'] = "Home";
        $this->template->load('template/template','index', $data); 
	}
	
}