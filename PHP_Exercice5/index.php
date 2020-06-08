<?php require('user.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 7 Exercice 5</title>
</head>
<body>
    <form action="index.php" method="post">
    <fieldset>
            <legend>Ajouter un utilisateur :</legend>
            <label for="civ">Civilité :</label>
            <select name="civ" id="civ">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
                <option value="Autre">Autre</option>
            </select>
            <label for="fName">Votre prénom :</label>
            <input type="text" id="fName" name="fName" maxlength="50" required="required" pattern="[^\n\r0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,50}" title="Not a valid name !">
            <label for="lName">Votre nom :</label>
            <input type="text" id="lName" name="lName" maxlength="50" required="required" pattern="[^\n\r0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,50}" title="Not a valid name !">
            <input type="submit" value="Envoyer">
    </fieldset>
    </form>
    <p>
        <?= (isset($_POST['civ'])) ? showCiv($_POST['civ']) . ' ' : '' ?>
        <?= (isset($_POST['fName'])) ? show_xName($_POST['fName']) . ' ' : '' ?>
        <?= (isset($_POST['lName'])) ? show_xName($_POST['lName']) . ' ' : '' ?>
    </p>
</body>
</html>