-- Création de la base de données
CREATE DATABASE IF NOT EXISTS musique_db;
USE musique_db;

-- Table des styles musicaux
CREATE TABLE IF NOT EXISTS styles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL
);

-- Table des groupes
CREATE TABLE IF NOT EXISTS groupes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    annee_formation INT,
    style_id INT,
    FOREIGN KEY (style_id) REFERENCES styles(id)
);

-- Table des morceaux
CREATE TABLE IF NOT EXISTS morceaux (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL,
    annee_sortie INT,
    groupe_id INT,
    FOREIGN KEY (groupe_id) REFERENCES groupes(id)
);

-- Insertion des styles
INSERT INTO styles (nom) VALUES
('Rock'),
('Pop Rock'),
('Hard Rock'),
('Metal'),
('Pop');

-- Insertion des groupes
INSERT INTO groupes (nom, annee_formation, style_id) VALUES
('Queen', 1970, 1),
('The Beatles', 1960, 2),
('Metallica', 1981, 4),
('AC/DC', 1973, 3),
('Pink Floyd', 1965, 1);

-- Insertion des morceaux
INSERT INTO morceaux (titre, annee_sortie, groupe_id) VALUES
-- Queen
('Bohemian Rhapsody', 1975, 1),
('We Will Rock You', 1977, 1),
('Another One Bites the Dust', 1980, 1),
('Radio Ga Ga', 1984, 1),
('I Want to Break Free', 1984, 1),
('Dont Stop Me Now', 1979, 1),
('The Show Must Go On', 1991, 1),
('Somebody to Love', 1976, 1),

-- The Beatles
('Hey Jude', 1968, 2),
('Let It Be', 1970, 2),
('Yesterday', 1965, 2),
('Come Together', 1969, 2),
('Help!', 1965, 2),
('Yellow Submarine', 1966, 2),
('All You Need Is Love', 1967, 2),
('Here Comes the Sun', 1969, 2),

-- Metallica
('Nothing Else Matters', 1991, 3),
('Enter Sandman', 1991, 3),
('Master of Puppets', 1986, 3),
('One', 1988, 3),
('The Unforgiven', 1991, 3),
('Fade to Black', 1984, 3),
('For Whom the Bell Tolls', 1984, 3),
('Seek & Destroy', 1983, 3),

-- AC/DC
('Highway to Hell', 1979, 4),
('Back in Black', 1980, 4),
('Thunderstruck', 1990, 4),
('TNT', 1975, 4),
('Hells Bells', 1980, 4),
('You Shook Me All Night Long', 1980, 4),
('Its a Long Way to the Top', 1976, 4),
('Whole Lotta Rosie', 1977, 4),

-- Pink Floyd
('Another Brick in the Wall', 1979, 5),
('Wish You Were Here', 1975, 5),
('Money', 1973, 5),
('Comfortably Numb', 1979, 5),
('Time', 1973, 5),
('Us and Them', 1973, 5),
('Have a Cigar', 1975, 5),
('Learning to Fly', 1987, 5);
