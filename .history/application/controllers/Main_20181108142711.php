<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('Main_view');
	}

	function connexion(){
		$nomUser = $_POST['nom'];
		if($nomUser == 'Girard' || $nomUser == 'girard' ){
			$admin = true;
		}

		
	}
}
