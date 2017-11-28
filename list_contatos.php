<?php
// list_products.php
require_once "bootstrap.php";

$contatoRepository = $entityManager->getRepository('Contato');
$contatos = $contatoRepository->findAll();

foreach ($contatos as $contato) {
    echo sprintf("Nome: %s\n", $contato->getNome());
    echo sprintf("Email: %s\n", $contato->getEmail());
    echo sprintf("Endereco: %s\n", $contato->getEndereco());
    echo sprintf("Data de Nascimento: %s\n\n", $contato->getDataNascimento()->format("d-m-Y"));
}