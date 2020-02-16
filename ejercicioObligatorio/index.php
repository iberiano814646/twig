<?php

require_once("vendor/autoload.php");
require_once ("Form.php");

$loader = new \Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new \Twig_Environment($loader);

$form = new Form();
$elements = $form->getNum();
$guardar = $form->getSave();

print $twig->render('numero.twig', ['post' => $_POST]);

if($elements > 0){
	print $twig->render('table.twig', ['num' => $elements]);

}



?>