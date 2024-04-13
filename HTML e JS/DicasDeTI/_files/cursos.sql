PRAGMA foreign_keys = ON;

DROP TABLE IF EXISTS cursos;

CREATE TABLE IF NOT EXISTS cursos (
    idcurso integer PRIMARY KEY AUTOINCREMENT,
    nome varchar(30) unique NOT NULL,
    descricao text,
    carga integer unsigned,
    totaulas integer unsigned,
    ano integer DEFAULT '2016'
);

INSERT INTO cursos VALUES(1,'HTML5','Curso de HTML5',40,37,2014);
INSERT INTO cursos VALUES(2,'Algoritmos','Lógica de Programação',20,15,2014);
INSERT INTO cursos VALUES(3,'Photoshop5','Dicas de Photoshop CC',10,8,2014);
INSERT INTO cursos VALUES(4,'PHP','Curso de PHP para iniciantes',40,20,2015);
INSERT INTO cursos VALUES(5,'Java','Introdução à Linguagem Java',40,29,2015);
INSERT INTO cursos VALUES(6,'MySQL','Bancos de Dados MySQL',30,15,2016);
INSERT INTO cursos VALUES(7,'Word','Curso completo de Word',40,30,2016);
INSERT INTO cursos VALUES(8,'Python','Curso de Python',40,18,2017);
INSERT INTO cursos VALUES(9,'POO','Curso de Programação Orientada a Objetos',60,35,2016);
INSERT INTO cursos VALUES(10,'Excel','Curso completo de Excel',40,30,2017);
INSERT INTO cursos VALUES(11,'Responsividade','Curso de Responsividade',30,15,2018);
INSERT INTO cursos VALUES(12,'C++','Curso de C++ com Orientação a Objetos',40,25,2017);
INSERT INTO cursos VALUES(13,'C#','Curso de C#',30,12,2017);
INSERT INTO cursos VALUES(14,'Android','Curso de Desenvolvimento de Aplicativos para Android',60,30,2018);
INSERT INTO cursos VALUES(15,'JavaScript','Curso de JavaScript',35,18,2017);
INSERT INTO cursos VALUES(16,'PowerPoint','Curso completo de PowerPoint',30,12,2018);
INSERT INTO cursos VALUES(17,'Swift','Curso de Desenvolvimento de Aplicativos para iOS',60,30,2019);
INSERT INTO cursos VALUES(18,'Hardware','Curso de Montagem e Manutenção de PCs',30,12,2017);
INSERT INTO cursos VALUES(19,'Redes','Curso de Redes para Iniciantes',40,15,2016);
INSERT INTO cursos VALUES(20,'Segurança','Curso de Segurança',15,8,2018);
INSERT INTO cursos VALUES(21,'SEO','Curso de Otimização de Sites',30,12,2017);
INSERT INTO cursos VALUES(22,'Premiere','Curso de Edição de Vídeos com Premiere',20,10,2017);
INSERT INTO cursos VALUES(23,'After Effects','Curso de Efeitos em Vídeos com After Effects',20,10,2018);
INSERT INTO cursos VALUES(24,'WordPress','Curso de Criação de Sites com WordPress',60,30,2019);
INSERT INTO cursos VALUES(25,'Joomla','Curso de Criação de Sites com Joomla',60,30,2019);
INSERT INTO cursos VALUES(26,'Magento','Curso de Criação de Lojas Virtuais com Magento',50,25,2019);
INSERT INTO cursos VALUES(27,'Modelagem de Dados','Curso de Modelagem de Dados',30,12,2020);
INSERT INTO cursos VALUES(28,'HTML4','Curso Básico de HTML, versão 4.0',20,9,2010);
INSERT INTO cursos VALUES(29,'PHP7','Curso de PHP, versão 7.0',40,20,2020);
INSERT INTO cursos VALUES(30,'PHP4','Curso de PHP, versão 4.0',30,11,2010);

DROP TABLE IF EXISTS gafanhotos;

CREATE TABLE IF NOT EXISTS gafanhotos (
    id integer PRIMARY KEY AUTOINCREMENT,
    nome varchar(30),
    profissao varchar(20),
    nascimento date,
    sexo char(1),
    peso real,
    altura real,
    nacionalidade varchar(20) DEFAULT 'Brasil',
    cursopreferido integer,
    FOREIGN KEY(cursopreferido) REFERENCES cursos(idcurso)
);

INSERT INTO gafanhotos VALUES(1,'Daniel Morais','Auxiliar Administrat','1984-01-02','M',78.5,1.830000000000000071,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(2,'Talita Nascimento','Farmacêutico','1999-12-30','F',55.20000000000000284,1.649999999999999912,'Portugal',NULL);
INSERT INTO gafanhotos VALUES(3,'Emerson Gabriel','Programador','1920-12-30','M',50.20000000000000284,1.649999999999999912,'Moçambique',NULL);
INSERT INTO gafanhotos VALUES(4,'Lucas Damasceno','Auxiliar Administrat','1930-11-02','M',63.20000000000000284,1.75,'Irlanda',NULL);
INSERT INTO gafanhotos VALUES(5,'Leila Martins','Farmacêutico','1975-04-22','F',99.0,2.149999999999999912,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(6,'Letícia Neves','Programador','1999-12-03','F',87.0,2.0,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(7,'Janaína Couto','Auxiliar Administrat','1987-11-12','F',75.40000000000000569,1.659999999999999921,'EUA',NULL);
INSERT INTO gafanhotos VALUES(8,'Carlisson Rosa','Professor','2010-08-01','M',78.21999999999999887,1.979999999999999983,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(9,'Jackson Telles','Programador','1999-01-23','M',55.75,1.330000000000000071,'Portugal',NULL);
INSERT INTO gafanhotos VALUES(10,'Danilo Araujo','Dentista','1975-12-10','M',99.2099999999999938,1.870000000000000106,'EUA',NULL);
INSERT INTO gafanhotos VALUES(11,'Andreia Delfino','Auxiliar Administrat','1975-07-01','F',48.64000000000000056,1.540000000000000035,'Irlanda',NULL);
INSERT INTO gafanhotos VALUES(12,'Valter Vilmerson','Ator','1985-10-12','M',88.54999999999999716,2.029999999999999804,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(13,'Allan Silva','Programador','1993-11-11','M',76.98999999999999489,1.550000000000000044,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(14,'Rosana Kunz','Professor','1935-01-16','F',55.24000000000000198,1.870000000000000106,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(15,'Josiane Dutra','Empreendedor','1950-01-20','F',98.7000000000000028,1.040000000000000035,'Portugal',NULL);
INSERT INTO gafanhotos VALUES(16,'Elvis Schwarz','Dentista','2011-05-07','M',66.68999999999999773,1.760000000000000008,'EUA',NULL);
INSERT INTO gafanhotos VALUES(17,'Paulo Narley','Auxiliar Administrat','1997-03-17','M',120.0999999999999944,2.220000000000000196,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(18,'Joade Assis','Médico','1930-12-01','M',65.87999999999999546,1.780000000000000026,'França',NULL);
INSERT INTO gafanhotos VALUES(19,'Nara Matos','Programador','1978-03-17','F',65.90000000000000569,1.330000000000000071,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(20,'Marcos Dissotti','Empreendedor','2010-01-01','M',53.78999999999999915,1.540000000000000035,'Portugal',NULL);
INSERT INTO gafanhotos VALUES(21,'Ana Carolina Mendes','Ator','2000-12-15','F',88.29999999999999716,1.540000000000000035,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(22,'Guilherme de Sousa','Dentista','2001-05-18','M',132.6999999999999887,1.969999999999999974,'Moçambique',NULL);
INSERT INTO gafanhotos VALUES(23,'Bruno Torres','Auxiliar Administrat','2000-01-30','M',44.64999999999999858,1.649999999999999912,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(24,'Yuji Homa','Empreendedor','1996-12-25','M',33.89999999999999858,1.219999999999999974,'Japão',NULL);
INSERT INTO gafanhotos VALUES(25,'Raian Porto','Programador','1989-05-05','M',54.89000000000000056,1.540000000000000035,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(26,'Paulo Batista','Ator','1999-03-15','M',110.1200000000000045,1.870000000000000106,'Portugal',NULL);
INSERT INTO gafanhotos VALUES(27,'Monique Precivalli','Auxiliar Administrat','2013-12-30','F',48.20000000000000284,1.219999999999999974,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(28,'Herisson Silva','Auxiliar Administrat','1965-10-10','M',74.65000000000000569,1.560000000000000053,'EUA',NULL);
INSERT INTO gafanhotos VALUES(29,'Tiago Ulisses','Dentista','1993-04-22','M',150.3000000000000113,2.350000000000000088,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(30,'Anderson Rafael','Programador','1989-12-01','M',64.21999999999999887,1.439999999999999947,'Irlanda',NULL);
INSERT INTO gafanhotos VALUES(31,'Karine Ribeiro','Empreendedor','1988-10-01','F',42.10000000000000142,1.649999999999999912,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(32,'Roberto Luiz Debarba','Ator','2007-01-09','M',77.43999999999999773,1.560000000000000053,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(33,'Jarismar Andrade','Dentista','2000-06-23','F',63.70000000000000284,1.330000000000000071,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(34,'Janaina Oliveira','Professor','1955-03-12','F',52.89999999999999858,1.760000000000000008,'Canadá',NULL);
INSERT INTO gafanhotos VALUES(35,'Márcio Mello','Programador','2011-11-20','M',54.10999999999999944,1.550000000000000044,'EUA',NULL);
INSERT INTO gafanhotos VALUES(36,'Robson Rodolpho','Auxiliar Administrat','2000-08-08','M',110.0999999999999944,1.760000000000000008,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(37,'Daniele Moledo','Empreendedor','2006-08-11','F',101.2999999999999972,1.989999999999999992,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(38,'Neto Sophiate','Ator','1996-05-17','M',59.28000000000000113,1.649999999999999912,'Portugal',NULL);
INSERT INTO gafanhotos VALUES(39,'Neriton Dias','Auxiliar Administrat','2009-10-30','M',48.99000000000000198,1.290000000000000035,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(40,'André Schmidt','Programador','1993-07-26','M',55.36999999999999745,1.219999999999999974,'Angola',NULL);
INSERT INTO gafanhotos VALUES(41,'Isaias Buscarino','Dentista','2001-01-07','M',99.9000000000000056,1.550000000000000044,'Moçambique',NULL);
INSERT INTO gafanhotos VALUES(42,'Rafael Guimma','Empreendedor','1968-04-11','M',88.87999999999999546,1.540000000000000035,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(43,'Ana Carolina Hernandes','Ator','1970-10-11','F',65.40000000000000569,2.080000000000000071,'EUA',NULL);
INSERT INTO gafanhotos VALUES(44,'Luiz Paulo','Professor','1984-11-01','M',75.12000000000000454,1.379999999999999894,'Portugal',NULL);
INSERT INTO gafanhotos VALUES(45,'Bruna Teles','Programador','1980-11-07','F',55.10000000000000142,1.860000000000000097,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(46,'Diogo Padilha','Auxiliar Administrat','2000-03-03','M',54.34000000000000341,1.879999999999999894,'Angola',NULL);
INSERT INTO gafanhotos VALUES(47,'Bruno Miltersteiner','Dentista','1986-02-19','M',77.45000000000000284,1.649999999999999912,'Alemanha',NULL);
INSERT INTO gafanhotos VALUES(48,'Elaine Nunes','Programador','1998-08-15','F',35.89999999999999858,2.0,'Canadá',NULL);
INSERT INTO gafanhotos VALUES(49,'Silvio Ricardo','Programador','2012-03-12','M',65.98999999999999489,1.229999999999999983,'EUA',NULL);
INSERT INTO gafanhotos VALUES(50,'Denilson Barbosa da Silva','Empreendedor','2000-01-08','M',97.2999999999999972,2.0,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(51,'Jucinei Teixeira','Professor','1977-11-22','F',44.79999999999999715,1.760000000000000008,'Portugal',NULL);
INSERT INTO gafanhotos VALUES(52,'Bruna Santos','Auxiliar Administrat','1991-12-01','F',76.29999999999999716,1.449999999999999956,'Canadá',NULL);
INSERT INTO gafanhotos VALUES(53,'André Vitebo','Médico','1970-07-01','M',44.10999999999999944,1.550000000000000044,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(54,'Andre Santini','Programador','1991-08-15','M',66.0,1.760000000000000008,'Itália',NULL);
INSERT INTO gafanhotos VALUES(55,'Ruan Valente','Programador','1998-03-19','M',101.9000000000000056,1.760000000000000008,'Canadá',NULL);
INSERT INTO gafanhotos VALUES(56,'Nailton Mauricio','Médico','1992-04-25','M',86.01000000000000511,1.429999999999999938,'EUA',NULL);
INSERT INTO gafanhotos VALUES(57,'Rita Pontes','Professor','1999-09-02','F',54.10000000000000142,1.350000000000000088,'Angola',NULL);
INSERT INTO gafanhotos VALUES(58,'Carlos Camargo','Programador','2005-02-22','M',124.6500000000000056,1.330000000000000071,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(59,'Philppe Oliveira','Auxiliar Administrat','2000-05-23','M',105.0999999999999944,2.189999999999999947,'Brasil',NULL);
INSERT INTO gafanhotos VALUES(60,'Dayana Dias','Professor','1993-05-30','F',88.29999999999999716,1.659999999999999921,'Angola',NULL);
INSERT INTO gafanhotos VALUES(61,'Silvana Albuquerque','Programador','1999-05-22','F',56.0,1.5,'Brasil',NULL);
DELETE FROM sqlite_sequence;
INSERT INTO sqlite_sequence VALUES('cursos',30);
INSERT INTO sqlite_sequence VALUES('gafanhotos',61);