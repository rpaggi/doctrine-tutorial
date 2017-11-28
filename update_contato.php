<?php
require_once "bootstrap.php";

$id = 1;
$newEmail = "ronaldo.paggi@gmail.com";

$contato = $entityManager->find('Contato', $id);

if($contato === null){
  echo "Contato $id não existe\n";
  exit(1);
}

$contato->setEmail($newEmail);

$entityManager->flush();