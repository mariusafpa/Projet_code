DROP DATABASE IF EXISTS evaluation;

CREATE  DATABASE evaluation CHARACTER SET utf8 COLLATE utf8_general_ci;

USE evaluation;

CREATE TABLE evaluation.client(
    cli_num INT(11)AUTO_INCREMENT NOT NULL,
    CLi_nom VARCHAR(50)NOT NULL,
    cli_adresse VARCHAR(50)NOT NULL,
    cli_tel VARCHAR(30)NOT NULL,
    PRIMARY KEY(cli_num)
)ENGINE=InnoDB;

CREATE TABLE evaluation.commande(
    com_num INT(11) AUTO_INCREMENT NOT NULL,
    cli_num INT(11) NOT NULL,
    com_date DATETIME NOT NULL,
    com_obs VARCHAR(50) NOT NULL,
    PRIMARY KEY(com_num),
    FOREIGN KEY (cli_num) REFERENCES client(cli_num)
)ENGINE=InnoDB;

CREATE TABLE evaluation.produit(
    pro_num INT(11) AUTO_INCREMENT NOT NULL,
    pro_libelle VARCHAR(50) NOT NULL,
    pro_description VARCHAR(50) NOT NULL,
    PRIMARY KEY(pro_num)
)ENGINE=InnoDB;



CREATE TABLE evaluation.est_compose(
    com_num INT(11) NOT NULL,
    pro_num INT(11) NOT NULL,
    est_qte INT(11) NOT NULL,
    FOREIGN KEY (com_num) REFERENCES commande(com_num),
    FOREIGN KEY (pro_num) REFERENCES produit(pro_num)
)ENGINE=InnoDB;

