<?php

class Pueblos {	
	
	private $pueblos;
	
	public function __construct(){
		//print 'constructor de la clase pueblo';
		//$this->pueblos = array();
	}


  public function filterPueblo($num) {
    $p =$this->pueblos;

	 
    return $p[$num];
  }


  public function count() {
    return count($this->pueblos);
  }


  public function getAll() {
    return $this->pueblos;
  }

  public function setPueblo($p) {
    $pueblos = $p;
    return true;
  }
  
  public function getElements() {
		
		$p =$this->pueblos;

	    return $p;
  }  

}

?>