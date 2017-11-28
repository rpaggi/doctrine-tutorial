<?php
// create_contato.php <name>
require_once "bootstrap.php";

$contato = new Contato();
$contato->setNome("Ronaldo Paggi");
$contato->setEmail("rpaggi@brq.com");
$contato->setEndereco("Av Henrique Gonçalves Baptista, 2245");
$contato->setDataNascimento(new \DateTime("1990-08-23"));

$entityManager->persist($contato);
$entityManager->flush();

echo "Created Contato with ID " . $contato->getId() . "\n";