<?php

        $fName = htmlspecialchars($_POST['fName']);      
        $lName = htmlspecialchars($_POST['lName']);
        preg_match('/[^\n\r0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,50}/', $fName, $matches_fName, PREG_UNMATCHED_AS_NULL);
        preg_match('/[^\n\r0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,50}/', $lName, $matches_lName, PREG_UNMATCHED_AS_NULL);

        echo ($fName == $matches_fName[0]) ? $fName : 'Le prénom n\'est pas valable !';
        echo '<br>';
        echo ($lName == $matches_lName[0]) ? $lName : 'Le nom n\'est pas valable !';
