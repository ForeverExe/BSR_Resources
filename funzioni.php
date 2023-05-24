<?php
    define("MYSQL_USER", "Manager");
    define("MYSQL_PASSWORD", "BeSeriousManager20xx");
    define("MYSQL_DB", "bsr_resources");
    define("MYSQL_HOST", "localhost");
    session_start();

    // switch($_POST['scelta']){
    //     case "login":{
            //controllare perche' all'accesso non esegue e non manda alla pagina, magari cambiare direttamente il metodo
            //if(isset($_POST['nome']) && isset($_POST['password'])){
                function login($usr, $psw){
                    $password = hash("sha256", $psw, false);
                    $db = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
                    $sql = "SELECT * FROM utenti Where username = '".$usr."' AND pwd = '$password'";
                    $rs = $db->query($sql);
                    /* prelevo l'id del profilo con cui sono loggato e lo setto in un cookie */
                    $record = $rs->fetch_assoc();
                    if($rs->num_rows != 0){
                        if ($db->query($sql)) {
                            setcookie("user", $record['username'], time() + 86400, "/");
                            setcookie("userID", $record['UserId'], time() + 86400, "/");
                            setcookie("name", $record['nome'], time()+86400, "/");
                            header("Location: http://localhost/BSR_Resources/index.php");
                        }else
                            header("Location: http://localhost/BSR_Resources/index.php?err=1");
                    }else{
                        echo(0);
                    }
                    $db->close();
                }
            //}
    //      }
    //     case "register":{
    //         if(isset($_POST['username']) && isset($_POST['password'])){
    //             $username = $_POST['username'];
    //             $password = hash("sha256", $_POST['password'], false);
    
    //             $db = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
    //             $sql = "SELECT * FROM utenti Where nome = '$username'";
    //             $result = $db->query($sql);
            
    //             if($result->num_rows == 0){ //controllo presenza utente, se esiste ristampa il form con un errore
    //                 $sql = "INSERT INTO utenti(nome, pwd, nome, cognome, team) VALUES('$username', '$password', '$nome', '$cognome', '$team')";
            
    //                 if($db->query($sql))
    //                     echo(1);
    //                 else
    //                     echo("errore in sql");
    //             }else{
    //                 echo(0);
    //             }
    //             $db->close();
    //         }
    //         break;
    //     }
    // }
?>