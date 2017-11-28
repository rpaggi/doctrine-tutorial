<?php

require_once "bootstrap.php";

$queryBuilder = $entityManager->createQueryBuilder();

$queryBuilder->select("c.nome")
            ->from("Contato", "c")
            ->where("c.id = :identifier")
            ->setParameter("identifier", $argv[1]);

$result = $queryBuilder->getQuery()->getScalarResult();

var_dump($result);