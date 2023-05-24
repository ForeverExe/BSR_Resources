<?php
    require_once("client/head.html");
    include("funzioni.php");
    
    if(isset($_REQUEST['scelta'])) $sc = $_REQUEST['scelta']; else $sc = null;
    if(isset($_REQUEST['err'])) $err = $_REQUEST['err']; else $err = null;

    switch($sc){
        //l'utente entrerà sempre qui, controlla la presenza del cookie e reindirizza al menu, altrimenti mostra form per login
        default:{
            if(isset($_COOKIE['user'])){
                header("Location: http://localhost/BSR_Resources/menu.php");
            }else
                require_once("client/login.html");
                if(isset($err)){
                    echo("<h2>Credenzali errate</h2>");
                }
            break;
        }
        case "login":{
            login($_POST['username'], $_POST['password']);
        }
        // case "register":{
        //     require_once("client/register.html");
        //     break;
        // }
    }
    
    require_once("client/foot.html");
?>