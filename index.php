<?php 

    var_dump($_GET);

    if(empty($_GET['q'])){
        //LIST POKEMON TYPES

    }else{
        switch ($_GET['q']){
            case "home":

                break;
            default:
                //LIST POKEMON TYPES
        }
    }

require('./views/search.php');