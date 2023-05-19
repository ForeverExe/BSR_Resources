<?php
    if($_POST['scelta'] == "login"){
        echo("User:".$_POST['username']." - "."Passw:".$_POST['password']);
    }else if($_POST['scelta']== "register"){
        echo("User:".$_POST['registerUser']." - "."Passw:".$_POST['registerPassw']." ".$_POST['confirmPassw']);
    }
?>