DROP DATABASE IF EXISTS hotel;

CREATE  DATABASE Hotel CHARACTER SET utf8 COLLATE utf8_general_ci;


USE Hotel;

CREATE TABLE Hotel.client (
    adresse_client VARCHAR(255)NOT NULL,
    Nom_client VARCHAR(255)NOT NULL,
    prenom_client VARCHAR(255)NOT NULL,
    id_client INT(11) AUTO_INCREMENT NOT NULL, 
    PRIMARY KEY(id_client)
    
)ENGINE =InnoDB;

CREATE TABLE Hotel.Station(
    id_station INT(11) AUTO_INCREMENT NOT NULL,
    nom_station VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_station)
    
)ENGINE =InnoDB;

CREATE TABLE Hotel.hotel_cal(
    capacite_hotel VARCHAR(255)NOT NULL,
    categorie_hotel VARCHAR(255) NOT NULL,
    nom_hotel VARCHAR(255) NOT NULL,
    adresse_hotel VARCHAR(255)NOT NULL,
    id_hotel INT(11)NOT NULL AUTO_INCREMENT,
    id_station INT(11)NOT NULL,
    PRIMARY KEY(id_hotel),
    FOREIGN KEY (id_station) REFERENCES station(id_station)
    
)ENGINE =InnoDB;

CREATE TABLE Hotel.chambre(
    capacite_chambre INT(11)NOT NULL,
    degre_confort INT(11)NOT NULL,
    exposition VARCHAR(6)NOT NULL,
    type_chambre VARCHAR(255)NOT NULL,
    id_chambre INT(11) NOT NULL AUTO_INCREMENT,
    id_hotel INT(11)NOT NULL,
    PRIMARY KEY(id_chambre),
    FOREIGN KEY(id_hotel) REFERENCES hotel_cal(id_hotel)

)ENGINE = InnoDB;

CREATE TABLE Hotel.reservation(
    id_chambre INT(11) NOT NULL,
    id_client INT(11)NOT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    date_reservation DATE NOT NULL,
    montant_arrhes INT(11)NOT NULL,
    prix_total INT(11)NOT NULL,
    FOREIGN KEY(id_chambre) REFERENCES chambre(id_chambre),
    FOREIGN KEY(id_client) REFERENCES client(id_client)
)ENGINE= InnoDB;


DROP USER IF EXISTS 'util1'@'%';
DROP USER IF EXISTS 'util2'@'%';
DROP USER IF EXISTS 'util3'@'%';

CREATE USER 'util1'@'%' IDENTIFIED BY 'thebig';
CREATE USER 'util2'@'%' IDENTIFIED BY 'thebig';
CREATE USER 'util3'@'%' IDENTIFIED BY 'thebig';


GRANT ALL PRIVILEGES 
ON Hotel
TO 'util1'@'%'
IDENTIFIED BY 'thebig1';

GRANT select
ON Hotel.*
TO 'util2'@'%'
IDENTIFIED BY 'thebig1';

GRANT show view
ON Hotel.Station
TO 'util3'@'%'
IDENTIFIED BY 'thebig1';


SELECT cli_nom,hot_nom, res_date_debut, res_date_fin 
FROM client 
JOIN reservation 
ON cli_id=res_cli_id 
JOIN chambre 
ON cha_id = res_cha_id 
JOIN hotel 
ON cha_hot_id=hot_id 
WHERE DATEDIFF(res_date_debut, res_date_fin) 

SELECT COUNT(DISTINCT hot_sta_id) 
FROM hotel 
JOIN station 
ON hot_sta_id=sta_id

SELECT numcom,numfou,nomfou 
FROM entcom 
JOIN fournis 
ON entcom.numfou=numfou.fournis