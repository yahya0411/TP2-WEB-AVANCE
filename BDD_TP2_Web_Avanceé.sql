CREATE TABLE users (
 id_user  INT AUTO_INCREMENT PRIMARY KEY,
 Email     VARCHAR(20),
 mdps      VARCHAR(20),
 Role      VARCHAR(30)
);

CREATE TABLE commandes (
   Id_Commande INT AUTO_INCREMENT PRIMARY KEY,
   date_commande DATE,
   adresse_livraison VARCHAR(50),
   état_commande VARCHAR(20),
   id_artisan INT,
   Id_Livreur INT,
   Id_Consommateur INT,
   FOREIGN KEY(id_artisan) REFERENCES Artisan(id_artisan),
   FOREIGN KEY(Id_Livreur) REFERENCES Livreur(Id_Livreur),
   FOREIGN KEY(Id_Consommateur) REFERENCES Consommateur(Id_Consommateur)
);

CREATE TABLE consommateurs (
   Id_Consommateur INT AUTO_INCREMENT PRIMARY KEY,
   nom_consommateur VARCHAR(50),
   prénom_consommateur VARCHAR(50),
   téléphone DECIMAL(10,0),
   adresse VARCHAR(50),
   Email VARCHAR(20),
   ID_User    INT,
   FOREIGN KEY(ID_User) REFERENCES User(id_user)
);

CREATE TABLE evaluations (
   Id_Evaluation INT AUTO_INCREMENT PRIMARY KEY,
   type_evaluation VARCHAR(15),
   commentaire VARCHAR(50),
   Note DECIMAL(5,0),
   id_artisan INT,
   Id_Livreur INT,
   Id_Produit INT,
   FOREIGN KEY(id_artisan) REFERENCES Artisan(id_artisan),
   FOREIGN KEY(Id_Livreur) REFERENCES Livreur(Id_Livreur),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit)
);

CREATE TABLE images (
   Id_image INT AUTO_INCREMENT PRIMARY KEY,
   URL VARCHAR(255),
   Id_Produit INT,
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit)
   );

CREATE TABLE produits (
   Id_Produit INT AUTO_INCREMENT PRIMARY KEY,
   nom_produit VARCHAR(50),
   description VARCHAR(60),
   prix_par_piéce INT,
   quantité_minimale DECIMAL(3,0),
   Type_produit VARCHAR(20),
   sous_type VARCHAR(30),
   id_artisan INT,
   FOREIGN KEY(id_artisan) REFERENCES Artisan(id_artisan)
);

CREATE TABLE livreurs (
   Id_Livreur INT AUTO_INCREMENT PRIMARY KEY,
   nom_livreur VARCHAR(50),
   prénom_livreur VARCHAR(50),
   téléphone DECIMAL(10,0),
   adresse VARCHAR(50),
   Email VARCHAR(20),
   Disponibilité VARCHAR(5),
    ID_User    INT,
   FOREIGN KEY(ID_User) REFERENCES User(id_user)
);

CREATE TABLE artisans (
   id_artisan INT AUTO_INCREMENT PRIMARY KEY,
   nom_artisan VARCHAR(50),
   heure_d_ouvreture TIME,
   catégorie VARCHAR(20),
   Email VARCHAR(25),
   téléphone DECIMAL(10,0),
    ID_User    INT,
   FOREIGN KEY(ID_User) REFERENCES User(id_user)
   
);

CREATE TABLE concerners (
   Id_Produit INT,
   Id_Commande INT,
   PRIMARY KEY(Id_Produit, Id_Commande),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(Id_Commande) REFERENCES Commande(Id_Commande)
);

CREATE TABLE faires (
   Id_Consommateur INT,
   Id_Evaluation INT,
   PRIMARY KEY(Id_Consommateur, Id_Evaluation),
   FOREIGN KEY(Id_Consommateur) REFERENCES Consommateur(Id_Consommateur),
   FOREIGN KEY(Id_Evaluation) REFERENCES Evaluation(Id_Evaluation)
);

CREATE TABLE quantite_produits (
   Id_Produit INT,
   Id_Commande INT,
   quantité_demande DECIMAL(3,0),
   PRIMARY KEY(Id_Produit, Id_Commande),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(Id_Commande) REFERENCES Commande(Id_Commande)
);


