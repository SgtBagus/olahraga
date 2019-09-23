<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Field extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function view(){
		$data['Page'] = "Field";
        $this->template->load('template/template','field/view', $data); 
	}
	
}