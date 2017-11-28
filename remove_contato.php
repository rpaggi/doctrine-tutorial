<?php

require_once "bootstrap.php";

$id = $argv[1];

$contato = $entityManager->find('Contato', $id);

if($contato === null){
  echo "Contato $id não existe\n";
  exit(1);
}

$entityManager->remove($contato);
$entityManager->flush();