<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['Page'] = "Search";
        $this->template->load('template/template','search', $data); 
	}
	
}