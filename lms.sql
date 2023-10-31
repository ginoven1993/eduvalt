CREATE TABLE Admins (
    ID_Admin INT AUTO_INCREMENT  PRIMARY KEY,
    Nom VARCHAR(255),
    Email VARCHAR(255),
    Mot_de_passe VARCHAR(255),
    Autres_informations TEXT
);

CREATE TABLE Formateurs (
    ID_Formateur INT AUTO_INCREMENT PRIMARY KEY,
    Nom_formateur VARCHAR(255),
    title varchar(255),
    short_bio TEXT,
    long_bio TEXT
);

CREATE TABLE Categories (
    ID_Categorie INT AUTO_INCREMENT  PRIMARY KEY,
    Nom_Categorie VARCHAR(255),
    Description_Categorie TEXT
);

CREATE TABLE Formations (
    ID_Formation INT AUTO_INCREMENT  PRIMARY KEY,
    ID_Formateur INT,
    ID_Categorie INT,
    Titre VARCHAR(255),
    chapitre VARCHAR (255),
    Heure VARCHAR(255),
    Descriptionp TEXT,
    Descriptionc TEXT,
    Descriptiond TEXT,
    langue VARCHAR(255),
    Prix DECIMAL(10, 2),
    chapterone TEXT,
    chaptertwo TEXT,
    chapterthree TEXT,
    chapterfour TEXT,
    chapterfive TEXT,
    chaptersix TEXT,
    chapterseven TEXT,
    chaptereight TEXT,
    chapternine TEXT,
    chapterten TEXT,
    timeone VARCHAR(255),
    timetwo VARCHAR (255),
    timethree VARCHAR(255),
    timefour VARCHAR (255),
    timefive VARCHAR(255),
    timesix VARCHAR (255),
    timeseven VARCHAR(255),
    timeeight VARCHAR (255),
    timenine VARCHAR(255),
    timeten VARCHAR (255),
    studentLesson VARCHAR(255),
    studentTeacher VARCHAR(255),
    ratenote VARCHAR(255),
    FOREIGN KEY (ID_Formateur) REFERENCES Formateurs(ID_Formateur),
    FOREIGN KEY (ID_Categorie) REFERENCES Categories(ID_Categorie)
);

CREATE TABLE Images (
    ID_image INT AUTO_INCREMENT  PRIMARY KEY,
    ID_Formation INT,
    nom_image VARCHAR(255),
    FOREIGN KEY (ID_Formation) REFERENCES Formations (ID_Formation)
);

CREATE TABLE rate (
    ID_image INT AUTO_INCREMENT  PRIMARY KEY,
    ID_Formation INT,
    nom_image VARCHAR(255),
    FOREIGN KEY (ID_Formation) REFERENCES Formations (ID_Formation)
);
CREATE TABLE authors (
    ID_image INT AUTO_INCREMENT  PRIMARY KEY,
    ID_Formation INT,
    nom_image VARCHAR(255),
    FOREIGN KEY (ID_Formation) REFERENCES Formations (ID_Formation)
);
CREATE TABLE Videos (
    ID_video INT AUTO_INCREMENT  PRIMARY KEY,
    ID_Formation INT,
    Chemin_video VARCHAR(255),
    FOREIGN KEY (ID_Formation) REFERENCES Formations (ID_Formation)
);

CREATE TABLE Utilisateurs (
    ID_Utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Email VARCHAR(255),
    Mot_de_passe VARCHAR(255),
    Autres_informations TEXT
);

CREATE TABLE Achats (
    ID_Achat INT AUTO_INCREMENT  PRIMARY KEY,
    ID_Utilisateur INT,
    ID_Formation INT,
    Date_Achat DATE,
    Montant DECIMAL(10, 2),
    FOREIGN KEY (ID_Utilisateur) REFERENCES Utilisateurs(ID_Utilisateur),
    FOREIGN KEY (ID_Formation) REFERENCES Formations(ID_Formation)
);

