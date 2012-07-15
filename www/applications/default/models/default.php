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
	
		$this->table  = "datasets";
		$this->select = "SELECT sum(fac) as data FROM " . $this->table . " WHERE ";
	}

	public function getData() {
		if(POST("ent") == 0) {
			if(POST("eda") == 0) {
				$query = $this->select . "asis=";
			} else {
				$query = $this->select . "eda=" . POST("eda") . " and asis=";
			}
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
		$data["agenero"]["m"]  = $asism[0]["data"];
		$data["agenero"]["f"]  = $asisf[0]["data"];
		$data["nagenero"]["m"] = $nasism[0]["data"];
		$data["nagenero"]["f"] = $nasisf[0]["data"];
		$data["asis"]          = $asis[0]["data"];
		$data["nasis"]         = $nasis[0]["data"];
		
		return $data;
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
		
		$data["totales"][2] = $nasisr["2"][0]["data"];
		$data["totales"][3] = $nasisr["3"][0]["data"];
		$data["totales"][4] = $nasisr["4"][0]["data"];
		$data["totales"][5] = $nasisr["5"][0]["data"];
		$data["totales"][6] = $nasisr["6"][0]["data"];
		$data["totales"][7] = $nasisr["7"][0]["data"];
		
		$data["m"][2] = $nasisr["2m"][0]["data"];
		$data["m"][3] = $nasisr["3m"][0]["data"];
		$data["m"][4] = $nasisr["4m"][0]["data"];
		$data["m"][5] = $nasisr["5m"][0]["data"];
		$data["m"][6] = $nasisr["6m"][0]["data"];
		$data["m"][7] = $nasisr["7m"][0]["data"];
		
		$data["f"][2] = $nasisr["2f"][0]["data"];
		$data["f"][3] = $nasisr["3f"][0]["data"];
		$data["f"][4] = $nasisr["4f"][0]["data"];
		$data["f"][5] = $nasisr["5f"][0]["data"];
		$data["f"][6] = $nasisr["6f"][0]["data"];
		$data["f"][7] = $nasisr["7f"][0]["data"];

		return $data;
	}
}