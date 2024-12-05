SELECT date_commande, nom_client, telephone_client, email_client, adresse_client, id_plat, total FROM commande;
SELECT plat.libelle AS nomduplat, categorie.libelle AS categorieplt FROM plat JOIN categorie ON plat.id_categorie = categorie.id;
SELECT libelle, active FROM categorie WHERE active = 'Yes';
SELECT plat.libelle, commande.quantite FROM plat JOIN commande ON plat.id = commande.id_plat WHERE commande.etat != 'annulée' ORDER BY commande.quantite DESC;
SELECT plat.libelle, SUM(commande.quantite * plat.prix) AS ca FROM plat JOIN commande ON plat.id = commande.id_plat WHERE commande.etat != 'annulée' GROUP BY plat.libelle ORDER BY 2 DESC LIMIT 1;
DELETE FROM plat WHERE active = 'no';
DELETE FROM commande WHERE etat = 'livrée';
INSERT INTO categorie (id, libelle, image, active) VALUES ('15', 'SPECIALITE_ALGERIENNE', 'CSCS.jpg','active');
UPDATE plat SET prix = prix *1.1 WHERE id_categorie = (SELECT id FROM categorie);
SELECT *FROM categorie WHERE active = 'Yes' LIMIT 6;
ALTER TABLE plat ADD COLUMN IF NOT EXISTS slug VARCHAR(255);
UPDATE  plat SET slug = 'districtburger' WHERE libelle = 'District Burger';
UPDATE  plat SET slug = 'pizzasaumon' WHERE libelle = 'PIZZA SAUMON';
UPDATE  plat SET slug = 'buffalochikenwrap' WHERE libelle = 'Buffalo Chicken Wrap';
UPDATE  plat SET slug = 'cheeseburger' WHERE libelle = 'Cheeseburger';
UPDATE  plat SET slug = 'patesbrocolicarbo' WHERE libelle = 'pates brocoli carbo';
UPDATE  plat SET slug = 'spaghettiauxlegumes' WHERE libelle = 'Spaghetti aux légumes';
UPDATE  plat SET slug = 'saladecesar' WHERE libelle = 'Salade César';
UPDATE  plat SET slug = 'pizzamargherita' WHERE libelle = 'Pizza Margherita';
UPDATE  plat SET slug = 'courgettesfarcies' WHERE libelle = 'Courgettes farcies';
UPDATE  plat SET slug = 'lasagnes' WHERE libelle = 'Lasagnes';
UPDATE  plat SET slug = 'tagliatellesausaumon' WHERE libelle = 'Tagliatelles au saumon';
UPDATE  plat SET slug = 'pizzahawaienne' WHERE libelle = 'pizza hawaienne';
UPDATE  plat SET slug = 'pizzaquatresfromages' WHERE libelle = 'pizza quatres fromages';
UPDATE  plat SET slug = 'burgerauboeuffaçonitalienne' WHERE libelle = 'burger au boeuf façon italienne';
UPDATE  plat SET slug = 'burgerdeboeufaufromage' WHERE libelle = 'Burger de bœuf au fromage';



