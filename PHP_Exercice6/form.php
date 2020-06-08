<h1><?php echo 'Partie 7 Exercice 6' ?></h1>

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
