CREATE TABLE ctg_tipousuario (
id_tipousuario INT (11) NOT NULL AUTO_INCREMENT,
tx_tipousuario VARCHAR(20) DEFAUL NULL,
PRIMARY KEY (id_tipousuario)
) ENGINE=INNODB DEFAULT CHARSE=LATIN1;

insert into ctg_tiposusuario VALUES (0,'Administrador');
INSERT INTO ctg_tiposusuario VALUES (0,'Usuario Normal');

CREATE TABLE tbl_users(
id_usuario INT(11) NOT NULL AUTO_INCREMENT,
tx_nombre VARCHAR(50) NOT NULL,
tx_apellidoPaterno VARCHAR(50) NOT NULL,
tx_apellidoMaterno VARCHAR(50) NOT NULL,
tx_correo VARCHAR(50) NOT NULL,
tx_username VARCHAR(50) NOT NULL,
tx_password VARCHAR(20) NOT NULL,
id_tipousuario INT(11) DEFAULT NULL,
dt_registro DATETIME DEFAULT NULL,
PRIMARY KEY (id_usuario),
KEY id_tipousuario (id_tipousuario),
CONSTRAINT tbl_users_ibfk_1 FOREING KEY (id_tipousuario)
REFERENCES ctg_tipousuario (id_tipousuario)
) ENGINE=INNODB CHARSET=LATIN1;

INSERT INTO tbl_users VALUES (0,'Hector H','Herrera','Escobar','tripleh@gmail.com','kimu','admin',1,NOW());
INSERT INTO tbl_users VALUES (0,'Carlos','Gomez','Ordoñez','carlos04@gmail.com','Carlos','Carlos',2,NOW());
INSERT INTO tbl_users VALUES (0,'Jared','Gomez','Gomez','jaredg@gmail.com','jared','jared',2,NOW());

