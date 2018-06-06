<?php
namespace controllers;
 use Ubiquity\orm\DAO;

 /**
 * Controller Groupes
 **/
class Groupes extends ControllerBase{

	public function index(){
		echo "Action index";
	}

	public function afficher(){
		
		$groupes=DAO::getAll("models\\Groupe");
		
		$this->loadView('Groupes/afficher.html',["groupes"=>$groupes]);

	}

}
