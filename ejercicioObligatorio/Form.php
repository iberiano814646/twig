<?php
require_once ("Pueblos.php");

/**
 * 
 */
class Form{
	
	protected $num;
	

	//incializamos personas
	protected $data;

	public function __construct(){
    if(isset($_POST['numero'])){$this->num = $_POST['numero'] ?: '';};
    //print $this->num . ' pueblos <br>';
		$this->data=new Pueblos();
	}


  
  public function getSave() {
  	
  //print 'getSave';
    if(isset($_POST['guardar'])){
      //print 'pulso guardar';
      require_once('fichero.php');
      return true;
    };

    return false;
  }



  public function getNum(){
    if($this->num == ""){
      $this->num =0;
    };
    return $this->num;
  }


}


?>