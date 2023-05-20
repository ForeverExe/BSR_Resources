<?php
    require_once("client/head.html");
    
    if(isset($_REQUEST['scelta'])) $sc = $_REQUEST['scelta']; else $sc = null;
    switch($sc){
        //l'utente entrerà sempre qui, controlla la presenza del cookie e reindirizza alla chat, altrimenti mostra form con Script per login
        default:{
            if(isset($_COOKIE['user'])){
                header("Location: http://localhost/BSR_Resources/menu.php");
            }else
                require_once("client/login.html");
            break;
        }
        case "register":{
            require_once("client/register.html");
            break;
        }
    }
    
    require_once("client/foot.html");
?>