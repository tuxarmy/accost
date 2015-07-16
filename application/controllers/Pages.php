<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Public_Controller {
	public function index(){
		$this->render('public/homepage');
	}
}
