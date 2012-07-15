<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Default_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
	
		$this->table  = "datasets2007";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
	}
	
	public function getCities() {
		$query = "SELECT * FROM totales";
		return $this->Db->query($query);
	}
	
	public function getData() {
		if(POST("year") == 1) {
			$this->table = "datasets2007";
			$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		} else {
			$this->table = "datasets2009";
			$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		}
		
		$data["work"]   = $this->getWork();
		$data["noWork"] = $this->getNoWork();
		
		if(POST("ent") == 0) {
			if(POST("eda") == 0) {
				$query = $this->select . "asis=";
			} else {
				$query = $this->select . "eda=" . POST("eda") . " and asis=";
			}
			
			$data["ent"] = $this->getCities();  
		} else {
			if(POST("eda") == 0) {
				$query = $this->select . "ent=" . POST("ent") . " and asis=";
			} else {
				$query = $this->select . "ent=" . POST("ent") . " and eda=" . POST("eda") . " and asis=";
			}
		}
		
		#Asisten y no asisten
		$asis  = $this->Db->query($query . "1");
		$nasis = $this->Db->query($query . "2");
		
		#Mujeres y hombres
		$asism = $this->Db->query($query . "1 and sex=1");
		$asisf = $this->Db->query($query . "1 and sex=2");
		
		$nasism = $this->Db->query($query . "2 and sex=1");
		$nasisf = $this->Db->query($query . "2 and sex=2");
		
		#Razon de inasistencia escolar
		$data["reasons"]       = $this->getReasons();
		$data["agenero"]["m"]  = (int) $asism[0]["data"];
		$data["agenero"]["f"]  = (int) $asisf[0]["data"];
		$data["nagenero"]["m"] = (int) $nasism[0]["data"];
		$data["nagenero"]["f"] = (int) $nasisf[0]["data"];
		$data["asis"]          = (int) $asis[0]["data"];
		$data["nasis"]         = (int) $nasis[0]["data"];
		
		return $data;
	}
	
	public function getWork() {
		if(POST("ent") == 0) {
			if(POST("eda") == 0) {
				$query = $this->select . "asis=2 and c_ocu=";
			} else {
				$query = $this->select . "eda=" . POST("eda") . " and asis=2 and c_ocu=";
			}
		} else {
			if(POST("eda") == 0) {
				$query = $this->select . "ent=" . POST("ent") . " and asis=2 and c_ocu=";
			} else {
				$query = $this->select . "ent=" . POST("ent") . " and eda=" . POST("eda") . " and asis=2 and c_ocu=";
			}
		}
		
		$sexm = " and sex=1";
		
		$workmy = $this->Db->query($query . "1" . $sexm);
		$workmn = $this->Db->query($query . "2" . $sexm);
		
		$sexm = " and sex=2";
		
		$workfy = $this->Db->query($query . "1" . $sexm);
		$workfn = $this->Db->query($query . "2" . $sexm);
		
		$work["f"]["y"] = (int) $workfy[0]["data"];
		$work["f"]["n"] = (int) $workfn[0]["data"];
		
		$work["m"]["y"] = (int) $workmy[0]["data"];
		$work["m"]["n"] = (int) $workmn[0]["data"];
		
		return $work;
	}
	
	public function getNoWork() {
		if(POST("ent") == 0) {
			if(POST("eda") == 0) {
				$query = $this->select . "asis=1 and c_ocu=";
			} else {
				$query = $this->select . "eda=" . POST("eda") . " and asis=1 and c_ocu=";
			}
		} else {
			if(POST("eda") == 0) {
				$query = $this->select . "ent=" . POST("ent") . " and asis=1 and c_ocu=";
			} else {
				$query = $this->select . "ent=" . POST("ent") . " and eda=" . POST("eda") . " and asis=1 and c_ocu=";
			}
		}
		
		$sexm = " and sex=1";
		
		$workmy = $this->Db->query($query . "1" . $sexm);
		$workmn = $this->Db->query($query . "2" . $sexm);
		
		$sexm = " and sex=2";
		
		$workfy = $this->Db->query($query . "1" . $sexm);
		$workfn = $this->Db->query($query . "2" . $sexm);
		
		$work["f"]["y"] = (int) $workfy[0]["data"];
		$work["f"]["n"] = (int) $workfn[0]["data"];
		
		$work["m"]["y"] = (int) $workmy[0]["data"];
		$work["m"]["n"] = (int) $workmn[0]["data"];
		
		return $work;
	}
	
	public function getReasons() {
		if(POST("ent") == 0) {
			if(POST("eda") == 0) {
				$query = $this->select . "asis=2 and n_asis_por=";
			} else {
				$query = $this->select . "eda=" . POST("eda") . " and asis=2 and n_asis_por=";
			}
		} else {
			if(POST("eda") == 0) {
				$query = $this->select . "ent=" . POST("ent") . " and asis=2 and n_asis_por=";
			} else {
				$query = $this->select . "ent=" . POST("ent") . " and eda=" . POST("eda") . " and asis=2 and n_asis_por=";
			}
		}
		
		$nasisr["2"] = $this->Db->query($query . "2");
		$nasisr["3"] = $this->Db->query($query . "3");
		$nasisr["4"] = $this->Db->query($query . "4");
		$nasisr["5"] = $this->Db->query($query . "5");
		$nasisr["6"] = $this->Db->query($query . "6");
		$nasisr["7"] = $this->Db->query($query . "7");
		
		$sexm = " and sex=1";
		
		$nasisr["2m"] = $this->Db->query($query . "2" . $sexm);
		$nasisr["3m"] = $this->Db->query($query . "3" . $sexm);
		$nasisr["4m"] = $this->Db->query($query . "4" . $sexm);
		$nasisr["5m"] = $this->Db->query($query . "5" . $sexm);
		$nasisr["6m"] = $this->Db->query($query . "6" . $sexm);
		$nasisr["7m"] = $this->Db->query($query . "7" . $sexm);
		
		$sexm = " and sex=2";
		
		$nasisr["2f"] = $this->Db->query($query . "2" . $sexm);
		$nasisr["3f"] = $this->Db->query($query . "3" . $sexm);
		$nasisr["4f"] = $this->Db->query($query . "4" . $sexm);
		$nasisr["5f"] = $this->Db->query($query . "5" . $sexm);
		$nasisr["6f"] = $this->Db->query($query . "6" . $sexm);
		$nasisr["7f"] = $this->Db->query($query . "7" . $sexm);
		
		$data["totales"][2] = (int) $nasisr["2"][0]["data"];
		$data["totales"][3] = (int) $nasisr["3"][0]["data"];
		$data["totales"][4] = (int) $nasisr["4"][0]["data"];
		$data["totales"][5] = (int) $nasisr["5"][0]["data"];
		$data["totales"][6] = (int) $nasisr["6"][0]["data"];
		$data["totales"][7] = (int) $nasisr["7"][0]["data"];
		
		$data["m"][2] = (int) $nasisr["2m"][0]["data"];
		$data["m"][3] = (int) $nasisr["3m"][0]["data"];
		$data["m"][4] = (int) $nasisr["4m"][0]["data"];
		$data["m"][5] = (int) $nasisr["5m"][0]["data"];
		$data["m"][6] = (int) $nasisr["6m"][0]["data"];
		$data["m"][7] = (int) $nasisr["7m"][0]["data"];
		
		$data["f"][2] = (int) $nasisr["2f"][0]["data"];
		$data["f"][3] = (int) $nasisr["3f"][0]["data"];
		$data["f"][4] = (int) $nasisr["4f"][0]["data"];
		$data["f"][5] = (int) $nasisr["5f"][0]["data"];
		$data["f"][6] = (int) $nasisr["6f"][0]["data"];
		$data["f"][7] = (int) $nasisr["7f"][0]["data"];

		return $data;
	}
	
	public function getReasonsWork() {
		$this->table = "datasets2007";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		$query = $this->select . "c_ocu=1 and mot_tra=";
		
		$reason7["1"] = $this->Db->query($query . "1");
		$reason7["2"] = $this->Db->query($query . "2");
		$reason7["3"] = $this->Db->query($query . "3");
		$reason7["4"] = $this->Db->query($query . "4");
		$reason7["5"] = $this->Db->query($query . "5");
		$reason7["6"] = $this->Db->query($query . "6");
		
		$this->table = "datasets2009";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		$query = $this->select . "c_ocu=1 and mot_tra=";
		
		
		$reason9["1"] = $this->Db->query($query . "1");
		$reason9["2"] = $this->Db->query($query . "2");
		$reason9["3"] = $this->Db->query($query . "3");
		$reason9["4"] = $this->Db->query($query . "4");
		$reason9["5"] = $this->Db->query($query . "5");
		$reason9["6"] = $this->Db->query($query . "6");
		
		foreach($reason7 as $key => $value) {
			$data["2007"][$key] = (int) $value[0]["data"];
		}
		
		foreach($reason9 as $key => $value) {
			$data["2009"][$key] = (int) $value[0]["data"];
		}
		
		$data["m"] = $this->getReasonsWorkM();
		$data["f"] = $this->getReasonsWorkF();
		
		return $data;
	}
	
	public function getReasonsWorkM() {
		$this->table = "datasets2007";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		$query = $this->select . "c_ocu= 1 and sex=1 and mot_tra=";
		
		$reason7["1"] = $this->Db->query($query . "1");
		$reason7["2"] = $this->Db->query($query . "2");
		$reason7["3"] = $this->Db->query($query . "3");
		$reason7["4"] = $this->Db->query($query . "4");
		$reason7["5"] = $this->Db->query($query . "5");
		$reason7["6"] = $this->Db->query($query . "6");
		
		$this->table = "datasets2009";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		$query = $this->select . "c_ocu= 1 and sex=1 and mot_tra=";
		
		
		$reason9["1"] = $this->Db->query($query . "1");
		$reason9["2"] = $this->Db->query($query . "2");
		$reason9["3"] = $this->Db->query($query . "3");
		$reason9["4"] = $this->Db->query($query . "4");
		$reason9["5"] = $this->Db->query($query . "5");
		$reason9["6"] = $this->Db->query($query . "6");
		
		foreach($reason7 as $key => $value) {
			$data["2007"][$key] = (int) $value[0]["data"];
		}
		
		foreach($reason9 as $key => $value) {
			$data["2009"][$key] = (int) $value[0]["data"];
		}
		
		return $data;
	}
	
	public function getReasonsWorkF() {
		$this->table = "datasets2007";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		$query = $this->select . "c_ocu=1 and sex=2 and mot_tra=";
		
		$reason7["1"] = $this->Db->query($query . "1");
		$reason7["2"] = $this->Db->query($query . "2");
		$reason7["3"] = $this->Db->query($query . "3");
		$reason7["4"] = $this->Db->query($query . "4");
		$reason7["5"] = $this->Db->query($query . "5");
		$reason7["6"] = $this->Db->query($query . "6");
		
		$this->table = "datasets2009";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		$query = $this->select . "c_ocu=1 and sex=2 and mot_tra=";
		
		
		$reason9["1"] = $this->Db->query($query . "1");
		$reason9["2"] = $this->Db->query($query . "2");
		$reason9["3"] = $this->Db->query($query . "3");
		$reason9["4"] = $this->Db->query($query . "4");
		$reason9["5"] = $this->Db->query($query . "5");
		$reason9["6"] = $this->Db->query($query . "6");
		
		foreach($reason7 as $key => $value) {
			$data["2007"][$key] = (int) $value[0]["data"];
		}
		
		foreach($reason9 as $key => $value) {
			$data["2009"][$key] = (int) $value[0]["data"];
		}
		
		return $data;
	}
	
	public function getReasonsWorkEdad($eda = "5") {
		$this->table = "datasets2007";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		$query = $this->select . "c_ocu=1 and eda IN({$eda}) and mot_tra=";
		
		$reason7["1"] = $this->Db->query($query . "1");
		$reason7["2"] = $this->Db->query($query . "2");
		$reason7["3"] = $this->Db->query($query . "3");
		$reason7["4"] = $this->Db->query($query . "4");
		$reason7["5"] = $this->Db->query($query . "5");
		$reason7["6"] = $this->Db->query($query . "6");
		
		$this->table = "datasets2009";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		$query = $this->select . "c_ocu=1 and eda IN({$eda}) and mot_tra=";
		
		$reason9["1"] = $this->Db->query($query . "1");
		$reason9["2"] = $this->Db->query($query . "2");
		$reason9["3"] = $this->Db->query($query . "3");
		$reason9["4"] = $this->Db->query($query . "4");
		$reason9["5"] = $this->Db->query($query . "5");
		$reason9["6"] = $this->Db->query($query . "6");
		
		foreach($reason7 as $key => $value) {
			$data["2007"][$key] = (int) $value[0]["data"];
		}
		
		foreach($reason9 as $key => $value) {
			$data["2009"][$key] = (int) $value[0]["data"];
		}
		
		return $data;
	}
	
	public function getIncome() {
		$this->table = "datasets2007";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		$query = $this->select . "c_ocu=1 and niving=";
		
		$reason7["1"] = $this->Db->query($query . "1");
		$reason7["2"] = $this->Db->query($query . "2");
		$reason7["3"] = $this->Db->query($query . "3");
		$reason7["4"] = $this->Db->query($query . "4");
		$reason7["5"] = $this->Db->query($query . "5");
		$reason7["6"] = $this->Db->query($query . "6");
		
		$this->table = "datasets2009";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
		$query = $this->select . "c_ocu=1 and niving=";
		
		
		$reason9["1"] = $this->Db->query($query . "1");
		$reason9["2"] = $this->Db->query($query . "2");
		$reason9["3"] = $this->Db->query($query . "3");
		$reason9["4"] = $this->Db->query($query . "4");
		$reason9["5"] = $this->Db->query($query . "5");
		$reason9["6"] = $this->Db->query($query . "6");
		
		foreach($reason7 as $key => $value) {
			$data["2007"][$key] = (int) $value[0]["data"];
		}
		
		foreach($reason9 as $key => $value) {
			$data["2009"][$key] = (int) $value[0]["data"];
		}
		
		return $data;
	}
}
