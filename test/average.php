<?php
$servername = "localhost";
$username = "test";
$password = "test";
$dbname = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ///////////// Ajout des notes dans le tableau notes ///////////////////////////
        $etudiant_id = $_POST['etudiant_id'];
        $module_id = $_POST['module_id'];
        $note = $_POST['note'];

        $sql = "INSERT INTO notes (etudiant_id, module_id, note)
                VALUES (:etudiant_id,:module_id,:note)";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
            [':etudiant_id' => $etudiant_id, ':module_id' => $module_id, ':note' => $note]
        );
        echo "Note enregistrée avec succès.";
    }

    require 'moyenne.php';

    // Moyenne de Hakim Kotni

    $moyenne = number_format(moyenne($conn, 1), 2);
    echo '<p> La moyenne de Hakim Kotni est: ' . $moyenne . '</p>';

    // Moyenne de Leroux Sylvain
    $moyenne = number_format(moyenne($conn, 2), 2);
    echo '<p> La moyenne de Leroux Sylvain est: ' . $moyenne . '</p>';

    // Moyenne de Dittmar Julien
    $moyenne = number_format(moyenne($conn, 3), 2);
    echo '<p> La moyenne de Dittmar Julien est: ' . $moyenne . '</p>';

} catch (PDOException $e) {
    echo "Erreur lors de l'enregistrement de la note : " . $e->getMessage();
}

?>
