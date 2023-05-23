CREATE TABLE utenti(
    UserId INT unsigned auto_increment NOT NULL,
    nome VARCHAR(50) NOT NULL,
    pwd CHAR(64) NOT NULL,
    primary key (UserId)
);

INSERT INTO utenti(nome, pwd) VALUES('$username', '$password')