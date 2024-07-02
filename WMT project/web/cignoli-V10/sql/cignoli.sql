drop database if exists cignoli;

create database cignoli;

use cignoli;

create table associazione(
	nome varchar(20) primary key,
	ID int
);

describe associazione;


insert into associazione values
('AC-Daimler',1890),
('AC-Stellantis',2139),
('AC-Volkswagen',1312),
('AC-BMW',2929),
('AC-MercedesBenz','1423'),
('AC-Ford','1112'),
('AC-Nissan','6564');

select * from associazione;


create table proprietarioConcessionaria(
	CF varchar(16) primary key,
	nomep varchar(20),
	cognome varchar(20),
	dataNascita date,
	email varchar(40),
	nome varchar(20),
	foreign key(nome) references associazione(nome)
);

describe proprietarioConcessionaria;


insert into proprietarioConcessionaria values
('E9VJM3V49F','Italo','Poggio','1985-11-05','poggio.concessionaria@gmail,com','AC-Daimler'),
('K03MD02KDO','Leonardo','Casa','1990-10-08','international.concessionaria@libero.it','AC-Stellantis'),
('VM201NWIE3','Isidoro','Carta','1989-02-02','concessionariacarta@gmail.com','AC-Volkswagen'),
('2KD92K320D','Elia','Secchio','1979-05-01','eliacarss@gmail.com','AC-BMW');



select * from proprietarioConcessionaria;



create table concessionaria(
	PI int primary key,
	nomeConcessionaria varchar(30),
	gruppoAppartenenza varchar(30),
	CF varchar(16),
	foreign key(CF) references proprietarioConcessionaria(CF)
);

describe concessionaria;


insert into concessionaria values
(102938,'poggio S.R.L','Volkswagen','E9VJM3V49F'),
(293847,'international S.R.L','Stellantis','K03MD02KDO'),
(384756,'carta S.P.A','Daimler AG','VM201NWIE3'),
(193912,'elia S.P.A','BMW group','2KD92K320D');


select * from concessionaria;


create table automobile(
	numeroTelaio varchar(17) primary key,
	tipologia varchar(30),
	marca varchar(20),
	modello varchar(20),
	motore varchar(20),
	cilindrata DECIMAL(6,2),
	CV int,
	alimentazione varchar(20),
	trazione varchar(20),
	chilometraggio varchar(30),
	accessori varchar(100),
	prezzo varchar(20),
	categoria varchar(20),
	mesiNoleggio varchar(20),
	numeroProprietari int,
	infoProblemi varchar(100),
	PI int,
	foreign key(PI) references concessionaria(PI)
);

describe automobile;


insert into automobile values																	

('z4mjvi3','KM-0','Mercedes-Benz','classe c63s coupe','V8 biturbo',3982,510,'benzina','posteriore','0 km','full-optional','85.410€','coupe','N.D',0,'N.D',384756),
('z1id133','usato','Fiat','Barchetta','L4',1747,131,'benzina','anteriore','121.932 km','clima,servosterzo,finestrini automatici,autoradio','17.121€','cabrio','N.D',1,'modulo climatizzatore rotto, perdita olio dal cambio',293847),
('zn3imiv','noleggio-lungo-termine','Lynk e Co','01','L3 turbo+EV',1500,261,'benzina+EV','anteriore','0 km','full-optional','35.000€','SUV','ogni mese da 550€',0,'N.D',102938),
('zmmv9i4','commerciale','Mercedes-AG','Unimog U 423','L6 turbo',7700,354,'diesel','4x4','0 km','full-optional','123.000€','veicolo speciale','N.D',0,'N.D',384756),
('z1o11ks','aziendale','Volkswagen','Passat variant','L4 turbo',1968,150,'diesel','anteriore','0 km','full-optional','42.000€','station wagon','N.D',0,'N.D',193912),
('zim3ijr','KM-0','Alfa Romeo','Giulia Quadrifoglio','V6 turbo',2891,510,'benzina','posteriore','0 km','full-optional','102.000€','berlina','N.D',0,'N.D',293847),
('zm595bm','usato','Mercedes-Benz','300SL','L6',2996,240,'benzina','posteriore','1843 km','autoradio,clima,specchietto esterno destro','930.000€','coupe','N.D',1,'N.D',384756);



select * from automobile;

-- aggiunta tabella per sistema di autenticazione
-- utilizziamo l'algoritmo di ciftratura md5 per cifrare la password
-- l'algoritmo md5 prende una stringa e la trasforma in una stringa cifrata di 32 caratteri

create table utente(
	username varchar(50) primary key,
	pwd varchar(32)
);

describe utente;

-- istesss
insert into utente values
('amministratore','e792cd9665119b1244e8afcf36fb5f48');

select * from utente;
















