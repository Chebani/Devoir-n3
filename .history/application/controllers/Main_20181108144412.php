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
			$statutUser = 'admin';
		}
		$this->load->model("myModel");
		$data=$this->myModel->login_user($nomUser);
      if($data)
      {
        $_SESSION['idUser']=$data['idUser'];
        $_SESSION['nomUser']=$data['nomUser'];
        $_SESSION['statutUser']=$data['statutUser'];

        $this->load->view("lesRegions_view"); 
      }

		
	}
}
