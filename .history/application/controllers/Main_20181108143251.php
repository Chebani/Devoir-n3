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
		$data=$this->myModel->login_user($user_login['login'],$user_login['mdp']);
      if($data)
      {
        $_SESSION['idUser']=$data['idUser'];
        $_SESSION['nomUser']=$data['nomUser'];
        $_SESSION['login']=$data['login'];
        $_SESSION['photoUser']=$data['photoUser'];

        redirect('user/home');
   
      }

		
	}
}
