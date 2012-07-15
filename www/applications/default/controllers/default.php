<?php
/**
 * Access from index.php:
 */


class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Default_Model = $this->model("Default_Model");
	}
	
	public function index() {
		if(POST("submit")) {
			$vars["data"] = $this->Default_Model->getData();
		}
		
		$vars["view"] = $this->view("welcome", TRUE);
		
		$this->render("content", $vars);
	}

	public function muestras() {
		$vars["view"] = $this->view("linear", TRUE);
		
		$this->render("content", $vars);
	}
	
	public function works() {
		$vars["data"]      = $this->Default_Model->getReasonsWork();
		$vars["incom"]     = $this->Default_Model->getIncome();
		$vars["edad5"]     = $this->Default_Model->getReasonsWorkEdad();
		$vars["edad6_12"]  = $this->Default_Model->getReasonsWorkEdad("6,7,8,9,10,11,12");
		$vars["edad13_15"] = $this->Default_Model->getReasonsWorkEdad("13,14,15");
		$vars["edad16_17"] = $this->Default_Model->getReasonsWorkEdad("16,17");
		$vars["view"]      = $this->view("works", TRUE);
		
		$this->render("content", $vars);
	}
	
	public function lenguajes() {
		$vars["view"] = $this->view("lenguajes", TRUE);
		
		$this->render("content", $vars);
	}
}
