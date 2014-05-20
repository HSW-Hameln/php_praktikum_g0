/*
 * Diese Datei wird in eine frisch generierte Datenbank geladen.
 *
 * Die Datenbank ist bereits ausgewählt. USE muss nicht genutzt werden.
 */
 CREATE TABLE example_autoincrement (
         id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         data VARCHAR(100)
       );
INSERT INTO example_autoincrement (data) VALUES ("HALLO WELT!");