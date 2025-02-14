-- Sélectionner tous les administrateurs
SELECT * FROM admin;

-- Sélectionner tous les clients
SELECT * FROM client;

-- Sélectionner tous les espaces
SELECT * FROM espace;

-- Sélectionner toutes les options
SELECT * FROM option;

-- Sélectionner toutes les réservations
SELECT * FROM reservation;

-- Sélectionner tous les détails de réservation
SELECT * FROM reservation_details;

-- Sélectionner tous les paiements
SELECT * FROM paiement;

-- Sélectionner les réservations d'un client spécifique
SELECT * FROM reservation WHERE id_client = 1;

-- Sélectionner les options d'une réservation spécifique
SELECT o.val, o.prix
FROM reservation_details rd
JOIN option o ON rd.id_option = o.id_option
WHERE rd.id_reservation = 1;

-- Sélectionner les paiements validés
SELECT * FROM paiement WHERE isValidate = TRUE;

-- Sélectionner les espaces et leurs options
SELECT e.val AS espace, o.val AS option
FROM espace_option eo
JOIN espace e ON eo.id_espace = e.id_espace
JOIN option o ON eo.id_option = o.id_option;

-- Sélectionner les réservations avec les détails des clients et des espaces
SELECT r.id_reservation, c.numero_telephone, e.val, r.date_debut, r.date_fin
FROM reservation r
JOIN client c ON r.id_client = c.id_client
JOIN espace e ON r.id_espace = e.id_espace;

-- Sélectionner les paiements avec les détails des réservations
SELECT p.id, p.reference, p.isValidate, p.date_paiement, r.id_client, r.id_espace
FROM paiement p
JOIN reservation r ON p.id_reservation = r.id_reservation;