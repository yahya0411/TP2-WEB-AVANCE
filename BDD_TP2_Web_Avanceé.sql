CREATE TABLE User (
 id_user  INT AUTO_INCREMENT PRIMARY KEY,
 Email     VARCHAR(20),
 mdps      VARCHAR(20),
 Role      VARCHAR(30)
);

CREATE TABLE Commande (
   Id_Commande INT AUTO_INCREMENT PRIMARY KEY,
   date_commande DATE,
   adresse_livraison VARCHAR(50),
   état_commande VARCHAR(20)
);

CREATE TABLE Consommateur (
   Id_Consommateur INT AUTO_INCREMENT PRIMARY KEY,
   nom_consommateur VARCHAR(50),
   prénom_consommateur VARCHAR(50),
   téléphone DECIMAL(10,0),
   adresse VARCHAR(50),
   Email VARCHAR(20),
   Id_Commande INT,
   ID_User    INT,
   FOREIGN KEY(Id_Commande) REFERENCES Commande(Id_Commande),
   FOREIGN KEY(ID_User) REFERENCES User(id_user)
);

CREATE TABLE Evaluation (
   Id_Evaluation INT AUTO_INCREMENT PRIMARY KEY,
   type_evaluation VARCHAR(15),
   commentaire VARCHAR(50),
   Note DECIMAL(5,0)
);

CREATE TABLE image (
   Id_image INT AUTO_INCREMENT PRIMARY KEY,
   URL VARCHAR(255)
);

CREATE TABLE Produit (
   Id_Produit INT AUTO_INCREMENT PRIMARY KEY,
   nom_produit VARCHAR(50),
   description VARCHAR(60),
   prix_par_piéce INT,
   quantité_minimale DECIMAL(3,0),
   Type_produit VARCHAR(20),
   sous_type VARCHAR(30),
   URL_photo_produit VARCHAR(100),
   Id_image INT,
   Id_Evaluation INT,
   FOREIGN KEY(Id_image) REFERENCES image(Id_image),
   FOREIGN KEY(Id_Evaluation) REFERENCES Evaluation(Id_Evaluation)
);

CREATE TABLE Livreur (
   Id_Livreur INT AUTO_INCREMENT PRIMARY KEY,
   nom_livreur VARCHAR(50),
   prénom_livreur VARCHAR(50),
   téléphone DECIMAL(10,0),
   adresse VARCHAR(50),
   Email VARCHAR(20),
   Disponibilité VARCHAR(5),
   URL_photo_livreur VARCHAR(50),
   Id_Evaluation INT,
   Id_Commande INT,
    ID_User    INT,
   FOREIGN KEY(Id_Evaluation) REFERENCES Evaluation(Id_Evaluation),
   FOREIGN KEY(Id_Commande) REFERENCES Commande(Id_Commande),
   FOREIGN KEY(ID_User) REFERENCES User(id_user)
);

CREATE TABLE Artisan (
   id_artisan INT AUTO_INCREMENT PRIMARY KEY,
   nom_artisan VARCHAR(50),
   heure_d_ouvreture TIME,
   catégorie VARCHAR(20),
   Email VARCHAR(25),
   téléphone DECIMAL(10,0),
   URL_photo_artisan VARCHAR(100),
   Id_Evaluation INT,
   Id_Commande INT,
   Id_Produit INT,
    ID_User    INT,
   FOREIGN KEY(Id_Evaluation) REFERENCES Evaluation(Id_Evaluation),
   FOREIGN KEY(Id_Commande) REFERENCES Commande(Id_Commande),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(ID_User) REFERENCES User(id_user)
   
);

CREATE TABLE concérner (
   Id_Produit INT,
   Id_Commande INT,
   PRIMARY KEY(Id_Produit, Id_Commande),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(Id_Commande) REFERENCES Commande(Id_Commande)
);

CREATE TABLE faire (
   Id_Consommateur INT,
   Id_Evaluation INT,
   PRIMARY KEY(Id_Consommateur, Id_Evaluation),
   FOREIGN KEY(Id_Consommateur) REFERENCES Consommateur(Id_Consommateur),
   FOREIGN KEY(Id_Evaluation) REFERENCES Evaluation(Id_Evaluation)
);

CREATE TABLE quantité_produit (
   Id_Produit INT,
   Id_Commande INT,
   quantité_demande DECIMAL(3,0),
   PRIMARY KEY(Id_Produit, Id_Commande),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(Id_Commande) REFERENCES Commande(Id_Commande)
);

CREATE TABLE Artisan_Produit (
   Id_Artisan INT,
   Id_Produit INT,
   PRIMARY KEY(Id_Artisan, Id_Produit),
   FOREIGN KEY(Id_Artisan) REFERENCES Artisan(id_artisan),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit)
);

CREATE TABLE Artisan_Commande (
   Id_Artisan INT,
   Id_Commande INT,
   PRIMARY KEY(Id_Artisan, Id_Commande),
   FOREIGN KEY(Id_Artisan) REFERENCES Artisan(id_artisan),
   FOREIGN KEY(Id_Commande) REFERENCES Commande(Id_Commande)
);

CREATE TABLE Artisan_Evaluation (
   Id_Artisan INT,
   Id_Evaluation INT,
   PRIMARY KEY(Id_Artisan, Id_Evaluation),
   FOREIGN KEY(Id_Artisan) REFERENCES Artisan(id_artisan),
   FOREIGN KEY(Id_Evaluation) REFERENCES Evaluation(Id_Evaluation)
);


CREATE TABLE Consommateur_Evaluation (
   Id_Consommateur INT,
   Id_Evaluation INT,
   PRIMARY KEY(Id_Consommateur, Id_Evaluation),
   FOREIGN KEY(Id_Consommateur) REFERENCES Consommateur(Id_Consommateur),
   FOREIGN KEY(Id_Evaluation) REFERENCES Evaluation(Id_Evaluation)
);

CREATE TABLE Produit_Evaluation (
   Id_Produit INT,
   Id_Evaluation INT,
   PRIMARY KEY(Id_Produit, Id_Evaluation),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(Id_Evaluation) REFERENCES Evaluation(Id_Evaluation)
);

CREATE TABLE Produit_Image (
   Id_Produit INT,
   Id_image INT,
   PRIMARY KEY(Id_Produit, Id_image),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(Id_image) REFERENCES image(Id_image)
);

CREATE TABLE Produit_Commande (
   Id_Produit INT,
   Id_Commande INT,
   PRIMARY KEY(Id_Produit, Id_Commande),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(Id_Commande) REFERENCES Commande(Id_Commande)
);

CREATE TABLE Livreur_Evaluation (
   Id_Livreur INT,
   Id_Evaluation INT,
   PRIMARY KEY(Id_Livreur, Id_Evaluation),
   FOREIGN KEY(Id_Livreur) REFERENCES Livreur(Id_Livreur),
   FOREIGN KEY(Id_Evaluation) REFERENCES Evaluation(Id_Evaluation)
);

CREATE TABLE Livreur_Commande (
   Id_Livreur INT,
   Id_Commande INT,
   PRIMARY KEY(Id_Livreur, Id_Commande),
   FOREIGN KEY(Id_Livreur) REFERENCES Livreur(Id_Livreur),
   FOREIGN KEY(Id_Commande) REFERENCES Commande(Id_Commande)
);

