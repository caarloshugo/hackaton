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
		$vars["view"] = $this->view("works", TRUE);
		
		$this->render("content", $vars);
	}
}
