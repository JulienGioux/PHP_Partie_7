<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 7 Exercice 3</title>
</head>
<body>
    <form action="user.php" method="get">
    <fieldset>
            <legend>Ajouter un utilisateur :</legend>
            <label for="fName">Votre prénom :</label>
            <input type="text" id="fName" name="fName" maxlength="50" required="required" pattern="[^\n\r0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,50}" title="Not a valid name !">
            <label for="lName">Votre nom :</label>
            <input type="text" id="lName" name="lName" maxlength="50" required="required" pattern="[^\n\r0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,50}" title="Not a valid name !">
            <input type="submit" value="Envoyer">
    </fieldset>
    </form>
</body>
</html>