<?php
    if($_POST['scelta'] == "login"){
        echo("User:".$_POST['username']." - "."Passw:".$_POST['password']);
    }else if($_POST['scelta']== "register"){
        if($_POST['registerPassw'] == $_POST['confirmPassw']){
            echo("Login corretto");
        }else{
            header("Location: http://localhost/BSR_Resources/index.php?res=error");
        }
    }
?>