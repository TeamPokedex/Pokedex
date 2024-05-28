<?php

    if(!empty($_GET['q'])){

        switch ($_GET['q']) {
            case 'value':
                echo "ok";
                break;
                
                default:
                echo "pas ok";
                break;
            }
    }else {
        echo "merguez";
    }
    