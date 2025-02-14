-- Insertion des données dans la table admin
INSERT INTO admin (login, password) VALUES
('admin', 'admin');

-- Insertion des données dans la table admin avec mot de passe haché
INSERT INTO admin (login, password) VALUES
('user1', '$2a$12$e0MYzXyjpJS7Pd0RVvHwHeFX8zF5e6Y8y6v1Z6y5e6v1Z6y5e6v1Z'),
('user2', '$2a$12$XyjpJS7Pd0RVvHwHeFX8zF5e6Y8y6v1Z6y5e6v1Z6y5e6v1Z6y5e6v1Z');



-- Insertion des données dans la table client
INSERT INTO client (numero_telephone) VALUES
('0345030528'),
('033145783');

-- Insertion des données dans la table espace
INSERT INTO espace (val, prix_heure) VALUES
('Espace A', 10.00),
('Espace B', 15.00);

-- Insertion des données dans la table option
INSERT INTO option (val, prix) VALUES
('Imprimante', 5.00),
('Appareil Photo', 20.00),
('Projecteur', 10.00),
('Laptop', 25.00);

-- Insertion des données dans la table reservation
INSERT INTO reservation (id_client, id_espace, date_debut, date_fin) VALUES
(1, 1, '2025-02-12 09:00:00', '2025-02-12 12:00:00'),
(2, 2, '2025-02-13 14:00:00', '2025-02-13 18:00:00');

-- Insertion des données dans la table reservation_details
INSERT INTO reservation_details (id_reservation, id_option) VALUES
(1, 1),
(1, 2),
(2, 3);

-- Insertion des données dans la table paiement
INSERT INTO paiement (id_reservation, reference, isValidate, date_paiement) VALUES
(1, 'REF123', TRUE, '2025-02-12 08:00:00'),
(2, 'REF456', FALSE, '2025-02-13 13:00:00');
