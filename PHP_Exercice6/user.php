<?php
        function showCiv($xciv) {
                $civ = htmlspecialchars($xciv);
                switch ($civ) {
                        case 'Mr':
                        case 'Mme':
                        case 'Autre':
                            return $civ;
                            break;                       
                        default:
                            return 'La civilité n\'est pas valable !';
                            break;
                }
        }

        function show_xName($xName) {
                $Name = htmlspecialchars($xName);
                preg_match('/[^\n\r0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,50}/', $Name, $matches_xName, PREG_UNMATCHED_AS_NULL);
                return ($Name == $matches_xName[0]) ? $Name : 'Le prénom n\'est pas valable !';
        }


