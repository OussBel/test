<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de saisie des notes</title>
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Formulaire de saisie des notes</h1>
    <form name="noteForm" action="average.php" method="post" onsubmit="return validateForm()">
        <label for="etudiant">Étudiant :</label>
        <select name="etudiant_id" id="etudiant_id">
            <option value="1">KOTNI Hakim</option>
            <option value="2">LEROUX Sylvain</option>
            <option value="3">DITTMAR Julien</option>
        </select>
        <br><br>
        <label for="module">Module :</label>
        <select name="module_id" id="module_id">
            <option value="1">Mathématiques</option>
            <option value="2">Informatique</option>
            <option value="3">SVT</option>
            <option value="4">Littérature</option>
            <option value="5">Éducation Physique et Sportive</option>
        </select>
        <br><br>
        <label for="note">Note :</label>
        <input type="text" name="note" id="note">
        <br><br>
        <input type="submit" value="Ajouter la note">
    </form>
</body>
</html>
