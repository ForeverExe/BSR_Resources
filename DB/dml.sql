INSERT INTO utenti(nome, pwd, nome, cognome, team) VALUES('$username', '$password', '$nome', '$cognome', '$team')
INSERT INTO log(data, action, user) VALUES(CURDATE(), '$action', '$userId')