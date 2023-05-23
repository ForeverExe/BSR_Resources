CREATE TABLE utenti(
    UserId INT unsigned auto_increment NOT NULL,
    username VARCHAR(50) NOT NULL,
    pwd CHAR(64) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    team VARCHAR(50) NOT NULL,
    primary key (UserId)
);

CREATE TABLE log(
    LogId INT unsigned auto_increment NOT NULL,
    data DATE NOT NULL,
    action VARCHAR(100) NOT NULL,
    user INT unsigned NOT NULL,
    primary key (LogId),
    foreign key (user) references utenti(UserId)
);