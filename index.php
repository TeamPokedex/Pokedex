<?php

    php_info();

    switch ($_GET['q']) {
        case 'value':
            echo "ok";
            break;
        
        default:
            echo "pas ok";
            break;
    }
    