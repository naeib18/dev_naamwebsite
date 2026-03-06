CREATE DATABASE IF NOT EXISTS dev_nieuwsbrief;
USE dev_nieuwsbrief;


CREATE TABLE IF NOT EXISTS aanvragen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    voornaam VARCHAR(100) NOT NULL,
    tussenvoegsel VARCHAR(50),
    achternaam VARCHAR(100) NOT NULL,
    straatnaam_nummer VARCHAR(255) NOT NULL,
    postcode VARCHAR(20) NOT NULL,
    woonplaats VARCHAR(100) NOT NULL,
    telefoon VARCHAR(20),
    akkoord TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE USER IF NOT EXISTS 'test_user'@'localhost' IDENTIFIED BY 'Welkom01!';
GRANT ALL PRIVILEGES ON dev_nieuwsbrief.* TO 'test_user'@'localhost';
FLUSH PRIVILEGES;
