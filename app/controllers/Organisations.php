<?php
namespace controllers;
 use Ubiquity\orm\DAO;

 /**
 * Controller Organisations
 **/
class Organisations extends ControllerBase{

	public function index(){
		$organisations=DAO::getAll("models\\Organization");
		$this->loadView("Organisations/index.html",["orgas"=>$organisations]);
	}

	public function display ($idOrga){
		$orga=DAO::getOne("models\\Organization", $idOrga,true,true);
		$this->loadView('Organisations/display .html',["orga"=>$orga]);

	}

}
