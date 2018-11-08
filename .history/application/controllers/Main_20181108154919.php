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
	  }
	  $data["lesRegions"]=$this->myModel->getMesRegion($_SESSION['statutUser']);
	  $this->load->view("lesRegions_view",$data); 
		
	}

	function afficherVilles(){
		$idRegion = $_POST['idRegion'];
		$this->load->model("myModel");
		$data["lesVilles"]=$this->myModel->getLesVilles($idRegion);
		$this->load->view("lesVilles_view",$data); 
	}

	function ajouterLesPoints(){
		$points = $_POST['points'];
		$this->load->model("myModel");
		$this->myModel->addPoints($points);
	}
}
