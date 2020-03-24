CREATE TABLE Utilisateur(
	login VARCHAR(20) PRIMARY KEY,
    mdp VARCHAR(20),
    nbCours1 INT,
    nbCours2 INT,
    ip VARCHAR(45)
);

INSERT INTO Utilisateur(login,mdp,nbCours1,nbCours2) VALUES
	('admin', 'admin', 0, 0),
    ('floliroy', 'stri', 0, 0),
    ('aaoun', 'stri', 0, 0),
    ('phpUser', 'php', 0, 0);