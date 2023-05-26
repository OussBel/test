<?php

function moyenne($conn, $id) {

    $sql = "SELECT notes.note, modules.nom, modules.coefficient
             FROM notes JOIN etudiants
             ON notes.etudiant_id = etudiants.id
             JOIN modules ON modules.id = notes.module_id
             WHERE notes.etudiant_id = :id;";

    $stmt = $conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    $results = $stmt->fetchAll();

    $total = 0;

    foreach ($results as $result) {
        $note = intval($result['note']);
        $coeff = intval($result['coefficient']);
        $total = $coeff * $note + $total;
    }

    return $total / 11;
}