<?php require('user.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 7 Exercice 7</title>
</head>
<body>
    <?php (!(isset($_POST['civ'])) || !(isset($_POST['fName'])) || !(isset($_POST['lName']))) ? require('form.php') : '' ?>
    <p>
        <?= (isset($_POST['civ'])) ? showCiv($_POST['civ']) . '. ' : '' ?>
        <?= (isset($_POST['fName'])) ? show_xName($_POST['fName']) . ' ' : '' ?>
        <?= (isset($_POST['lName'])) ? show_xName($_POST['lName']) . ' ' : '' ?>
        <br>
        <?= (isset($_FILES['xFile'])) ? 'File name = ' . $_FILES['xFile']['name'] : '' ?>
        <br>
        <?= (isset($_FILES['xFile'])) ? 'File type = ' . $_FILES['xFile']['type'] : '' ?>
    </p>
</body>
</html>