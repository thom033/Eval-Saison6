\c postgres
DROP DATABASE coworking;
create database coworking;
\c coworking;

CREATE TABLE admin (
    id_admin SERIAL PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

ALTER TABLE admin
ALTER COLUMN password TYPE VARCHAR(250);

CREATE TABLE client (
    id_client SERIAL PRIMARY KEY,
    numero_telephone VARCHAR(15) NOT NULL
);

CREATE TABLE espace (
    id_espace SERIAL PRIMARY KEY,
    val VARCHAR(50) NOT NULL,
    prix_heure DECIMAL(10, 2) NOT NULL
);

CREATE TABLE option (
    id_option SERIAL PRIMARY KEY,
    val VARCHAR(50) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL
);

CREATE TABLE reservation (
    id_reservation SERIAL PRIMARY KEY,
    id_client INT,
    id_espace INT,
    date_debut TIMESTAMP NOT NULL,
    date_fin TIMESTAMP NOT NULL,
    FOREIGN KEY (id_client) REFERENCES client(id_client),
    FOREIGN KEY (id_espace) REFERENCES espace(id_espace)
);

CREATE TABLE reservation_details (
    id_reservation INT,
    id_option INT,
    PRIMARY KEY (id_reservation, id_option),
    FOREIGN KEY (id_reservation) REFERENCES reservation(id_reservation),
    FOREIGN KEY (id_option) REFERENCES option(id_option)
);

CREATE TABLE paiement (
    id SERIAL PRIMARY KEY,
    id_reservation INT,
    reference VARCHAR(50) NOT NULL,
    isValidate BOOLEAN NOT NULL,
    date_paiement TIMESTAMP NOT NULL,
    FOREIGN KEY (id_reservation) REFERENCES reservation(id_reservation)
);
